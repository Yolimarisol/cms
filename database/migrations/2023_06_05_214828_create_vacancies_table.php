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
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('companies_id')->constrained();
            $table->string('title');
            $table->foreignId('types_id')->constrained();
            $table->string('address')->nullable();
            $table->text('requirements')->nullable();
            $table->date('expedition_date')->nullable();
            $table->date('deletion_date')->nullable();
            $table->integer('state');
            $table->text('responsibilities')->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->string('slug')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacancies');
    }
};
