@extends('layout')

@section('content')
    @foreach ($posts as $post)
        <article>
            <header>
                <h1>{{ $post->title }}</h1>
            </header>
            <main>
                <p>
                    {!! nl2br(e($post->body)) !!}
                </p>
            </main>
            <footer>
                <p>投稿日時 {{ $post->created_at->format('Y.m.d') }}</p>
                @if ($post->comments->count())
                    <p>コメント {{ $post->comments->count() }}件</p>
                @endif
            </footer>
        </article>
    @endforeach
@endsection
