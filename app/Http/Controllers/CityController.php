<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;
use App\Http\Requests\CityRequest;
use App\Http\Controllers\Controller;

class CityController extends Controller
{
    public function __construct()
    {
        $this->middleware("manager");
    }

    public function index(){
        $cities = City::all();
        return view("cities.index", compact("cities"));
    }

    public function add(){
        $city = new City;
        $title = __("Add new City");
        return view("cities.edit", compact("city", "title"));
    }

    public function create(CityRequest $req){
        $city = City::create($req->all());
        return redirect("cities")->with("success_message", __("City created successfully"));
    }

    public function edit(City $city){
        $title = __("Edit City");
        return view("cities.edit", compact("city", "title"));
    }

    public function update(City $city, CityRequest $req){
        $city->update($req->all());
        return redirect("cities")->with("success_message", __("City modified successfully"));
    }

    public function delete(City $city){
        $title = __("Delete City");
        return view("cities.delete", compact("city", "title"));
    }

    public function destroy(City $city){
        $city->delete();
        return redirect("cities")->with("success_message", __("City deleted successfully"));
    }
}
