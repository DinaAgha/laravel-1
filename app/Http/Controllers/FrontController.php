<?php
namespace App\Http\Controllers\FrontController;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontController extends Controller
{
     public function my_data(){
        return view('my_data');
     }
}
