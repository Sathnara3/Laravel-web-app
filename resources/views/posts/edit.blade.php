@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')
    <h2 class="text-xl mb-4">Edit Post</h2>

    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="title" class="block mb-2">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}" class="w-full border p-2" required>
        </div>

        <div class="mb-4">
            <label for="body" class="block mb-2">Body</label>
            <textarea name="body" id="body" rows="5" class="w-full border p-2" required>{{ old('body', $post->body) }}</textarea>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update Post</button>
    </form>
@endsection