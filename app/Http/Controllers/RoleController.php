<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use Auth;
use App\Http\Requests\RoleRequest;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware("dev");
    }
    
    public function index(){
        $roles = Role::where("level", "<", Auth::user()->level)->get();
        return view("roles.index", compact("roles"));
    }

    public function add(){
        $rol = new Role;
        $title = __("Add new Role");
        return view("roles.edit", compact("rol", "title"));
    }

    public function create(RoleRequest $req){
        Role::create($req->all());
        return redirect("roles")->with("success_message", __("Role created successfully"));
    }

    public function edit(Role $rol){
        $title = __("Edit Role");
        return view("roles.edit", compact("rol", "title"));
    }

    public function update(Role $rol, RoleRequest $req){
        $rol->update($req->all());
        return redirect("roles")->with("success_message", __("Role modified successfully"));
    }

    public function delete(Role $rol){
        $title = __("Delete Role");
        return view("roles.delete", compact("rol", "title"));
    }

    public function destroy(Role $rol){
        $rol->delete();
        return redirect("roles")->with("success_message", __("Role deleted successfully"));
    }
}
