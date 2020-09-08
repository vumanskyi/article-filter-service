<?php

use Illuminate\Database\Seeder;

class ArticlesToTagsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 10; $i++) {
            //sport - ids 1 - 9
            \Illuminate\Support\Facades\DB::table('articles_tags')->insert([
                'article_id' => $i,
                'tag_id' => 1,
            ]);
        }

        for ($i = 10; $i < 16; $i++) {
            //sport - ids 10 - 15
            \Illuminate\Support\Facades\DB::table('articles_tags')->insert([
                'article_id' => $i,
                'tag_id' => rand(1,4),
            ]);
        }

        for ($i = 16; $i < 19; $i++) {
            //sport - ids 16 - 19
            \Illuminate\Support\Facades\DB::table('articles_tags')->insert([
                'article_id' => $i,
                'tag_id' => rand(1,4),
            ]);
        }
    }
}
