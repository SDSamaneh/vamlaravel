<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\dashboard\Departmans;
use App\Models\dashboard\Supervisors;
use Illuminate\Http\Request;

class SupervisorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $supervisors = Supervisors::all();
        $departmans = Departmans::all();
        $supervisorCount = Supervisors::count();
        return view('dashboard/supervisor', compact('supervisors', 'departmans', 'supervisorCount'));
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
        $fields = $request->validate([
            'name' => ['required', 'persian_alpha'],
            'idCard' => ['required', 'ir_national_id'],
            'departmans_id' => ['required', 'exists:departmans,id'],

        ], [
            'name.required' => 'نام و نام خانوادگی خود را وارد کنید',
            'idCard.required' => 'کد ملی خود را وارد کنید.'
        ]);

        $supervisor = Supervisors::create($fields);

        return $supervisor ? redirect()->route('supervisor.index')->with('success', '  مدیر واحد با موفقیت اضافه شد') :  redirect()->route('supervisor.index')->with('error', 'خطایی رخ داده است');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
