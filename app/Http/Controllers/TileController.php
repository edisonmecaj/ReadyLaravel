<?php

namespace App\Http\Controllers;

use App\Tile;
use Illuminate\Http\Request;
use App\Http\Requests\TileRequest;

class TileController extends Controller
{
    public function __construct()
    {
        $this->middleware("dev");
    }

    public function index(){
        $tiles = Tile::orderBy("sort", "asc")->get();
        return view("tiles.index", compact("tiles"));
    }

    public function add(){
        $tile = new Tile;
        $title = __("Add new Tile");
        return view("tiles.edit", compact("tile", "title"));
    }

    public function create(TileRequest $req){
        $tile = Tile::create($req->all());
        $tile->Roles()->sync($req->roles);
        return redirect("tiles")->with("success_message", __("Tile created successfully"));
    }

    public function edit(Tile $tile){
        $title = __("Edit Tile");
        return view("tiles.edit", compact("tile", "title"));
    }

    public function update(Tile $tile, TileRequest $req){
        $tile->update($req->all());
        $tile->Roles()->sync($req->roles);
        return redirect("tiles")->with("success_message", __("Tile modified successfully"));
    }

    public function delete(Tile $tile){
        $title = __("Delete Tile");
        return view("tiles.delete", compact("tile", "title"));
    }

    public function destroy(Tile $tile){
        $tile->Roles()->sync([]);
        $tile->delete();
        return redirect("tiles")->with("success_message", __("Tile deleted successfully"));
    }

    public function reorder(Request $req){
        foreach($req->sort as $r){
            $t = Tile::find($r['id']);
            $t->sort = $r['sort'];
            $t->save();
        }
    }
}
