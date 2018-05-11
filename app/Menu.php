<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Role;

class Menu extends Model
{
    public static function updateAll(Array $arr, Array $opts = []){
        foreach($arr as $itm){
            Menu::whereId($itm["id"])->update(array_merge($itm, $opts));
        }
    }

    protected $fillable = [
        "label", "url", "icon", "parent", "right"
    ];

    public function Childs(){
        return $this->hasMany(Menu::class, "parent");
    }

    public function Roles(){
        return $this->belongsToMany(Role::class, "menus_roles");
    }

    public function HasChilds(){
        return $this->Childs->count() > 0;
    }
}
