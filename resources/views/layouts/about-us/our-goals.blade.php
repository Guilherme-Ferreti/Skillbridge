<x-page.section
    class="about-us-our-goals"
    aria-labelledby="about-us-our-goals__heading"
>
    <x-page.section.header
        id="about-us-our-goals__heading"
        :title="__('Our Goals')"
        :introductoryText="__('At Skillbridge, our goal is to empower individuals from all backgrounds to thrive in the world of design and development. We believe that education should be accessible and transformative, enabling learners to pursue their passions and make a meaningful impact.')"
    />
    <ul class="flex-grid">
        <x-milestone-card
            icon="backpack"
            :title="__('Provide Practical Skills')"
            :text="__('We have successfully served thousands of students, helping them unlock their potential and achieve their career goals.')"
        />
        <x-milestone-card
            icon="book-closed"
            :title="__('Foster Creative Problem-Solving')"
            :text="__('We encourage creative thinking and problem-solving abilities, allowing our students to tackle real-world challenges with confidence and innovation.')"
        />
        <x-milestone-card
            icon="puzzle-piece"
            :title="__('Promote Collaboration and Community')"
            :text="__('We believe in the power of collaboration and peer learning. Our platform fosters a supportive and inclusive community where learners can connect, share insights, and grow together.')"
        />
        <x-milestone-card
            icon="light-beacon-max"
            :title="__('Stay Ahead of the Curve')"
            :text="__('The digital landscape is constantly evolving, and we strive to stay at the forefront of industry trends. We regularly update our course content to ensure our students receive the latest knowledge and skills.')"
        />
    </ul>
</x-page.section>
