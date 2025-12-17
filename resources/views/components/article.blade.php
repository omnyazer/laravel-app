<article>
    @isset($id)
        <h3>
            <a href="{{ route('article.details', ['id' => $id]) }}">
                {{ $title }}
            </a>
        </h3>
    @else
        <h3>{{ $title }}</h3>
    @endisset

    <p>{{ Str::limit($description, 30, '...') }}</p>
</article>
