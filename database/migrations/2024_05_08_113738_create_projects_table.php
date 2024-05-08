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
        Schema::create('projects', function (Blueprint $table) {
            $table->id('idProject');
            $table->string('projectName');
            $table->string('projectDesc');
            $table->string('projectObj');
            $table->foreignId('projectManager')->constrained('managers','idManager');
            $table->foreignId('projectTimeLine')->constrained('times','idTime');
            $table->decimal('budget');
            $table->foreignId('projectTeam')->constrained('members','idMember');
            $table->foreignId('projectState')->constrained('states','idState');
            $table->foreignId('projectPlannification')->constrained('plannings','idTask');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
