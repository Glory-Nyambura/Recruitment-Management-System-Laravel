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
    Schema::create('applications', function (Blueprint $table) {

        $table->id();

        $table->string('full_name');
        $table->string('email');
        $table->string('phone');
        $table->string('county');
        $table->string('education');
        $table->integer('experience');
        $table->string('position');
        $table->decimal('salary', 10, 2);
        $table->text('cover_letter');

        $table->timestamps();

    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
