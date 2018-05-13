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

    public function getValueAttribute(){
        if(!empty($this->counter)){
            $ev = trim($this->counter, ';').';';
            return eval("return $ev");
        }
        return 0;
    }
}
