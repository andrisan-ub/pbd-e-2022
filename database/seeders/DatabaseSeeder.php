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
            'id' => '205150701011024',
            'student_id' => 'Mifz'
        ]);

        DB::table('student')->insert([
            'id' => '205150701011025',
            'student_id' => 'Zim'
        ]);

        DB::table('student')->insert([
            'id' => '205150701011026',
            'student_id' => 'Ary'
        ]);

        DB::table('student')->insert([
            'id' => '205150701011027',
            'student_id' => 'Madi'
        ]);

        
    }
}
