<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TileController extends Controller
{
    public function __construct()
    {
        $this->middleware("dev");
    }
}
