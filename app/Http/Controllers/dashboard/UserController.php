<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        $userCount = User::count();
        return view('dashboard/users', compact('users', 'userCount'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('dashboard.editUsers', compact('user'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $user = Auth::user();

        // اعتبارسنجی داده‌ها
        $request->validate([
            'name' => 'required|string',
            'idCard' => 'required|ir_national_id|unique:users,idCard,' . $user->id,
            'email' => 'required|email',
            'password' => 'nullable|min:8|confirmed', // "nullable" برای رمز اختیاری
        ]);

        // به‌روزرسانی اطلاعات کاربری
        $user->name = $request->name;
        $user->idCard = $request->idCard;
        $user->email = $request->email;

        // به‌روزرسانی رمز عبور (در صورت ورود)
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->route('users.edit')->with('success', 'اطلاعات با موفقیت به‌روزرسانی شد.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users = User::findOrfail($id);
        $usersDestroy = $users->delete();
        return $usersDestroy ? redirect()->route('users.index')->with('success', 'کاربر مورد نظر با موفقیت حذف گردید') : redirect()->route('users.index')->with('error', 'خطایی در حذف  کاربر مورد نظر رخ داده است');
    }
}
