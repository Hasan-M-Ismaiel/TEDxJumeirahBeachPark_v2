<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::dropIfExists('teammembers');

        Schema::create('teammembers', function (Blueprint $table) {
            $table->id(); // هذا unsignedBigInteger
            $table->string('full_name');
            $table->string('title')->nullable();
            $table->text('bio')->nullable();
            $table->string('image')->nullable();
            $table->string('caption')->nullable();
            $table->string('department')->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
