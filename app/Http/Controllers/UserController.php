<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Validator;
use Intervention\Image\ImageManagerStatic as Image;

class UserController extends Controller
{
    public function index(){
        $users = User::all()->where("level", "<", Auth::user()->level);
        return view("users.index", compact("users"));
    }

    public function add(){
        $user = new User;
        $title = __("Add new User");
        return view("users.edit", compact("user", "title"));
    }

    public function create(UserRequest $req){
        $req->request->add(["password" => Hash::make("password")]);
        User::create($req->all());
        return redirect("users")->with("success_message", __("User created successfully"));
    }

    public function edit(User $user){
        if($user->Role->role == "dev" && Auth::user()->Role->role != "dev"){
            return back()->withErrors(__("You cannot edit a developer User"));
        }
        $title = __("Edit User");
        return view("users.edit", compact("user", "title"));
    }

    public function update(User $user, UserRequest $req){
        if($user->Role->role == "dev" && Auth::user()->Role->role != "dev"){
            return back()->withErrors(__("You cannot edit a developer User"));
        }
        $user->update($req->all());
        return redirect("users")->with("success_message", __("User modified successfully"));
    }

    public function delete(User $user){
        $title = __("Delete User");
        return view("users.delete", compact("user", "title"));
    }

    public function destroy(User $user){
        $user->delete();
        return redirect("users")->with("success_message", __("User deleted successfully"));
    }

    
    //profile related functions
    public function profile(){
        $user = Auth::user();
        $title = __("My Profile");
        return view("users.profile", compact("user", "title"));
    }

    public function updateProfile(Request $req){
        $u = Auth::user();
        $u->update($req->all());
        return redirect("profile")->with("success_message", __("Profile modified successfully"));
    }

    public function changePassword(){
        return view("users.change_password");
    }

    public function updatePassword(Request $req){
        $val = Validator::make($req->all(), [
            'current_password' => 'required|min:6|max:25',
            'password' => 'required|min:6|max:25|confirmed|different:current_password',
            'password_confirmation' => 'required|min:6|max:25'
        ],[
            "password.different" => __("The new password must be different from the old one")
        ]);

        if($val->fails()){
            return back()->withErrors($val);
        }else{
            if (!Hash::check($req->current_password, Auth::user()->password))
            {
                return back()->withErrors(["current_password" => __("The current password is not correct")]);
            }
            else
            {
                $user = Auth::user();
                $user->password = Hash::make($req->password);
                $user->save();
                return redirect("profile")->with("success_message", __("Password changed successfully"));
            }
        }
    }

    public function changeEmail(){
        return view("users.change_email");
    }

    public function updateEmail(Request $req){
        if (!Hash::check($req->current_password, Auth::user()->password))
        {
            return back()->withErrors(["current_password" => __("The password is not correct")]);
        }
        else
        {
            $req->request->add(["current_email" => Auth::user()->email]);
            $val = Validator::make($req->all(), [
                "email" => "required|email|confirmed|different:current_email|unique:users",
                "email_confirmation" => "required|email"
            ],[
                "email.different" => __("The new eMail must be different from the old one")
            ]);

            if($val->fails()){
                return back()->withErrors($val);
            }
            else
            {
                $user = Auth::user();
                $user->email = $req->email;
                $user->save();
                return redirect("profile")->with("success_message", __("eMail changed successfully"));
            }
        }
    }

    public function changePicture(){
        return view("users.change_picture");
    }

    public function updatePicture(Request $req){
        $img = Image::make($req->image);
        $fn = uniqid().".png";        
        $img->resize(600, null, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });
        
        $img->save("storage/images/profiles/big/".$fn);
        
        $img->resize(100, null, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });
        
        $img->save("storage/images/profiles/thumb/".$fn);
        $user = Auth::user();
        $user->avatar = $fn;
        $user->save();
        return redirect("profile")->with("success_message", __("Profile Picture changed successfully"));
    }
}
