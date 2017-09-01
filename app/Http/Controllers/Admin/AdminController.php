<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }


    public function index(){


      dd('用户名：'.auth('admin')->user()->username);


        return view('admin.index');
    }


    public function user(){


        return view('admin.user.index');
    }

    public function create(Request $request){



        return view('admin.user.create');
    }
}
