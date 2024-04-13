<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Run the migrations.
     * 
     * servis sağlayıcıları burdan açıp kapatıyoruz 
     * 
     * 
     */
    public function up(): void {
        Schema::create('provider_tbl', function (Blueprint $table) {
            $table->id();
            $table->string('provider_name');
            $table->integer('provider_status');
            $table->integer('provider_add_user');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
                Schema::dropIfExists('provider_tbl');

    }
};
