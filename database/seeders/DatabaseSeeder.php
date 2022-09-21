<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

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
        $faker = Faker::create();

        $id_study_program = [random_int(1, 10), random_int(1, 10), random_int(1, 10)];
        $id_faculty = [random_int(1, 10), random_int(1, 10), random_int(1, 10)];
        $name = [$faker->text(10), $faker->text(10), $faker->text(10)];

        for ($i=0; $i < sizeof($id_study_program); $i++) { 
            DB::table('study_program')->insert([
                'id' => $id_study_program[$i],
                'faculty_id' => $id_faculty[$i],
                'name' => $name[$i],
            ]);
        }


    }
}
