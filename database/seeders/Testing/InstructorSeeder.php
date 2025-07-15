<?php

declare(strict_types=1);

namespace Database\Seeders\Testing;

use App\Models\Instructor;
use Illuminate\Database\Seeder;

final class InstructorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $instructors = [
            'John Smith',
            'Emily Johnson',
            'David Brown',
            'Sarah Thompson',
            'Michael Adams',
            'Emily Davis',
            'Jennifer Wilson',
        ];

        foreach ($instructors as $instructor) {
            Instructor::create([
                'name' => $instructor,
            ]);
        }
    }
}
