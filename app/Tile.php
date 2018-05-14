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
            try{
                $ev = "App\\".trim(trim($this->counter, ';'), 'App\\').';';
                return eval("return $ev");
            }
            catch(\Exception $e)
            {
                return "";
            }
        }
        return "";
    }
}


