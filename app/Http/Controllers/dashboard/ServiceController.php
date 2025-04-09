<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\dashboard\Category;
use App\Models\dashboard\Departmans;
use App\Models\dashboard\Service;
use App\Models\dashboard\Supervisors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{

    public function index()
    {
        $role = Auth::user()->role;
        $services = Service::all();
        $serviceCount = Service::count();
        return view('dashboard/allService', compact('role', 'serviceCount', 'services'));
    }

    public function create()
    {
        $role = Auth::user()->role;
        $services = Service::all();
        $categories = Category::all();
        $supervisors = Supervisors::all();
        $departmans = Departmans::all();
        return view('dashboard/createService', compact('services', 'categories', 'role', 'supervisors', 'departmans'));
    }

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
