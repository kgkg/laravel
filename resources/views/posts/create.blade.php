@extends('layout')

@section('content')
    <form method="post" action="{{ route('posts.store') }}">
        <p>
            <label>Title</label>
            <input type="text" name="title"/>
        </p>
        <p>
            <label>Content</label>
            <input type="text" name="content"/>
        </p>

        @csrf
        <button type="submit">Create!</button>
    </form>
@endsection
