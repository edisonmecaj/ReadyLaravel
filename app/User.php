<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Role;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'fname', 'lname', 'email', 'role_id', 'password', 'avatar', 'locale'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getFullNameAttribute(){
        return $this->fname." ".$this->lname;
    }

    public function Role(){
        return $this->belongsTo(Role::class);
    }

    public function getLevelAttribute(){
        return $this->Role->level;
    }

    public function getRoleLabelAttribute(){
        return $this->Role->label;
    }

    public function getProfilePicAttribute(){
        $img = $this->avatar ?: "default.png";
        $url = asset("storage/images/profiles/big/".$img);
        return $url;
    }

    public function getProfileThumbAttribute(){
        $img = $this->avatar ?: "default.png";
        $url = asset("storage/images/profiles/thumb/".$img);
        return $url;
    }
}
