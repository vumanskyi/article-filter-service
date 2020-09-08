<?php

use Illuminate\Database\Seeder;

class CategoriesSeed extends Seeder
{
    private static array $title = [
        'Innovation',
        'Sport',
        'Life'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::$title as $title) {
            $faker = \Faker\Factory::create();
            \Illuminate\Support\Facades\DB::table('categories')->insert([
                'name' => $title,
                'description' => $faker->paragraph,
                'active' => true,
            ]);
        }
    }
}
