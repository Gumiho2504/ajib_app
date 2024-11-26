<?php

namespace Database\Factories;

use App\Models\NiceToHave;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NiceToHave>
 */
class NiceToHaveFactory extends Factory
{
    protected $model = NiceToHave::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $skills = [
        'Programming',
        'Web Development',
        'Database Management',
        'Data Analysis',
        'Project Management',
        'Mobile App Development',
        'UI/UX Design',
        'Graphic Design',
        'Content Writing',
        'SEO Optimization',
        'Digital Marketing',
        'Cloud Computing',
        'Cybersecurity',
        'Network Administration',
        'Game Development',
        'Machine Learning',
        'DevOps',
        'Blockchain Development',
        'Quality Assurance (QA)',
        'Technical Writing',
    ];

        return [
            'name' => $this->faker->randomElement($skills),
        ];
    }
}
