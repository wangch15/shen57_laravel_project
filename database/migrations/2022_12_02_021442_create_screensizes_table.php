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
        Schema::create('screensizes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('size')->comment('螢幕尺寸');
            $table->string('screenid')->comment('編號')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('screensizes');
    }
};
