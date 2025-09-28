@props([
    'message',
])

<span
    class="form-error-message"
    role="alert"
    aria-live="polite"
>
    {{ $message }}
</span>
