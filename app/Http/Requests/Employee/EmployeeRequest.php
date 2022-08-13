<?php

namespace App\Http\Requests\Employee;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'first_name'=>'required|min:2|max:30',
            'last_name'=>'required|min:2|max:30',
            'company_id'=>'required',
            'email'=>'required|min:4|max:64|unique:employees',
            'phone'=>'required|min:2|max:30'
        ];
    }
}
