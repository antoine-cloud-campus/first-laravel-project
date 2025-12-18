@props([
    'title',
    'description',
    'truncate' => true
])

<article>
    <h3>{{ $title }}</h3>

    <p>
        {{ $truncate
            ? Str::limit($description, 30, '...')
            : $description
        }}
    </p>
</article>
