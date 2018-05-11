<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Http\Requests\MenuRequest;

class MenuController extends Controller
{
    public function __construct()
    {
        $this->middleware("dev");
    }
    
    public function index(){
        return view("menus.index");
    }

    public function add(){
        $menu = new Menu;
        $title = __("Add new Menu");
        return view("menus.edit", compact("menu", "title"));
    }

    public function create(MenuRequest $req){
        $menu = Menu::create($req->all());        
        $menu->Roles()->sync($req->roles);
        return redirect("menus")->with("success_message", __("Menu created successfully"));
    }

    public function edit(Menu $menu){
        $title = __("Edit Menu");
        return view("menus.edit", compact("menu", "title"));
    }

    public function update(Menu $menu, MenuRequest $req){
        $menu->update($req->all());
        $menu->Roles()->sync($req->roles);
        return redirect("menus")->with("success_message", __("Menu modified successfully"));
    }

    public function delete(Menu $menu){
        $title = __("Delete Menu");
        return view("menus.delete", compact("menu", "title"));
    }

    public function destroy(Menu $menu){
        $menu->Roles()->sync([]);
        $menu->delete();
        return redirect("menus")->with("success_message", __("Menu deleted successfully"));
    }

    public function reorder(Request $req){
        $json = json_decode($req->json, true);
        $left = $json["left"];
        $right = $json["right"];
        Menu::updateAll($this->deNest($left), ["right" => 0]);
        Menu::updateAll($this->deNest($right), ["right" => 1]);
        return redirect("menus");
    }

    private function deNest($base, $parent = null){        
        $arr = $base;
        array_walk($arr, function(&$v, $k) use ($parent){
            $v = [ "id" => $v["id"], "sort" => $k, "parent" => $parent ];
        });
        foreach($base as $r){
            if(isset($r["children"])){
                $arr = array_merge($arr, $this->deNest($r["children"], $r["id"]));
            }
        }
        return $arr;
    }
}
