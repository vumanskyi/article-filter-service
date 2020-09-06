<?php

use Illuminate\Database\Seeder;

class ArticlesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 10; $i++) {
            for ($j = 1; $j < 11; $j++) {
                $faker = \Faker\Factory::create();
                \Illuminate\Support\Facades\DB::table('articles')->insert([
                    'name' => $faker->text(40),
                    'category_id' => $j,
                    'description' => $faker->paragraph,
                    'active' => true,
                ]);
            }
        }
    }
}
