<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

final class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name'  => 'Admin',
            'email' => 'admin@skillbridge.com',
        ]);

        if (! app()->isProduction()) {
            $this->call([
                Testing\InstructorSeeder::class,
                Testing\CourseSeeder::class,
                Testing\BenefitsSeeder::class,
                Testing\FaqSeeder::class,
                Testing\PlansSeeder::class,
            ]);
        }
    }
}
