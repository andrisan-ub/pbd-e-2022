<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Cast\String_;
use Stringable;

class categories_topics extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Categories
        DB::table('categories_topics')->insert([
            'name_category' => 'Data Mining',
        ]);

        DB::table('categories_topics')->insert([
            'name_category' => 'Pemrograman Basis Data',
        ]);

        DB::table('categories_topics')->insert([
            'name_category' => 'Algoritma dan Struktur Data',
        ]);

        // Topics
        DB::table('topics')->insert([
            'id_category' => 1,
            'name_topics' => 'K-Means',
            'create_date_topics' => '2022/12/06 5:37',
        ]);

        DB::table('topics')->insert([
            'id_category' => 1,
            'name_topics' => 'Manhattan',
            'create_date_topics' => '2022/12/06 5:37',
        ]);

        DB::table('topics')->insert([
            'id_category' => 1,
            'name_topics' => 'KNN',
            'create_date_topics' => '2022/12/06 5:37',
        ]);
        
        DB::table('post')->insert([
            'id' => 2,
            'id_topics' => 1,
            'content_post' => 'Min, info kode python dong',
            'create_date_post' => '2022/12/06 5:37',
        ]);
        DB::table('reply')->insert([
            'id' => 2,
            'id_post' => 1,
            'content_reply' => 'Kaggle aja bro',
            'create_date_reply' => '2022/12/06 6:09'
        ]);
        DB::table('users_has_topics')->insert([
            'id' => 2,
            'id_topics' => 1,
        ]);
    }
}
