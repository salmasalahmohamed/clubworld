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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('group_id')->constrained();
            $table->string('name');
            $table->unsignedInteger('win')->default(0);
            $table->unsignedInteger('lose')->default(0);
            $table->unsignedInteger('draw')->default(0);
            $table->unsignedInteger('goal_for')->default(0);
            $table->unsignedInteger('goal_against')->default(0);
            $table->unsignedInteger('pts')->default(0);


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
