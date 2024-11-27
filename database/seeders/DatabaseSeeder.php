<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Company;
use App\Models\District;
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
        $cities = [
            'Phnom Penh' => [
                'Chamkar Mon', // ចំការមន
                'Toul Kork', // ទួលគោក
                'Russey Keo', // ឬស្សីកែវ
                'Dangkao', // ដង្កោ
                'Chbar Ampov', // ច្បារអំពៅ
                'Sen Sok', // សែនសុខ
                'Por Sen Chey', // ពោធិ៍សែនជ័យ
                'Mean Chey', // មានជ័យ
                'Prampir Makara', // ប្រាំពីរ មករា
                'Daun Penh', // ដូនពេញ
            ],
            'Battambang' => [
                'Svay Por', // ស្វាយពោធិ៍
                'Chamkar Samraong', // ចំការសំរោង
                'O Mal', // អូរមាល
                'Sangkae', // សង្កែ
                'Wat Kor', // វត្តគរ
            ],
            'Siem Reap' => [
                'Svay Dangkum', // ស្វាយដង្គំ
                'Sala Kamraeuk', // សាលាកំរើក
                'Sla Kram', // ស្លក្រាម
                'Kok Chak', // កុកចក
                'Chreav', // ជ្រាវ
            ],
            'Kampot' => [
                'Andoung Khmer', // អណ្តូងខ្មែរ
                'Kampong Bay', // កំពង់បាយ
                'Traeuy Kaoh', // ត្រួយកោះ
                'Tuek Chhou', // ទឹកឈូ
            ],
            'Kandal' => [
                'Ta Khmau', // តាខ្មៅ
                'Kien Svay', // កៀនស្វាយ
                'Sithor', // សិទ្ធរ
                'Saang', // សាំង
                'Ponhea Lueu', // ពញាឮ
            ],
            'Preah Sihanouk' => [
                'Buon', // បួន
                'Kampong Seila', // កំពង់សីលា
                'Ou Chrov', // អូរជ្រៅ
                'Prey Nob', // ព្រៃនប់
            ],
            'Kratie' => [
                'Kratie Municipality', // ក្រុងក្រចេះ
                'Sambour', // សំបូរ
                'Prek Prasap', // ព្រែកប្រាសាទ
                'Chhloung', // ឆ្លូង
                'Snoul', // ស្នួល
            ],
            'Takeo' => [
                'Doun Kaev', // ដូនកែវ
                'Prey Kabas', // ព្រៃកបាស
                'Kiri Vong', // គិរីវង់
                'Bati', // បាទី
                'Samraong', // សំរោង
            ],
        ];

        foreach ($cities as $city => $districts) {
            City::factory()
                ->state(
                    ['name' => $city]
                )
                ->has(
                    District::factory()
                        ->count(count($districts))
                        ->sequence(
                            ...array_map(fn($district) => ['name' => $district], $districts)
                        )
                )
                ->create();
        }


        // Seed companies with jobs

        Company::factory()
            ->count(50)
            ->create();

        // job function
        $icon = [
            "ri-arrow-right-line", // design
            "ri-bar-chart-2-fill",  //sale
            "ri-megaphone-fill",  // marketing
            "ri-code-s-slash-fill",  // developer
            "ri-macbook-line", // technology
            "ri-bank-fill", //finance
            "ri-briefcase-line", //business
            "ri-team-line",  // human resource

        ];
        $funcs =[
            'Design' => 'ri-pencil-ruler-2-line',
            'Marketing' => 'ri-megaphone-fill',
//            'Developer',
            'Sale' => 'ri-bar-chart-2-fill',
            'Business' => 'ri-briefcase-line',
            'Finance' => 'ri-bank-fill',
            'Technology' => 'ri-macbook-line',
            'Engineering' => 'ri-code-s-slash-fill',
            'Human Resources' => 'ri-team-line',
        ];
        foreach ($funcs as $func =>$icon) {
            Func::factory()->sequence(
                    ['name' => $func],
            )
                ->sequence(
                    ['icon' => $icon],
                )
                ->create();
        }

        User::factory()->count(2)->create();

        Job::factory()
                     ->count(100)
                     ->has(Requestment::factory()->count(random_int(1,3)))
                     ->has(Responsibility::factory()->count(random_int(1,5)))
                     ->has(NiceToHave::factory()->count(random_int(1,3)))
            ->create()
        ->each(function ($job)  {
                // Attach random existing functions to each job
                $job->job_functions()->attach(
                    Func::all()->random(2)->pluck('id')->toArray() // Attach 2 random functions to each job
                );
            });

        // Seed users with jobs and companies
         User::factory()
             ->count(5)
             ->create()
         ->each(function ($user)  {
             $user->favourite_jobs()->attach(
                 Job::all()->random(2)->pluck('id')->toArray()
             );
         })
         ->each(function ($user)  {
             $jobs = Job::all()->random(2);

             $user->apply_jobs()->attach(
                $jobs->pluck('id')->toArray()
             );
             foreach ($jobs as $job) {
                 $job->apply_count = (int) $job->apply_count; // Cast it to an integer
                 $job->apply_count += 1;
                 $job->save();
             }
         });
    }
}
