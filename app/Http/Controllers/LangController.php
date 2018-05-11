<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lang;
use App\Http\Requests\LangRequest;
use App\Translation;

class LangController extends Controller
{

    public function __construct()
    {
        $this->middleware("dev");
    }

    private function icons(){
        $path = asset("storage/images/flags");
    }

    public function index(){
        $langs = Lang::all();
        return view("langs.index", compact("langs"));
    }

    public function add(){
        $lang = new Lang;
        $title = __("Add new Language");
        return view("langs.edit", compact("lang", "title"));
    }

    public function create(LangRequest $req){
        $lang = Lang::create($req->all());
        $json = resource_path('lang\\'.$lang->file.'.json');
        if(!file_exists($json)){
            file_put_contents($json, json_encode([]));
        }

        $lang->Translations()->saveMany(Translation::distinct("key")->select("key")->get()->map(function($t) { return new Translation(["lang_id" => $t->lang_id, "key" => $t->key]); }));
        return redirect("langs")->with("success_message", __("Language created successfully"));
    }
    
    public function edit(Lang $lang){
        $title = __("Edit Language");
        return view("langs.edit", compact("lang", "title"));
    }

    public function update(Lang $lang, LangRequest $req){
        $lang->update($req->all());
        return redirect("langs")->with("success_message", __("Language modified successfully"));
    }
        
    public function delete(Lang $lang){
        $title = __("Delete Language");
        return view("langs.delete", compact("lang", "title"));
    }

    public function destroy(Lang $lang){
        $lang->delete();
        return redirect("langs")->with("success_message", __("Language deleted successfully"));
    }

    public function missingTranslations(Lang $lang){
        $json = resource_path('lang\\'.$lang->file.'.json');
        if(!file_exists($json)){
            $trans = $lang->CompletedTranslations()->pluck("key", "val");
            file_put_contents($json, json_encode($trans));
        }
        $mapped = $lang->CompletedTranslations();
        $unmapped = $lang->MissingTranslations();
        return view("langs.translate", compact("lang", "mapped", "unmapped"));
    }

    public function updateTranslations(Lang $lang, Request $req){
        $json = resource_path('lang\\'.$lang->file.'.json');
        foreach($req->key as $k => $key)
        {
            $v = $req->val[$k];
            if(!empty($v)){
                $t = Translation::firstOrNew(["lang_id" => $lang->id, "key" => $key]);
                $t->val = $v;
                $t->save();
            }
        }
        file_put_contents($json, json_encode($lang->Translations()->whereNotNull("val")->pluck("val", "key")->toArray()));
        return redirect("langs")->with("success_message", __("Translations updated successfully"));
    }
}
