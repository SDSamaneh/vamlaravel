<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\dashboard\category\StoreUpdateCategory;
use App\Http\Requests\dashboard\category\UpdateCategory;
use App\Models\dashboard\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('dashboard/categoryKomiteh', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */

    public function store(StoreUpdateCategory $request)
    {
        $categories = $request->validated();

        // if ($request->hasFile('thumbnail')) {

        //     $file = $request->file('thumbnail');
        //     $imagePath = $file->store('images/category', 'public');

        //     $categories['thumbnail'] = $imagePath;
        // }

        $categories = Category::create($categories);

        return $categories ? redirect()->route('category.index')->with('success', 'دسته بندی شما با موفقیت ثبت شد') :  redirect()->route('category.index')->with('error', 'خطایی رخ داده است');
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
        $category = Category::find($id);
        return $category ? view('dashboard.editCategory', compact(['category'])) : redirect()->route('category.index')->with('error', 'دسته بندی مورد نظر پیدا نشد.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategory $request, string $id)
    {
        $category = Category::findOrfail($id);
        $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'slug' => ['required', 'string', 'max:50'],
            'description' => ['nullable', 'string']

        ], [
            'name.required' => 'برای دسته بندی نام مناسب انتخاب کنید',
            'name.max' => 'نام حداکثر میتواند 50 حرف باشد',
            'slug.required' => 'برای دسته بندی شناسه لاتین انتخاب کنید',
            'slug.max' => 'حداکثر شامل 50 حرف باشد',
            'slug.slug' => 'فرمت شناسه صحیح نمیاشد اگر شناسه بیش از یک بخش دارد هر بخش را با ( - ) از هم جدا نمایید.',
        ]);

        $categoryUpdate = $category->update($request->all());
        return $categoryUpdate ? redirect()->route('category.index')->with('success', 'دسته بندی مورد نظر با موفقیت به روز رسانی گردید.') : redirect()->route('category.edit')->with('error', 'خطایی رخ داده است');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrfail($id);
        $categoryDestroy = $category->delete();
        return $categoryDestroy ? redirect()->route('category.index')->with('success', 'دسته بندی مورد نظر با موفقیت حذف گردید') : redirect()->route('category.index')->with('error', 'خطایی در حذف دسته بندی مورد نظر رخ داده است');
    }
}
