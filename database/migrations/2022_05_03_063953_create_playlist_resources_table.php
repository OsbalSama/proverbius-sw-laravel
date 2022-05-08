<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaylistResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playlist_resources', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('resource_type');
            $table->string('resource_link');
            $table->bigInteger('playlist_id')->unsigned();
            $table->timestamps();

            $table->foreign('playlist_id')->references('id')->on('playlists');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('playlist_resources');
    }
}
