<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Run the migrations.
     * oyun listelerini burdan kontrol ediyoruz
     * 
     * eğer provider kapamamk sadece oyun kapatmak istersek bu bölümden kapatıyoruz
     * 
     * 
     * 
     */
    public function up(): void {
        Schema::create('gamelist_tbl', function (Blueprint $table) {
            $table->id();
            $table->string('game_name');
            $table->integer('game_status');
            $table->integer('provider_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
                 Schema::dropIfExists('gamelist_tbl');

    }
};
