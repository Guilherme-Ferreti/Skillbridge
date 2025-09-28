@props([
    'course',
])

<div class="course-card-details">
    <div class="course-card-details__badges">
        <x-badge
            :text="trans_choice(':value Week|:value Weeks', $course->expected_completion_weeks, ['value' => $course->expected_completion_weeks])"
        />
        <x-badge :text="$course->skill_level->label()" />
    </div>
    <p class="course-card-details__instructor">{{ __('By :instructor', ['instructor' => $course->instructor->name]) }}</p>
</div>
