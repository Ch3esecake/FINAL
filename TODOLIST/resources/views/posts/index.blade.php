@extends('layouts.app')

@section('content')
    <div class="max-w-6xl mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">All Posts</h1>
        <a href="{{ route('posts.create') }}" class="bg-blue-500 text-white py-2 px-4 rounded">Create Post</a>
        <ul class="mt-4">
            @foreach ($posts as $post)
                <li class="bg-white p-4 rounded mb-4 shadow">
                    <h2 class="font-semibold">{{ $post->title }}</h2>
                    <p>{{ Str::limit($post->content, 100) }}</p>
                    <a href="{{ route('posts.edit', $post) }}" class="text-blue-500">Edit</a>
                    <form action="{{ route('posts.destroy', $post) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
