<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
        public function index()
    {
        return view('homes.home');
    }

    public function loginAdmin()
    {
        return view('admin.login');
    }

    public function postLoginAdmin(Request $request)
    {
        $remember = $request->has('remember_token') ? true : false;
        if (auth()->attempt([
            'name' => $request->get('name'),
            'emai' => $request->get('email'),
            'password' => $request->get('password'),
        ], $remember)) {
            return redirect()->to('index.admin');
        }
    }
}
