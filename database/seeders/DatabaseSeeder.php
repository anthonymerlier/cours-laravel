<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Brand;
use App\Models\Phone;
use App\Models\Service;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::factory(5)->create();
         Service::factory(35)->create();
         Brand::factory(10)->create();
         Phone::factory(35)->create();
    }
}
