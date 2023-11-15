<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user', function (Blueprint $table){
            $table->id();
            $table->string("role");
            $table->string("password");
            $table->string("username");
            $table->string("display");
            $table->string("email");
            $table->dateTime("date");
        });
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string("link_path");
            $table->string("image_path");
            $table->string("name");
            $table->string("description");
            $table->dateTime("publishment");
        });
        Schema::create('category', function (Blueprint $table) {
            $table->id();
            $table->string("name");
        });
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            //$table->integer("id")->autoIncrement()->primary();
            $table->timestamps();
            $table->string("description");
            $table->integer("scalar");
            $table->foreign("games_id")->references("id")->on("games");
        });
        Schema::create('favortie_list', function (Blueprint $table){
            $table->id();
            $table->foreign("games_id")->references("id")->on("games");
            $table->foreign("user_id")->references("id")->on("user");
        });
        Schema::create('games_list', function (Blueprint $table){
            $table->id();
            $table->foreign("games_id")->references("id")->on("games");
            $table->foreign("user_id")->references("id")->on("user");
        });
        Schema::create("category_list", function (Blueprint $table){
            $table->id();
            $table->foreign("games_id")->references("id")->on("games");
            $table->foreign("category_id")->references("id")->on("category");
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //DO NOT REMOVE THE COMMENT IN THE DOWN()-METHOD, IT CAN CREATE PROBLEMS.
        //IF THE COMMENT IS REMOVED. AND THE COMMAND IS EXECUTED IN THE TERMINAL.
        //THEN ALL TABLES WILL BE DELETED FROM THE DATABASE.
//        Schema::dropIfExists('user');
//        Schema::dropIfExists('games');
//        Schema::dropIfExists('category');
//        Schema::dropIfExists('ratings');
//        Schema::dropIfExists('favorite_list');
//        Schema::dropIfExists('games_list');
//        Schema::dropIfExists('category_list');
    }
};
