<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;
use Faker\Factory;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        News::truncate();
        $faker = Factory::create();

        $categories = ['classroom teaching', 'home teaching', 'preparatory classes'];
        for ($i = 0; $i < count($categories); $i++) {
            for ($j = 0; $j < 5; $j++) {
                News::create([
                    'title' => 'Job' . ' title ' . $j,
                    'content'   => $faker->paragraph(),
                    'category' => $categories[$i],
                    'salary' => rand(50000, 200000),
                    'employer' => $faker->text(10),
                    'location' => 'Douala, cameroon',
                    'employer_contact' => rand(676483748,676483760),
                    'image' => $faker->image('public/uploads/news/', 640, 480, null, false),
                ]);
            }
        }

        $this->command->info('Dummy news entered into database');
    }
}
