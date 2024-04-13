<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * web uzerinden oluşturulan user burdan alıyoruz 
     * bu tabloya göre de bir token oluşturuyoruz 
     * 
     * 
     */
    public function up(): void
    {   Schema::create('web_user_tbl', function (Blueprint $table) { 
        $table->id();
        $table->string('name');
        $table->string('surname');
        $table->string('email')->unique();
        $table->string('password');
        $table->date('birthday')->format('d/m/Y');
        $table->string('phone')->unique();
        $table->string('addres');
        $table->integer('city');
        $table->integer('country');
        $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
                 Schema::dropIfExists('web_user_tbl');

    }
};
