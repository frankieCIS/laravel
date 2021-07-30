@extends('layouts.app')

@section('title', 'Blog Posts')

@section('content')
<!-- @if(count($posts))
    @foreach($posts as $key => $post)
        <div>{{ $key }}.{{ $post['title']}}</div>
    @endforeach
@else
No Posts Found!
@endif -->

<!-- @each('posts.partials.post', $posts, 'post') -->
@forelse ($posts as $key => $post)
    @include('posts.partials.post')
@empty
No posts found!
@endforelse

@endsection