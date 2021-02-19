<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('content');
            $table->integer('span');
            $table->timestamps();

            //外部キー設定
            $table->foreign('user_id')->reference('id')->on('users');
        });
    }
    public function down()
    {
        Schema::dropIfExists('contents');
    }


    
}
