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

        $id_faculty = [1,2,3];
        $name = ['Fakultas Ilmu komputer', 'Fakultas Kedokteran', 'Fakultas Teknik'];

        for($i=0; $i<sizeof($id_faculty); $i++){
            DB::table('faculty')->insert([
                'id' => $id_faculty[$i],
                'name' => $name[$i]
            ])
        }
    }
}
