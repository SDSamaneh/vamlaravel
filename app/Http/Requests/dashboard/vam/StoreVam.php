<?php

namespace App\Http\Requests\dashboard\vam;

use Illuminate\Foundation\Http\FormRequest;


class StoreVam extends FormRequest
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
    
    //name	idCard	departmans_id	supervisors_id	price	description1	category_id	resone	member	status	validationvams	memberDate	memberPrice	debt	lastSalary	maxVam	number	date	description2
    public function rules(): array
    {
        return [
            'name' => 'required|string|persian_alpha',
            'idCard' => 'required|ir_national_id',
            'departmans_id' => 'required|exists:departmans,id',
            'supervisors_id' => 'required|exists:supervisors,id',
            'price' => 'required',
            'description1' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
            'resone' => 'required|in:Education,Marriage,Dowry,Medication,Accident,Insurance,Death,Other',
            'member' => 'required|in:No,Yes',
            'status' => 'required|in:No,Yes',
            'validationvams' => 'required|in:No,Yes',
            'memberDate' => 'nullable|persian_date',
            'memberPrice' => 'nullable|persian_num',
            'debt' => 'nullable|persian_num',
            'lastSalary' => 'nullable|persian_num',
            'maxVam' => 'nullable|string',
            'number' => 'nullable|string',
            'date' => 'nullable|string',
            'description2' => 'nullable|string'
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'نام و نام خانوادگی خود را وارد کنید',
            'idCard.required' => 'کد ملی خود را وارد کنید',
            'price.required' => 'شماره همراه خود را وارد کنید',
        ];
    }



}
