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
        Schema::create('siteprivacy', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->timestamps();
        });

        Schema::create('siteterms', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('general', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('siteheader', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->softDeletes();
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
        Schema::dropIfExists('siteprivacy');
        Schema::dropIfExists('siteterms');
    }
};
