<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('student')->insert([
            'id' => '215150700111006',
            'student_id' => 'Mei'
        ]);

        DB::table('student')->insert([
            'id' => '215150701111023',
            'student_id' => 'Loey'
        ]);
    }
}
