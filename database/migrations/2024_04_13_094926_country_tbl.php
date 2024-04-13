<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Run the migrations.
     * 
     * Sedece ülke codları yer almaktarı dil değişimi gibi durumlar burası üzerinden yapılmaktadır
     * 
     * 
     */
    public function up(): void {

        Schema::create('country_tbl', function (Blueprint $table) {

            $table->id();
            $table->string('country_name');
            $table->integer('country_code');
            $table->integer('country_status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
         Schema::dropIfExists('country_tbl');
    }
};
