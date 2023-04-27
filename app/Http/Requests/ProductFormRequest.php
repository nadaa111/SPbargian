<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'category_id'=>[
                'required',
                'integer'
            ],
            'name'=>[
                'required',
                'integer'
            ],
            'slug'=>[
                'required',
                'integer',
                'max:255'
            ],
            'small_description'=>[
                'required',
                'integer',
            ],
            'description'=>[
                'required',
                'integer',
            ],
            'original_price'=>[
                'required',
                'integer',
            ],
            'selling_price'=>[
                'required',
                'integer',
            ],
            'quanitity'=>[
                'required',
                'integer',
            ],
            'trending'=>[
                'required',
                'integer',
            ],
            'status'=>[
                'required',
                'integer',
            ],
            'meta_title'=>[
                'required',
                'integer',
                'max:255'

            ],
            'meta_description'=>[
                'required',
                'integer',
            ],
            'meta_keyword'=>[
                'required',
                'integer',
            ],

            


        ];
    }
}
