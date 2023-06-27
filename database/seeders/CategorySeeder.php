<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => 'Ігри',
        ]);
        DB::table('categories')->insert([
            'name' => 'Технології',
        ]);
        DB::table('categories')->insert([
            'name' => 'Софт',
        ]);
        DB::table('categories')->insert([
            'name' => 'Пристрої',
        ]);
        DB::table('categories')->insert([
            'name' => 'Авто',
        ]);
    }
}
