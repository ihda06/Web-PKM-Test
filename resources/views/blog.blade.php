@extends('layout.main')


@section('css')
<link rel="stylesheet" href="/css/blog.css">
@endsection

@section('blog')
{{'active'}}
@endsection

@section('konten')
<div class="container mt-5">
    @foreach($posts as $post)
    <article>
        <div class="card mb-3">
            <div class="card-body">
                <h3 class="card-title">
                    <a href="/blog/{{$post->slug}}">{{$post->title}}</a>
                </h3>
                <h6 class="card-subtitle mb-2 text-muted">{{$post["author"]}}</h6>
                <p class="card-text">{{$post['body']}}</p>
            </div>
        </div>
    </article>
    @endforeach
</div>
@endsection

