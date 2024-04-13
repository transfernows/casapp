<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('playerrealtime_tbl', function (Blueprint $table) {
            
       
        $table->id();
        $table->integer('web_user_id');
        $table->integer('user_investment_id');
        $table->float('balance')->unique();
        $table->string('plus_minus');
        $table->integer('game_id');
         });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
         Schema::dropIfExists('playerrealtime_tbl');
    }
};
