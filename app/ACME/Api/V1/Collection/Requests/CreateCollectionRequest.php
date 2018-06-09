<?php

namespace App\ACME\Api\V1\Collection\Requests;

use Dingo\Api\Http\FormRequest;

class CreateCollectionRequest extends FormRequest
{
    public function rules()
    {
        return [
            'title' => 'required',
        ];
    }
    
    public function authorize()
    {
        return true;
    }
}
