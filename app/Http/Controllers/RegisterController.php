<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function Register(){
        return view('register');
    }

    public function getUser(Request $request){
        $fullName = $request->get('fullName');
        $email = $request->get('email');
        $phone = $request->get('phone');
        $address = $request->get('address');
        $identityCard = $request->get('identityCard');
        return view('info')->with([
            'fullName' => $fullName,
            'email' => $email,
            'phone' => $phone,
            'address' => $address,
            'identityCard' => $identityCard
        ]);
    }
}
