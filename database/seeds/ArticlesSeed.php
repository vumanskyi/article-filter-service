<?php

use Illuminate\Database\Seeder;

class ArticlesSeed extends Seeder
{
    const INNOVATION = 1;
    const SPORT = 2;
    const LIFE = 3;

    private static array $titles = [
        'sport' => [
            'Lakers’ ‘Others’ Lend LeBron James a Hand',
            'Novak Djokovic Out of U.S. Open After Accidental Hit of Line Judge',
            'Why Was Novak Djokovic Disqualified From the U.S. Open?',
            'With Fans Barred From the U.S. Open, One Gets as Close as He Can',
            'Jennifer Brady Went to College, Then Germany to Get Better at Tennis',
            'Lou Brock, Baseball Hall of Famer Known for Stealing Bases, Dies at 81',
            'Ben Simmons and Joel Embiid Are Stuck Between Star and Superstar',
            'N.H.L. Conference Finals Begin After Hectic Second Round',
            'Ashe Stadium Again Turns Into an Arena of the Absurd'
        ],
        'innovation' => [
            'Experiments & pivots that kept Emirates Airlines alive in COVID times',
            'Examples of innovations that make us question the 3 horizons model',
            'Innovation gaps between the real world and the virtual world in the time of quarantine',
            'Examples to create value in the circular economy (Cases)',
            'B2B vs B2C: A very different circular business model challenge',
            'Why care about circular business models even if sustainability is not a top priority?'
        ],
        'life' => [
            '5 Personality Traits That Make You Mentally Tough',
            'Why I’m Skeptical About Advice',
            'Why I’m Skeptical About Advice',
            '4 Things I Gave Up To Be Free'
        ]
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        foreach (self::$titles['sport'] as $title) {
            $faker = \Faker\Factory::create();
            \Illuminate\Support\Facades\DB::table('articles')->insert([
                'name' => $title,
                'category_id' => self::SPORT,
                'description' => $faker->paragraph,
                'active' => true,
            ]);
        }

        foreach (self::$titles['innovation'] as $title) {
            $faker = \Faker\Factory::create();
            \Illuminate\Support\Facades\DB::table('articles')->insert([
                'name' => $title,
                'category_id' => self::INNOVATION,
                'description' => $faker->paragraph,
                'active' => true,
            ]);
        }

        foreach (self::$titles['life'] as $title) {
            $faker = \Faker\Factory::create();
            \Illuminate\Support\Facades\DB::table('articles')->insert([
                'name' => $title,
                'category_id' => self::LIFE,
                'description' => $faker->paragraph,
                'active' => true,
            ]);
        }


    }
}
