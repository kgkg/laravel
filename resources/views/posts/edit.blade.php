@extends('layout')

@section('content')
    <form method="post" action="{{ route('posts.update', ['post' => $post->id]) }}">

        @include('posts._form')

        @csrf
        @method('PUT')
        <button type="submit">Update!</button>
    </form>
@endsection
