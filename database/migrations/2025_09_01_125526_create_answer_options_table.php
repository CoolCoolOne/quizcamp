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
        Schema::create('answer_options', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedInteger('order');
            $table->string('text');
            $table->boolean(column: 'right')->default(false);
            $table->unsignedInteger('chosen_number')->nullable();
            $table->unsignedInteger('chosen_number_trigger')->nullable();
            $table->foreignId('question_id')->constrained()->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answer_options');
    }
};
