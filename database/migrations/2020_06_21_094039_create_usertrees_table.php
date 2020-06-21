<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsertreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usertrees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('parent_id');
            $table->integer('parent_level');
            $table->tinyInteger('is_admin')->default(0);
            $table->foreignId('photo_id')->default(0);
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
        Schema::dropIfExists('usertrees');
    }
}
