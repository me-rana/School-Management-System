<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        if(DB::table('subjects')->count() == 0){
            DB::table('subjects')->insert([
                [
                    'name' => 'ডিপ্লোমা',
                ],
                [
                    'name' => 'স্নাতক',
                ],
                [
                    'name' => 'মাস্টার্স',
                ]
            ]);
        }
    }
}
