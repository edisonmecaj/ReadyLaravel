<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tile extends Model
{
    protected $fillable = [
        "label", "url", "color", "icon", "counter"
    ];

    public function Roles(){
        return $this->belongsToMany(Role::class, "roles_tiles");
    }
}
