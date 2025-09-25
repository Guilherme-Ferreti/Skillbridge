<section
    class="about-us-achievements"
    aria-labelledby="about-us-achievements__heading"
>
    <x-section-header
        id="about-us-achievements__heading"
        :title="__('Achievements')"
        :introductoryText="__('Our commitment to excellence has led us to achieve significant milestones along our journey. Here are some of our notable achievements.')"
    />
    <ul class="flex-grid">
        <x-milestone-card
            icon="crown"
            :title="__('Trusted by Thousands')"
            :text="__('We have successfully served thousands of students, helping them unlock their potential and achieve their career goals.')"
        />
        <x-milestone-card
            icon="medal"
            :title="__('Award-Winning Courses')"
            :text="__('Our courses have received recognition and accolades in the industry for their quality, depth of content, and effective teaching methodologies.')"
        />
        <x-milestone-card
            icon="theater-masks"
            :title="__('Positive Student Feedback')"
            :text="__('We take pride in the positive feedback we receive from our students, who appreciate the practicality and relevance of our course materials.')"
        />
        <x-milestone-card
            icon="bolt-shield"
            :title="__('Industry Partnerships')"
            :text="__('We have established strong partnerships with industry leaders, enabling us to provide our students with access to the latest tools and technologies')"
        />
    </ul>
</section>
