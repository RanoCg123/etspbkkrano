<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class docseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('doctors')
            ->insert([
                'name'=>'david'
            ]);
        DB::table('doctors')
            ->insert([
                'name'=>'jack'
            ]);
            DB::table('doctors')
            ->insert([
                'name'=>'sarah'
            ]);
    }
}
