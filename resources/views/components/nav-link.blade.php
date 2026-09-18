@props(['active' => false])

<a {{ $attributes }} style="
    text-decoration: none;
    font-weight: 600;
    font-size: 15px;
    padding: 10px 22px;
    border-radius: 25px;
    {{ $active
        ? 'background:#764ba2; color: white;'
        : 'background: transparent; color:#999;' }}
">
    {{ $slot }}
</a>