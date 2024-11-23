<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Job;
use App\Models\Skill;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Skill::factory()->count(10)->create();
        // User::factory(10)->create();
  Company::factory()->count(10)->create();
//        Job::factory()->count(10)->create();
    }
}
