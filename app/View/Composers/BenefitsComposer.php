<?php

declare(strict_types=1);

namespace App\View\Composers;

use Illuminate\View\View;

final class BenefitsComposer
{
    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        $view->with('benefits', $this->getBenefits());
    }

    private function getBenefits(): array
    {
        return [
            [
                'number'      => '01',
                'title'       => 'Flexible Learning Schedule',
                'description' => 'Fit your coursework around your existing commitments and obligations.',
            ],
            [
                'number'      => '02',
                'title'       => 'Expert Instruction',
                'description' => 'Learn from industry experts who have hands-on experience in design and development.',
            ],
            [
                'number'      => '03',
                'title'       => 'Diverse Course Offerings',
                'description' => 'Explore a wide range of design and development courses covering various topics.',
            ],
            [
                'number'      => '04',
                'title'       => 'Updated Curriculum',
                'description' => 'Access courses with up-to-date content reflecting the latest trends and industry practices.',
            ],
            [
                'number'      => '05',
                'title'       => 'Practical Projects and Assignments',
                'description' => 'Develop a portfolio showcasing your skills and abilities to potential employers.',
            ],
            [
                'number'      => '06',
                'title'       => 'Interactive Learning Environment',
                'description' => 'Collaborate with fellow learners, exchanging ideas and feedback to enhance your understanding.',
            ],
        ];
    }
}
