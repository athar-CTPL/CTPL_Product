<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('permissions', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('name');
        //     // $table->unsignedBigInteger('roles_id');
        //     // $table->foreign('roles_id')->references('id')->on('roles');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('permissions');
    }
}
