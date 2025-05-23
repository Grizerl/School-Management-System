<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('subjects', function (Blueprint $table): void {
            $table->id();
            $table->string('subject_1');
            $table->string('subject_2');
            $table->string('subject_3');
            $table->unsignedBigInteger('course_id');
            $table->foreign('course_id')
            ->references('id')
            ->on('courses')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};
