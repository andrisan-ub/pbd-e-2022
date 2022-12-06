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

        //Topics
        DB::table('topics')->insert([
            'id_category' => 1,
            'name_topics' => 'K-Means',
            'create_date_topics' => '2022/12/06 5:37',
        ]);

        //Post
        DB::table('post')->insert([
            'id' => 2,
            'id_topics' => 1,
            'content_post' => 'Min, info kode python dong',
            'create_date_post' => '2022/12/06 5:37',
        ]);
        DB::table('post')->insert([
            'id' => 3,
            'id_topics' => 1,
            'content_post' => 'Bagaimana cara menghapus missing value menggunakan python?',
            'create_date_post' => '2022/12/01 2:30',
        ]);
        DB::table('post')->insert([
            'id' => 4,
            'id_topics' => 1,
            'content_post' => 'Cara menentukan cluster yang paling tepat menggunakan python',
            'create_date_post' => '2022/12/10 3:15',
        ]);

        //Reply
        DB::table('reply')->insert([
            'id' => 3,
            'id_post' => 1,
            'content_reply' => 'Kaggle aja bro',
            'create_date_reply' => '2022/12/06 6:09'
        ]);
        DB::table('reply')->insert([
            'id' => 7,
            'id_post' => 1,
            'content_reply' => 'Coba di Kaggle.com, lengkap data dan code pythonnya',
            'create_date_reply' => '2022/12/06 7:02'
        ]);
        DB::table('reply')->insert([
            'id' => 6,
            'id_post' => 1,
            'content_reply' => 'Di google banyak sih',
            'create_date_reply' => '2022/12/06 7:15'
        ]);
        DB::table('reply')->insert([
            'id' => 8,
            'id_post' => 2,
            'content_reply' => 'retail_df=retail_df.dropna() 
            retail_df.shape coba deh kayak gitu, kalau mau lebih lengkap sih bisa searching di google',
            'create_date_reply' => '2022/12/01 3:00'
        ]);
        DB::table('reply')->insert([
            'id' => 7,
            'id_post' => 2,
            'content_reply' => 'Andalan gue sih kaggle bro',
            'create_date_reply' => '2022/12/01 4:39'
        ]);
        DB::table('reply')->insert([
            'id' => 7,
            'id_post' => 3,
            'content_reply' => 'Bisa pake Elbow sih',
            'create_date_reply' => '2022/12/11 1:15'
        ]);
        DB::table('reply')->insert([
            'id' => 9,
            'id_post' => 3,
            'content_reply' => 'Silhouette juga bisa',
            'create_date_reply' => '2022/12/11 1:15'
        ]);


        
        DB::table('users_has_topics')->insert([
            'id' => 2,
            'id_topics' => 1,
        ]);
    }
}
