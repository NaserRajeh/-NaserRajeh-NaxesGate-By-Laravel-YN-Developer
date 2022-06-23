<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
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

  
    public function rules()
    {
        return [
            'name' =>['required','string', 'max:255'],
            'number_student' =>['required','unique:students'],
            'nationality_id' =>['required'],
            'id_number' =>['required'],
            'date_of_birth' =>['required'],
            'gender' =>['required'],
            'mother_name' =>['required'],
            'place_of_living' =>['required'],
            'email'=> ['required','unique:students'],
            'phone' =>['required'],
            'recipe' =>['required'],
            'academic_year_id'=>['required'],
            'date_of_registration' =>['required'],
            'note' =>['required'],  
        ];
       
    }
}
