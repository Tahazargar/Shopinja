<?php

namespace App\Http\Requests\Admin\Content;

use Illuminate\Foundation\Http\FormRequest;

class PostCategoryRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        if ($this->isMethod('post'))
        {
            return [
                'name' => 'required|max:120|min:2|regex:/^[ا-ی-a-zA-Z0-9\-۰-۹ي-.,ء ]+$/u',
                'description' => 'required|max:500|min:5',
                'image' => 'required|image|mimes:png,jpeg,jpg,gif',
                'status' => 'required|numeric|in:0,1',
                'tags' => 'required|regex:/^[ا-ی-a-zA-Z0-9\-۰-۹ي-.,ء ]+$/u',
            ];
        }
        else
        {
            return [
                'name' => 'required|max:120|min:2|regex:/^[ا-ی-a-zA-Z0-9\-۰-۹ي-.,ء ]+$/u',
                'description' => 'required|max:500|min:5',
                'image' => 'image|mimes:png,jpeg,jpg,gif',
                'status' => 'required|numeric|in:0,1',
                'tags' => 'required|regex:/^[ا-ی-a-zA-Z0-9\-۰-۹ي-.,ء ]+$/u',
            ];
        }
    }
}
