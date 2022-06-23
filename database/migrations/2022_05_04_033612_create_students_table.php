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
        Schema::create('students', function (Blueprint $table) {
            $table->id();//رقم الملف
            $table->string('name');            
            $table->string('number_student')->nullable();//رقم القيد  

            
            $table->foreignId('nationality_id')->nullable()->constrained('nationalities')
            ->onDelete('set null')->onUpdate('cascade');        
            $table->string('id_number')->nullable();//رقم الوطني  
            
            $table->string('date_of_birth');            
            $table->string('gender');  

            $table->string('mother_name')->nullable();                       
            $table->string('place_of_living');   
            
            $table->string('email')->unique();
            $table->string('phone');                       
            

            $table->string('recipe');//صفة القيد
            $table->foreignId('academic_year_id')->nullable()->constrained('academic_years')
            ->onDelete('set null')->onUpdate('cascade'); 
            $table->string('date_of_registration'); 
            $table->string('note')->nullable(); 

            $table->integer('stat'); 
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
        Schema::dropIfExists('students');
    }
};
