<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Menu;

class Role extends Model
{
    protected $fillable = [
        "role", "label", "level"
    ];

    public function Menus(){
        return $this->belongsToMany(Menu::class, "menus_roles");
    }

    public function Tiles(){
        return $this->hasMany(Tile::class);
    }

    public function getLabelTransAttribute(){
        return __($this->label);
    }
}
