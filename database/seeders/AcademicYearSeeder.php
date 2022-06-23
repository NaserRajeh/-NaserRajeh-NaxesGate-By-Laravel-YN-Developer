<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AcademicYearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('academic_years')->insert([

            'academic_years'      => 'الإعداد',       
        ]);
        DB::table('academic_years')->insert([

            'academic_years'      => 'سنة أولى',       
        ]);
        DB::table('academic_years')->insert([

            'academic_years'      => 'سنة ثانية',       
        ]);
        DB::table('academic_years')->insert([

            'academic_years'      => 'سنة ثالثة',       
        ]);
        DB::table('academic_years')->insert([

            'academic_years'      => 'سنة رابعة',       
        ]);
    }
}
