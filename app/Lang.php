<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lang extends Model
{
    protected $fillable = 
    [
        "label",
        "file",
        "logo"
    ];

    public function Translations(){
        return $this->hasMany(Translation::class);
    }

    public function MissingTranslations(){
        $json = resource_path('lang\\'.$this->file.'.json');
        $json = array_keys(json_decode(file_get_contents($json), true));
        return $this->hasMany(Translation::class)->whereNull("val")->whereNotIn("key", $json)->get();
    }

    public function CompletedTranslations(){
        $json = resource_path('lang\\'.$this->file.'.json');
        $json = json_decode(file_get_contents($json), true);
        $db = $this->hasMany(Translation::class)->whereNotNull("val")->whereNotIn("key", array_keys($json))->pluck("val", "key")->toArray();
        return array_merge($db, $json);
    }
}
