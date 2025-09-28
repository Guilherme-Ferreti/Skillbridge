@props([
    'message',
])

<span
    class="form-success-message"
    role="alert"
    aria-live="polite"
>
    {{ $message }}
</span>
