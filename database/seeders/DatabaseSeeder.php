<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $faker = Faker::create(); 
        foreach(range(1, 100) as $index)
        {
            DB::table('pengunjung_artikels')->insert([
                'id' => $faker->id,
                'ip' => $faker->ip,
                'slug' => $faker->slug,
                'countryName' => $faker->countryName,
                'regionName' => $faker->cityName,
                'tanggal' => $faker->tanggal,
                'created_at' => $faker->dateTimeBetween('-6 month','+1 month'),
                'update_at' => $faker->update_at
            ]);
        }
    }
}
