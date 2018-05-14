<?php

namespace App;

use App\Zone;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ["name", "lat", "lng"];

    public function Zones(){
        return $this->hasMany(Zone::class);
    }
}
