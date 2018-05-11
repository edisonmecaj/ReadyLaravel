<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTilesPivot extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles_tiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("tile_id")->unsigned();
            $table->foreign("tile_id")->references("id")->on("tiles");
            $table->integer("role_id")->unsigned();
            $table->foreign("role_id")->references("id")->on("roles");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles_tiles');
    }
}
