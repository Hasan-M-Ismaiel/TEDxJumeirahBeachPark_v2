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
        Schema::create('salon_seconds', function (Blueprint $table) {

            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            // $table->integer('age');
            $table->string('email');
            $table->string('phone_number');

            // $table->string('country_of_residence');
            // $table->string('city_of_residence');
            // $table->string('nationality');
            $table->string('job_title');
            // $table->string('company_name');
            $table->string('industry');

            // $table->string('work');
            // $table->string('interests');
            // $table->string('years_of_professional_experience');

            // $table->integer('years_of_professional_experience');
            $table->string('how_did_you_hear');
            // $table->string('have_you_attend');
            // $table->string('why_attend');
            $table->boolean('subscribed');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salon_seconds');
    }
};
