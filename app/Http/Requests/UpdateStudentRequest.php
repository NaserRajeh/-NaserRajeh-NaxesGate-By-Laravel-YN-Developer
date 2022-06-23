<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateStudentRequest extends FormRequest
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
       // dd($this->Student->id);
            return [
                'name' =>['required','string', 'max:255'],
                'number_student' =>['required'],
                'nationality_id' =>['required'],
                'id_number' =>['required'],
                'date_of_birth' =>['required'],
                'gender' =>['required'],
                'mother_name' =>['required'],
                'place_of_living' =>['required'],
                'email' => ['required', 'string', 'email', 
                         Rule::unique('students', 'email')->ignore($this->Student->id)],
                'phone' =>['required'],
                'recipe' =>['required'],
                'academic_year_id'=>['required'],
                'date_of_registration' =>['required'],
                'note' =>['required'],  
            ];
    }
}
