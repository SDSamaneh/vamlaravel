<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\dashboard\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
    //
    public function index(): View
    {
        // $categories = Category::all();
        // $categories = Category::orderBy('id', 'desc')->get();
        $categories = Category::withCount('')->orderBy('id', 'desc')->get();
        return view('dashboard.categoryNews', compact('categories'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:50', 'unique:categories,name'],
            'slug' => ['required', 'string', 'max:50', 'unique:categories,slug'],
            'description' => ['nullable', 'string']
        ], [
            'name.required' => 'برای دسته بندی نام مناسب انتخاب کنید',
            'name.max' => 'نام حداکثر میتواند 50 حرف باشد',
            'name.unique' => 'نام قبلا ثبت شده است نام دیگری انتخاب کنید ',
            'slug.required' => 'برای دسته بندی شناسه لاتین انتخاب کنید',
            'slug.unique' => 'شناسه ای با این نام قبلا ثبت شده است نام دیگری انتخاب کنید',
            'slug.max' => 'حداکثر شامل 50 حرف باشد',
            'slug.slug' => 'فرمت شناسه صحیح نمیاشد اگر شناسه بیش از یک بخش دارد هر بخش را با ( - ) از هم جدا نمایید.',
        ]);

        return Category::create($request->all()) ? redirect()->back()->with('success', 'دسته بندی مورد نظر با موفقیت ایجاد شد') : redirect()->back()->with('error', 'خطایی در ثبت دسته بندی رخ داده است');
    }
}
