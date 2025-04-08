<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\dashboard\vam\StoreVam;
use App\Models\dashboard\Category;
use App\Models\dashboard\Departmans;
use App\Models\dashboard\Supervisors;
use App\Models\dashboard\Vam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vams = Vam::all();
        $role = Auth::user()->role;
        $vamCount = Vam::count();
        return view('dashboard/allVamKomiteh', compact('vams', 'role', 'vamCount'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $role = Auth::user()->role;
        $vams = Vam::all();
        $categories = Category::all();
        $supervisors = Supervisors::all();
        $departmans = Departmans::all();
        return view('dashboard/vamKomiteh', compact('vams', 'categories', 'role', 'supervisors', 'departmans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // اعتبارسنجی داده‌ها
        $fields = $request->validate([
            'name' => ['required', 'persian_alpha'],
            'idCard' => ['required', 'ir_national_id'],
            'departmans_id' => ['required', 'exists:departmans,id'],
            'supervisors_id' => ['required', 'exists:supervisors,id'],
            'price' => ['required'],
            'category_id' => ['required', 'exists:categories,id'],
            'description1' => ['nullable', 'string'],
            'resone' => ['required', 'in:Education,Marriage,Dowry,Medication,Accident,Insurance,Death,Other'],
            'member' => ['nullable', 'in:No,Yes'],
            'status' => ['nullable', 'in:No,Yes'],
            'validationvams' => ['nullable', 'in:No,Yes'],
            'memberDate' => ['nullable', 'persian_date'],
            'memberPrice' => ['nullable', 'persian_num'],
            'debt' => ['nullable', 'persian_num'],
            'lastSalary' => ['nullable', 'persian_num'],
            'maxVam' => ['nullable', 'string'],
            'number' => ['nullable', 'string'],
            'date' => ['nullable', 'string'],
            'description2' => ['nullable', 'string']
        ], [
            'name.required' => 'نام و نام خانوادگی خود را وارد کنید',
            'idCard.required' => 'کد ملی را وارد کنید',
            'price.required' => 'مبلغ درخواست را وارد کنید',
        ]);

        // کنترل مقادیر چک‌باکس‌ها
        $fields['member'] = $request->has('member') ? 'Yes' : 'No';
        $fields['validationvams'] = $request->has('validationvams') ? 'Yes' : 'No';

        // کنترل سطح دسترسی
        $role = Auth::user()->role;
        if (!in_array($role, ['admin', 'author', 'manager', 'humanResources', 'subscriber'])) {
            abort(403, 'دسترسی غیرمجاز');
        }

        // ایجاد رکورد
        $vams = Vam::create($fields);

        // بازگشت نتیجه
        return $vams
            ? redirect()->route('vam.create')->with('success', 'دسته‌بندی شما با موفقیت ثبت شد.')
            : redirect()->route('vam.create')->with('error', 'مشکلی رخ داده است.');
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
        $vam = Vam::find($id);
        $role = Auth::user()->role;

        return $vam ? view('dashboard.editVamKomiteh', compact('vam', 'role')) : redirect()->route('vam.index')->with('error', 'درخواست مورد نظر پیدا نشد.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vam = Vam::findOrfail($id);
        $vamDestroy = $vam->delete();
        return $vamDestroy ? redirect()->route('vam.index')->with('success', 'درخواست مورد نظر با موفقیت حذف گردید') : redirect()->route('vam.index')->with('error', 'خطایی در حذف درخواست  مورد نظر رخ داده است');
    }
}
