<?php

declare(strict_types=1);

namespace App\View\Composers;

use Illuminate\View\View;

final class OurTestimonialsComposer
{
    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        $view->with('testimonials', $this->getTestimonials());
    }

    private function getTestimonials(): array
    {
        return [
            [
                'testimonial'    => 'The web design course provided a solid foundation for me. The instructors were knowledgeable and supportive, and the interactive learning environment was engaging. I highly recommend it!',
                'author_name'    => 'Sarah L',
                'author_picture' => asset('/images/profile-picture-1.webp'),
            ],
            [
                'testimonial'    => 'The UI/UX design course exceeded my expectations. The instructor\'s expertise and practical assignments helped me improve my design skills. I feel more confident in my career now. Thank you!',
                'author_name'    => 'Jason M',
                'author_picture' => asset('/images/profile-picture-2.webp'),
            ],
            [
                'testimonial'    => 'The mobile app development course was fantastic! The step-by-step tutorials and hands-on projects helped me grasp the concepts easily. I\'m now building my own app. Great course!',
                'author_name'    => 'Emily R',
                'author_picture' => asset('/images/profile-picture-3.webp'),
            ],
            [
                'testimonial'    => 'I enrolled in the graphic design course as a beginner, and it was the perfect starting point. The instructor\'s guidance and feedback improved my design abilities significantly. I\'m grateful for this course!',
                'author_name'    => 'Michael K',
                'author_picture' => asset('/images/profile-picture-4.webp'),
            ],
        ];
    }
}
