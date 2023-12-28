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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name', 300)->nullable();
            $table->bigInteger('ssubject')->unsigned()->index()->nullable()->default(1);
            $table->foreign('ssubject')->references('id')->on('subjects')->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('admission')->nullable();
            $table->bigInteger('tution')->nullable();
            $table->bigInteger('month')->nullable();
            $table->bigInteger('semester')->nullable();
            $table->bigInteger('count')->nullable();
            $table->bigInteger('formflap')->nullable();
            $table->bigInteger('labfee')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
