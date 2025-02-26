<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules\Password;

use function PHPUnit\Framework\callback;

class AuthController extends Controller
{
    //Register or Create User
    public function register(Request $request): RedirectResponse
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
            'phone_number.numeric' => 'شماره همراه باید عدد باشد',
            'phone_number.digits' => 'شماره همراه باید 11 رقم باشد',
        ]);
        //create user
        $user = User::create($fields);
        //login user
        if ($user) {
            Auth::login($user);
            Mail::to($request->email)->send(new WelcomeMail(Auth::user(), $request->password));
        } else {
            return redirect()->back()->with('erroe', 'مشکلی پیش آمده است . مجدد اقدام فرمایید.');
        }

        //send mail

        //redirect
        return redirect()->route('home')->withErrors([
            'success' => auth()->user()->name . ' خوش آمدید'
        ]);
    }

    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->validate(
            [
                'email' => ['required', 'email'],
                'password' => ['required'],

            ],
            [

                'email.required' => 'ایمیل معتبر خود را وارد کنید',
                'password.required' => 'رمز عبور خود را وارد کنید',

            ]
        );
        if (Auth::attempt($credentials, $request->remember)) {
            $request->session()->regenerate();
            return redirect()->route('home')->withErrors([
                'success' => auth()->user()->name . 'خوش آمدید'
            ]);
        } else {
            return redirect()->back()->with('error', callback('نام کاربری یا رمز عبور اشتباه است '));
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home')->withErrors(['success' => 'با موفقیت از سایت خارج شدید.']);
    }
}
