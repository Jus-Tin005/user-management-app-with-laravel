<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permission_features', function (Blueprint $table) {
            $table->unsignedInteger('feature_id');
            $table->foreign('feature_id', 'feature_id_fk_1947081')->references('id')->on('features')->onDelete('cascade');
            $table->unsignedInteger('permission_id');
            $table->foreign('permission_id', 'permission_id_fk_1947081')->references('id')->on('permissions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permission_features');
    }
};
