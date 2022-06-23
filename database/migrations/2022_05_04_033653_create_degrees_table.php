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
        Schema::create('degrees', function (Blueprint $table) {
            $table->id();
            $table->integer('student_id');
            $table->integer('subject_id');
            $table->integer('year_naw_id');
            
            $table->integer('user_id')->nullable();

            $table->float('oral')->nullable();
            $table->float('practical')->nullable();
            $table->float('midtermExam')->nullable();
            $table->float('finalExam')->nullable();
            $table->float('total')->nullable();
            $table->float('percentage')->nullable();


            $table->float('secoral')->nullable();
            $table->float('secpractical')->nullable();
            $table->float('secmidtermExam')->nullable();
            $table->float('sectotal')->nullable();
            $table->float('secpercentage')->nullable();

            $table->integer('stat')->nullable();

            /*
                0- مش راصد شيء
                1- شفوي نهائي نصفي اعمال السنة مرصودة 
                2- النهائي مرصود
            */
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
        Schema::dropIfExists('degrees');
    }
};
