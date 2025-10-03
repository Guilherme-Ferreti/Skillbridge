<?php

declare(strict_types=1);

namespace App\Http\Resources;

use App\Models\Course;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

final class HomePageResource extends JsonResource
{
    /**
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'benefits' => $this->resource['benefits']->map(fn (array $benefit) => [
                'number'      => $benefit['number'],
                'title'       => $benefit['title'],
                'description' => $benefit['description'],
            ]),

            'courses' => $this->resource['courses']->map(fn (Course $course) => [
                'id'                      => $course->id,
                'name'                    => $course->name,
                'slug'                    => $course->slug,
                'teaser'                  => $course->teaser,
                'teaserImage'             => $course->teaserImage(),
                'expectedCompletionWeeks' => $course->expected_completion_weeks,
                'skillLevel'              => $course->skill_level->label(),
                'instructorName'          => $course->instructor->name,
            ]),

            'testimonials' => $this->resource['testimonials']->map(fn (Testimonial $testimonial) => [
                'quote'         => $testimonial->quote,
                'authorName'    => $testimonial->author_name,
                'authorPicture' => $testimonial->authorPicture(),
            ]),
        ];
    }
}
