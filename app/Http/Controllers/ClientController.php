<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\File;
use App\Traits\UploadFile;
use DB;

class ClientController extends Controller

{
    use UploadFile;
    private $columns = ['clientName','phone','email','website','active','image'];
    public function index()
    {
        $client = Client::get();
        return view('client', compact('client'));
    }

    public function create()
    {
        return view('addClient');
    }
    public function insert()
    {
        return view('insertClient');
    }


    public function store(Request $request)
    {
        $messages = $this->errMsg();

        $data = $request->validate([
            'clientName' => 'required|max:100|min:5',
            'phone' => 'required|min:11',
            'email' => 'required|email:rfc',
            'website' => 'required',
            'city' => 'required|max:30',
            'image' => 'required'
        ], $messages);

        // $imgEXT = $request->image->getClientOriginalExtension();
        // $fileName = time() . '.' . $imgEXT;
        // $path = 'assets/images';
        // $request->image->move($path, $fileName);
        $fileName = $this->upload($request->image,'assets/images');
        $data['image'] = $fileName;

        $data['active'] = isset($request->active);
        
        Client::create($data);
        return redirect('client');
    }

    public function show(string $id)
    {
        $client = Client::findOrFail($id);
        return view('showClient', compact('client'));
    }

    public function edit(string $id)
    {
        $client = Client::findOrFail($id);
        return view('editClient', compact('client'));
    }

    public function update(Request $request, string $id)
    {
        $messages = $this->errMsg();
        $data = $request->validate([
            'clientName' => 'required|max:100|min:5',
            'phone' => 'required|min:11',
            'email' => 'required|email:rfc',
            'website' => 'required',
            'city' => 'required',
            'active' => 'required',
            'image' => 'nullable|mimes:png,jpg,jpeg|max:2048',
        ], $messages);

        if ($request->hasFile('image')) {

            $fileName = $this->upload($request->image,'assets/images');
            $data['image'] = $fileName;
        }
            // $imgEXT = $request->image->getClientOriginalExtension();
            // $fileName = time() . '.' . $imgEXT;
            // $path = 'assets/images';
            // $request->image->move($path, $fileName);
            // $data['image'] = $fileName;
        // } else {
        //     $client = Client::findOrFail($id);
        //     $data['image'] = $client->image;
        // }

        $data['active'] = isset($request->active);
        Client::where('id', $id)->update($data);
        return redirect('client');
    }

    public function destroy(Request $request)
    {
        $id = $request->id;
        Client::where('id', $id)->delete();
        return redirect('client');
    }

    public function trash()
    {
        $trash = Client::onlyTrashed()->get();
        return view('trashClient', compact('trash'));
    }

    public function restore(string $id)
    {
        Client::where('id', $id)->restore();
        return redirect('client');
    }

    public function forceDelete(Request $request)
    {
        $id = $request->id;
        Client::where('id', $id)->forceDelete();
        return redirect('trashClient');
    }

    public function errMsg()
    {
        return [
            'clientName.required' => 'The Client Name is Missed, please insert',
            'clientName.min' => 'Length less than 5, please insert more characters.',
            'phone.required' => 'The phone number is missing',
            'phone.min' => 'The phone number is incorrect',
        ];
    }
}