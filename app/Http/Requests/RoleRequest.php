<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;
use App\Role;

class RoleRequest extends FormRequest
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
        $id = isset($this->rol) && $this->rol != null && $this->rol->id != null ? $this->rol->id : "";
        return [
            "role" => "required|min:2|max:20|unique:roles,role,".$id,
            "label" => "required|min:3|max:20|unique:roles,label,".$id,
            "level" => "required|numeric|min:1|max:98"
        ];
    }

    public function unique($col, $prettyName = null){
        $prettyName = $prettyName ?: $col;
        $val = $this->toArray()[$col];
        if(Role::where($col, $val)->count() > 0){
            return false;
        }
        return true;
    }
}
