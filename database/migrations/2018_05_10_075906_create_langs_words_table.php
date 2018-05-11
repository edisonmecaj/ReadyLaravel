<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLangsWordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('langs_words', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("lang_id")->unsigned();
            $table->foreign("lang_id")->references("id")->on("langs")->onDelete("CASCADE");
            $table->string("key");
            $table->string("val")->nullable();
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
        Schema::dropIfExists('langs_words');
    }
}
