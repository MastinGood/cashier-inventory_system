<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('staffid')->unsigned();
            $table->string('address')->nullable();
            $table->string('email')->nullable();
            $table->string('religion')->nullable();
            $table->string('mobileno')->nullable();
            $table->string('interests')->nullable();
            $table->string('occupation')->nullable();
            $table->text('about')->nullable();
            $table->string('site')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('profiles');
    }
}
