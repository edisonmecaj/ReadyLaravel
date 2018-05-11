<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    protected $table = "langs_words";

    protected $fillable =
    [
        "lang_id", "key", "val"
    ];
}
