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
        for ($i = 1; $i < 11; $i++) {
            \Illuminate\Support\Facades\DB::table('articles_tags')->insert([
                'article_id' => $i,
                'tag_id' => $i,
            ]);
        }
    }
}
