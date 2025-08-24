<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
  public function index()
    {
        $users = User::all();
     return view('admin.management', compact('users'));
     dd($request->user());

    }

    

     public function about()
    {
        
     return view('admin.about' );
    }

         public function contact()
    {
        
     return view('admin.contact' );
    }

         public function services()
    {
        
     return view('admin.services' );
    }


}
