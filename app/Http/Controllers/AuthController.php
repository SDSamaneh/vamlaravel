<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

use function Laravel\Prompts\password;

class AuthController extends Controller
{
    //Register or Create User
    public function register(Request $request)
    {
        $fields = $request->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'email' => ['required', 'max:255', 'email', 'unique:users'],
            'password' => ['required', 'confirmed', Password::min(size: 8)->max(size: 12)->mixedCase()->letters()->numbers()->symbols()],
            'phone_number' => ['required', 'numeric', 'digits:11', 'unique:users']
        ], [
            'name.required' => 'نام و نام خانوادگی خود را وارد کنید',
            'name.min' => 'نام و نام خانوادگی باید حداقل 3 کاراکتر باشد',
            'name.max' => 'نام و نام خانوادگی باید حداکثر 255 کاراکتر باشد',
            'email.required' => 'ایمیل معتبر خود را وارد کنید',
            'email.max' => 'ایمیل باید حداکثر 255 کاراکتر باشد',
            'email.unique' => 'ایمیل قبلا موجود می باشد',
            'password.required' => 'رمز عبور خود را وارد کنید',
            'password.min' => 'رمز عبور باید حداقل 8 کاراکتر باشد',
            'password.max' => 'رمز عبور باید حداکثر 12 کاراکتر باشد',
            'password.confirmed' => 'رمز عبور باید با تکرار آن یکسان باشد',
            'phone_number.required' => 'شماره همراه خود را وارد کنید',
        ]);
        //create user
        $user = User::create($fields);
        //login user
        Auth::login($user);
        //send mail

        //redirect
        return redirect()->route('home')->withErrors([
            'successLogin' => auth()->user()->name . '.عزیز خوش آمدید' ;
        ]);
    }
}
