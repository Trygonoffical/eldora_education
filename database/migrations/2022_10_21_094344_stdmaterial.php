<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Stdmaterial extends Migration
{
 
    public function up()
    {
        Schema::create('stdmaterials', function (Blueprint $table) {
            $table->id();
            $table->string('file');
            $table->string('catname');
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
        Schema::dropIfExists('stdmaterials');
    }
}
