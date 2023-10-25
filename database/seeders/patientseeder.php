<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class patientseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('patients')
            ->insert([
                'name'=>'lucy'
            ]);
        DB::table('patients')
            ->insert([
                'name'=>'mary'
            ]);
            DB::table('patients')
            ->insert([
                'name'=>'shion'
            ]);
    }
}
