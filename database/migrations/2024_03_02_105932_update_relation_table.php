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
        schema::table('fotos', function(Blueprint $table){
            $table->foreign('album_id')->references('id')->on('albums')->onUpdateCascade()->onDeleteCascade();
            $table->foreign('users_id')->references('id')->on('users')->onUpdateCascade()->onDeleteCascade();
        });
        schema::table('albums', function(Blueprint $table){
                $table->foreign('users_id')->references('id')->on('users')->onUpdateCascade()->onDeleteCascade();
        });
        schema::table('komentar', function(Blueprint $table){
            $table->foreign('users_id')->references('id')->on('users')->onUpdateCascade()->onDeleteCascade();
            $table->foreign('foto_id')->references('id')->on('fotos')->onUpdateCascade()->onDeleteCascade();
        });
        schema::table('likefotos', function(Blueprint $table){
            $table->foreign('foto_id')->references('id')->on('fotos')->onUpdateCascade()->onDeleteCascade();
            $table->foreign('users_id')->references('id')->on('users')->onUpdateCascade()->onDeleteCascade();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
