<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IssueRequest extends FormRequest
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
        return [
            'title' => 'required',
            'description' => 'required',
            'submitter_email' => 'required|email',
            'submitter_telephone' => 'required',
            'image' => 'max:6000|image|mimetypes:image/jpeg,image/png|nullable',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Le titre est obligatoire',
        ];
    }
}
