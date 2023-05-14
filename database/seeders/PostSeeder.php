<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'test_title1',
            'body' => 'testing...',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
            
            
        DB::table('posts')->insert([
            'title' => 'test_title2',
            'body' => 'testing2...',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
    }
}
