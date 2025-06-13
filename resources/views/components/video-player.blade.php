@props([
    'src',
    'poster',
    'id' => 'video-player-'.uniqid(),
])

<div class="video-player">
    <video
        class="video-player__player | video-js vjs-16-9"
        id="{{ $id }}"
        controls
        loop
        poster="{{ $poster }}"
        data-setup=""
    >
        <source
            src="{{ $src }}"
            type="video/mp4"
        />
    </video>
</div>
