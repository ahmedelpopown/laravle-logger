<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

 

return new class extends Migration{
    public function up(){
        Illuminate\Support\Facades\Schema::create('laravel_logger',function(Blueprint $table){
        $table->id();
        $table->string("name");
        $table->string("description");
        
        });
    }
    public function down(){
    \Illuminate\Support\Facades\Schema::dropIfExists('laravel_logger');
    }
};