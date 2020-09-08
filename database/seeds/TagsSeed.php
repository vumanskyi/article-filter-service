<?php

use Illuminate\Database\Seeder;

class TagsSeed extends Seeder
{
    private static array $title = [
        'Sport',

        'Space',
        'Earth',
        'Techno',
        'Cloud',

        'Life',
        'Family',
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
            \Illuminate\Support\Facades\DB::table('tags')->insert([
                'name' => $title,
                'description' => $faker->paragraph,
                'active' => true,
            ]);
        }
    }
}
