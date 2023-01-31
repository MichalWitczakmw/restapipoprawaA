<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePeopleRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            "Name" => "required|max:70",
            "LastName" => "required",
            "Street"=>"required"
        ];
    }
}
