@extends('layout')

@section('content')
    <form method="post" action="{{ route('posts.store') }}">

        @include('posts._form')

        @csrf
        <button type="submit">Create!</button>
    </form>
@endsection
