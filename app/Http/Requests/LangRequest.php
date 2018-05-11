<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Auth;

class LangRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $id = isset($this->lang) && $this->lang != null && $this->lang->id != null ? $this->lang->id : "";
        return [
            "label" => "required|alpha|string|min:2|max:20|unique:langs,label,".$id,
            "file" => "required|string|min:2|max:20|unique:langs,file,".$id,
            "logo" => "required|string|min:2|max:20|unique:langs,logo,".$id
        ];
    }
}
