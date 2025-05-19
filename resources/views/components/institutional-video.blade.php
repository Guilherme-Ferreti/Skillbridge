<div class="institutional-video">
    <div class="institutional-video__wrapper">
        <video
            class="video-js vjs-fluid"
            id="institutional-video__player"
            controls
            loop
            preload="auto"
            poster="{{ asset('images/team-members.webp') }}"
            data-setup="{}"
        >
            <source
                src="{{ asset('videos/institutional-video.mp4') }}"
                type="video/mp4"
            />
        </video>
    </div>
</div>
