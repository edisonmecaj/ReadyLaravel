<?php

namespace App\Http\Controllers;

use App\City;
use App\Zone;
use Illuminate\Http\Request;
use App\Http\Requests\ZoneRequest;
use App\Http\Controllers\Controller;

class ZoneController extends Controller
{
    public function __construct()
    {
        //$this->middleware("manager");
    }

    public function index(City $city){
        $zones = $city->Zones;
        return view("cities.zones.index", compact("zones", "city"));
    }

    public function add(City $city){
        $zone = new Zone;
        $title = __("Add new Zone");
        return view("cities.zones.edit", compact("zone", "title", "city"));
    }

    public function create(City $city, ZoneRequest $req){
        $zone = $city->Zones()->save(new Zone(["name" => $req->name]));
        return redirect("cities/{$city->id}/zones")->with("success_message", __("Zone created successfully"));
    }

    public function edit(City $city, Zone $zone){
        $title = __("Edit Zone");
        return view("cities.zones.edit", compact("zone", "title", "city"));
    }

    public function update(City $city, Zone $zone, ZoneRequest $req){
        $zone->update($req->all());
        return redirect("cities/{$city->id}/zones")->with("success_message", __("Zone modified successfully"));
    }

    public function delete(City $city, Zone $zone){
        $this->middleware("dev");
        $title = __("Delete Zone");
        return view("cities.zones.delete", compact("zone", "city", "title"));
    }
    
    public function destroy(City $city, Zone $zone){
        $this->middleware("dev");
        $zone->delete();
        return redirect("cities/{$city->id}/zones")->with("success_message", __("Zone deleted successfully"));
    }
}
