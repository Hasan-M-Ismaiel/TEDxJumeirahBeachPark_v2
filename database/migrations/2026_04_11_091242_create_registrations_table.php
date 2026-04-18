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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();

            // Personal Info
            $table->string('full_name');
            $table->string('email')->unique();
            $table->string('phone_number');
            $table->string('country');
            $table->string('city');
            $table->date('birthday');

            $table->string('education');
            $table->string('work');
            $table->string('industry');

            // Event info
            $table->string('heard_about_us');
            $table->string('attending_as');

            $table->text('why_attend')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
