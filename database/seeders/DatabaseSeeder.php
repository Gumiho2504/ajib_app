<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Func;
use App\Models\Job;
use App\Models\NiceToHave;
use App\Models\Requestment;
use App\Models\Responsibility;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed funcs
       //Func::factory()->count(10)->create();

        // Seed companies with jobs
        Company::factory()
            ->count(2)
            ->has(
                Job::factory()
                    ->count(1)
                    ->has(Requestment::factory()->count(2))
                    ->has(Responsibility::factory()->count(2))
                    ->has(NiceToHave::factory()->count(2))
                ->has(Func::factory()->count(1),'job_functions')
            )
            ->create();

        // Uncomment and add logic for other seeders if needed
        // Seed jobs with skills and requirements
        // Job::factory()
        //     ->count(10)
        //     ->has(Skill::factory()->count(10)) // Link skills to jobs
        //     ->has(Requestment::factory()->count(10)) // Add requirements
        //     ->create();

        // Seed users
        // User::factory()
        //     ->count(3)
        //     ->create();

        // Seed users with jobs and companies
         User::factory()
             ->count(1)
             ->has(
                 Job::factory()
                     ->count(2)
                     ->has(Requestment::factory()->count(2))
                     ->has(Responsibility::factory()->count(1))
                     ->has(NiceToHave::factory()->count(1))
                     ->has(Func::factory()->count(2),'job_functions')
                    ->for(Company::factory())
                 ,'favourite_jobs'
             )
             ->create();
    }
}
