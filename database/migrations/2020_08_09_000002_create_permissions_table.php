<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionsTable extends Migration
{
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
<<<<<<< HEAD
            $table->timestamps();
            $table->softDeletes();          
=======
            $table->integer('feature_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
>>>>>>> b1c95138984331642b47d21530a00b3f3e4969c5
        });
    }
}
