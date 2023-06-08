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
            $table->string('address');
            $table->text('requirements');
            $table->date('expedition_date');
            $table->date('deletion_date');
            $table->integer('state');
            $table->text('responsibilities');
            $table->string('description');
            $table->string('image');
            $table->string('slug');
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
