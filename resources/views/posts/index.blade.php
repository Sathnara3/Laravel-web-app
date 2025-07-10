@extends('layouts.app')

@section('title', 'Posts')

@section('content')
    <h2 class="text-xl mb-4">Your Posts</h2>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-2 mb-4">{{ session('success') }}</div>
    @endif

    <a href="{{ route('posts.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">New Post</a>

    <ul>
        @foreach($posts as $post)
            <li class="mb-4 border p-4 rounded">
                <h3 class="font-bold text-lg">{{ $post->title }}</h3>
                <p>{{ Str::limit($post->body, 100) }}</p>
                <div class="mt-2">
                    <a href="{{ route('posts.edit', $post) }}" class="text-blue-500">Edit</a>
                    <form action="{{ route('posts.destroy', $post) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 ml-2">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>

    {{ $posts->links() }}
@endsection