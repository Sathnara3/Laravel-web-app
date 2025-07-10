@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
    <h2 class="text-2xl mb-4">Welcome, Admin!</h2>
    <p>Manage all posts and users here.</p>
    <a href="{{ route('posts.index') }}" class="text-blue-500 underline">Manage Posts</a>
@endsection