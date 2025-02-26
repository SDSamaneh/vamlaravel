<?php

namespace App\Http\Requests\dashboard\article;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

class StoreUpdateArticle extends FormRequest
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
            'title' => 'required|string|max:255',
            'type' => 'required|string|in:فوری,حوادث,خبری,متنی,سایر',
            'shortDescription' => 'required|string',
            'slug' => 'required|string|unique:articles,slug',
            'longDescription' => 'required',
            'image' => 'nullable|max:2048|mimes:jpeg,jpg,png,gif',
            'category_id' => 'required|exists:categories,id',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'عنوان خبر را وارد نمایید.',
            'title.max' => 'عنوان خبر باید شامل حداکثر 255 کاراکتر باشد.',
            'type.required' => 'نوع خبر را انتخاب کنید',
            'type.in' => 'نوع خبر درست نیست',
            'shortDescription.required' => 'متن را وارد کنید',
            'slug.required' => 'شناسه خبر را وارد کنید',
            'slug.unique' => 'این شناسه قبلا ثبت شده است. شناسه دیگری انتخاب کنید',
            'longDescription.required' => 'توضیح خبر را وارد کنید',
            // 'image.image' => 'یک فایل تصویری انتخاب کنید',
            'image.max' => 'حجم تصویر نباید بشتر از 2 مگابایت باشد',
            'image.mimes' => 'فایل مورد نظر باید شامل فرمت های (jpeg,jpg,png,gif) باشد.',
            'category_id.exists' => 'دسته بندی مورد نظر پیدا نشد',
        ];
    }

    public function withValidator(Validator $validator): void
    {
        $validator->after(function ($validator) {
            if ($this->input('title') !== strtoupper($this->input('title'))) {
                $validator->errors()->add('title', 'عنوان باید با کاراکتر های بزرگ باشد');
            }
        });
    }
}
