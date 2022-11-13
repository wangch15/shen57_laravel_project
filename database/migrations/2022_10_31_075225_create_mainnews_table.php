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
        Schema::create('mainnews', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('title')->comment('主要消息標題');
            $table->longText('content')->comment('主要消息內文');
            $table->string('img_path')->comment('主要消息圖片');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mainnews');
    }
};
