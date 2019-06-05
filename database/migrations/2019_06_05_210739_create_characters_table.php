<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('actor_id')->unsigned();
            $table->bigInteger('serie_id')->unsigned();
            $table->string('name');
            $table->timestamps();
        });

        Schema::table('characters', function (Blueprint $table) {
            $table->foreign('actor_id')->references('id')->on('actors')->onDelete('cascade');
            $table->foreign('serie_id')->references('id')->on('series')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('characters', function (Blueprint $table) {
            $table->dropForeign('characters_actor_id_foreign');
            $table->dropForeign('characters_serie_id_foreign');
        });
        Schema::dropIfExists('characters');
    }
}
