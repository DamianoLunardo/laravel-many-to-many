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
        Schema::create('projects_tech', function (Blueprint $table) {
           $table->unsignedBigInteger('project_id');
           $table->unsignedBigInteger('tech_id');

           $table->foreign('project_id')->references('id')->on('projects')->cascadeOnDelete();
           $table->foreign('tech_id')->references('id')->on('teches')->cascadeOnDelete();

           $table->primary(['project_id', 'tech_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects_tech');
    }
};
