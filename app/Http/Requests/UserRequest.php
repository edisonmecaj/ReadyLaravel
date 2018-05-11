<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\User;
use Auth;

class UserRequest extends FormRequest
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
        $id = isset($this->user) && $this->user != null && $this->user->id != null ? $this->user->id : "";
        return [
            "username" => "required|string|min:3|max:20|without_spaces|unique:users,username,".$id,
            "fname"    => "required|alpha|min:3|max:20",
            "lname"    => "required|alpha|min:3|max:20",
            "email"    => "required|email|min:3|max:50|unique:users,email,".$id,
            "role_id"  => "required|numeric|min:2|exists:roles,id"
        ];
    }

    public function messages()
    {
        return [
            "username.without_spaces" => __("The username cannot contain spaces"),
            "role_id.exists" => __("The specified role does not exist")
        ];
    }

    public function unique($col){
        $val = $this->toArray()[$col];
        if(User::where($col, $val)->count() > 0){
            return false;
        }
        return true;
    }
    
}
