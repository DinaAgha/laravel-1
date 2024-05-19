<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    private $columns = ['clientName','phone','email','website'];
    public function index()
    {
      $client = Client::get();
      return view('client', compact('client'));
    }


    /**
     * Show the form for creating a new resource.
     */
   
     public function create()
{
    return view('addClient');
}
    

    /**
     * Store a newly created resource in storage.
     */
    // public function store()
    // {
    //     $client = new Client();
    //     $client->clientName = 'Egypt Air';
    //     $client->phone = '01244874878';
    //     $client->email = 'EgyptAir@gmail.com';
    //     $client->website = 'https://egyptair.com';
    //     $client->save();
    //     return 'Inserted Successfully';
    
    // }
    
       
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    //     $client = new Client();
    //     $client->clientName = $request->clientName;
    //     $client->phone =$request->phone;
    //     $client->email =$request->email;
    //     $client->website =$request->website;
    //     $client->save();
       $data =$request->validate([
        'clientName' =>'required|max:100|min:5',
        'phone'=>'required|min:11',
        'email'=>'required|email:rfc',
        'website'=>'required',
       ]);
       
       Client::create($data);
       return redirect('client');
    }
    //     Client::create($request->only($this->columns));
    //     return redirect('client');
    // }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $client = Client::findOrFail($id);
        return view('showClient',compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $client = Client::findOrFail($id);
        return view('editClient',compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Client::where('id', $id)->update($request->only($this->columns));
        return redirect('client');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $id= $request->id;
        Client::where('id', $id)->delete();
        return redirect('client');
    }

    //** 
    //*trash.
    //
    public function trash()
    {
        $trash = Client::onlyTrashed()->get();
        return view('trashClient', compact('trash'));

    }

    //restore

    public function restore (string $id)
    {
      Client::where('id',$id)->restore();
    
      return redirect('client');
}

public function forceDelete(Request $request)
{
    
    {
        $id= $request->id;
        Client::where('id', $id)->forceDelete();
        return redirect('trashClient');

    }

}

}