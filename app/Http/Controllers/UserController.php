<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //
    public function store(Request $request)
    {
        // dd($request->all());
        $formFields = $request->validate([
            'name' =>['required', 'min:3'],
            'email' => ['required','email',Rule::unique('users','email')],
            'contact' =>'required',
            'password'=>['required'],
        ]);
        //return "";
        $formFields['password'] = bcrypt($formFields['password']);
        $user = User::create($formFields);
        auth()->login($user);
        return redirect('/');
    }
    public function logout(Request $request)
    {
        
        
       
    
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        auth()->logout();
        return redirect('/');
    }
    public function login(Request $request)
    {
        
        $formFields = $request->validate([
            
            'email' => ['required','email'],
            'password'=>['required'],
        ]);
        if(auth()->attempt($formFields)){
            $request->session()->regenerate();
        return redirect('/');
        }
        return back();
    }
}
