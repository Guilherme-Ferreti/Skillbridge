<x-card class="join-us-ad">
    <div class="join-us-ad__content">
        <div class="join-us-ad__text">
            <h2 class="join-us-ad__title">{!! __('<span>Together</span>, let\'s shape the future of digital innovation') !!}</h2>
            <p>{{ __('Join us on this exciting learning journey and unlock your potential in design and development.') }}</p>
        </div>
        <x-button
            :name="__('Join Now')"
            color="primary"
            :to="lroute('courses.index')"
        />
    </div>

    <svg
        class="join-us-ad__illustration"
        width="164"
        height="164"
        viewBox="0 0 164 164"
        fill="white"
    >
        <path
            d="M0.532593 163.333L54.6993 109.167H108.866V55L163.033 109.167L108.866 163.333H0.532593Z"
            fill="#f7f7f8"
        />
        <path
            d="M0.532593 55L54.6993 109.167V55H108.866L163.033 0.833374H54.6993L0.532593 55Z"
            fill="#f7f7f8"
        />
    </svg>
</x-card>
