<?php

namespace App\Http\Requests\dashboard\category;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use Illuminate\Validation\Validator;

class UpdateCategory extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'author_id' => 'required|exists:users,id',
            'name' => 'required|string|max:50|unique:categories,name',
            'slug' => 'required|string|unique:categories,slug',
            'description' => 'nullable|string'
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'برای دسته بندی نام مناسب انتخاب کنید',
            'name.max' => 'نام حداکثر میتواند 50 حرف باشد',
            'name.unique' => 'نام قبلا ثبت شده است نام دیگری انتخاب کنید ',
            'slug.required' => 'برای دسته بندی شناسه لاتین انتخاب کنید',
            'slug.unique' => 'شناسه ای با این نام قبلا ثبت شده است نام دیگری انتخاب کنید',
            'slug.max' => 'حداکثر شامل 50 حرف باشد',
            'slug.slug' => 'فرمت شناسه صحیح نمیاشد اگر شناسه بیش از یک بخش دارد هر بخش را با ( - ) از هم جدا نمایید.',
            'thumbnail.max' => 'حجم تصویر نباید بشتر از 2 مگابایت باشد',
            'thumbnail.mimes' => 'فایل مورد نظر باید شامل فرمت های (jpeg,jpg,png,gif) باشد.',
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'author_id' => auth()->id()
        ]);


        if (!empty($this->slug)) {

            $this->merge(['slug' => Str::slug($this->slug)]);
        }
    }

    // public function withValidator(Validator $validator): void
    // {
     
    // }
}
