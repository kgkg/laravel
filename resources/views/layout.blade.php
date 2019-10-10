<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Document</title>
</head>
<body>
<ul>
    <li><a href="{{ route('home')  }}">Home</a></li>
    <li><a href="{{ route('contact') }}">Contact</a></li>
    <li><a href="{{ route('posts.index') }}">Blog Posts</a></li>
    <li><a href="{{ route('posts.create') }}">Add Blog Post</a></li>
</ul>

@if(session()->has('status'))
    <p style="color: green;">
        {{ session()->get('status') }}
    </p>
@endif

@yield('content')
</body>
</html>
