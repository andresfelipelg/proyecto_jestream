<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

//     public function register()
//     {
//         return view('auth.register');
//     }
//

}
