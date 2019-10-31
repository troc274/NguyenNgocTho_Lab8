<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Validator;

class registerController extends Controller
{
    Use RegistersUsers;


    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function vaidator(array $data)
    {
        return Validator::make($data , [
            'name'=>'required|string|max:225',
            'username'=>'required|string|max:20|unique:users',
            'email'=>'required|string|email|max:255|unique:users',
            'email'=>'required|string|min:6|confirmed',
        ]);
    }


}


