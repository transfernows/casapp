<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Run the migrations.
     * 
     * oyuncu yatrırım tiplerini belirliyoruz
     * 
     */
    public function up(): void {
        Schema::create('investment_tbl', function (Blueprint $table) {
            $table->id();
            $table->string('web_user_id');
            $table->integer('user_investment_id');
            $table->float('web_user_balance');
            $table->integer('user_approval_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
                 Schema::dropIfExists('investment_tbl');

    }
};
