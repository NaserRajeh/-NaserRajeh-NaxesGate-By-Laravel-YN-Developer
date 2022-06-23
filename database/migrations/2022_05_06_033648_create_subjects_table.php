<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('academic_year_id')->nullable()->constrained('academic_years')
            ->onDelete('set null')->onUpdate('cascade');
            $table->string('name');
            $table->float('year_works');
            $table->float('final');
            $table->float('end_degree');
            // $table->string('date');
            $table->integer('stat');
            $table->foreignId('doctor_id')->nullable()->constrained('doctors')
            ->onDelete('set null')->onUpdate('cascade')->nullable();     
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subjects');
    }
};
