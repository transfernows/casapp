<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Run the migrations.
     * 
     * oyuncunun anlık olarak bakiyesini sorguluyoruz
     */
    public function up(): void {
        Schema::create('webusers_balance_tbl', function (Blueprint $table) {
            $table->id();
            $table->float('balance');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
         Schema::dropIfExists('webusers_balance_tbl');
    }
};
