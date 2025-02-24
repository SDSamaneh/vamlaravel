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
        // $categories = Category::withCount('articles')->orderBy('id', 'desc')->get();
        $categories = Category::withCount('articles')->orderBy('id', 'desc')->paginate(3);

        // $categoryCount = Category::where('status', 'publish')->count();
        $categoryCount = Category::count();

        return view('dashboard.categoryNews', compact('categories', 'categoryCount'));
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
    public function edit(int $id): mixed
    {
        // $category = Category::findOrfail($id); //fetch category by id
        // return view('dashboard.editCategoryNews', compact(['category']));
        $category = Category::find($id);
        return $category ? view('dashboard.editCategoryNews', compact(['category'])) : redirect()->route('categoryNews.index')->with('error', 'دسته بندی مورد نظر پیدا نشد.');
    }
    public function update(Request $request, $id): RedirectResponse
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
        return $categoryUpdate ? redirect()->route('categoryNews.index')->with('success', 'دسته بندی مورد نظر با موفقیت به روز رسانی گردید.') : redirect()->route('category.edit')->with('error', 'خطایی رخ داده است');
    }
    public function destroy(int $id): RedirectResponse
    {
        $category = Category::findOrfail($id);
        $category->articles()->delete();
        $categoryDestroy = $category->delete();
        return $categoryDestroy ? redirect()->route('categoryNews.index')->with('success', 'دسته بندی مورد نظر با موفقیت حذف گردید') : redirect()->route('categoryNews.index')->with('error', 'خطایی در حذف دسته بندی مورد نظر رخ داده است');
    }
}
