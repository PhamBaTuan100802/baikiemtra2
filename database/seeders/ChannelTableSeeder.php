<?php

namespace Database\Seeders;

use App\Models\Channel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;

class SeedFaketubeTable extends Seeder
{
    public function run()
    {
        $faker = Factory::create();

        for ($i = 0; $i < 10; $i++) {
            Channel::create([
                'channel_name' => $faker->name,
                'description' => $faker->text,
                'subscribers_count' => $faker->numberBetween(100, 10000),
                'url' => $faker->url,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
