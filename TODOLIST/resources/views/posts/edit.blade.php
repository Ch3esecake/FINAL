@extends('layouts.app')

@section('content')
    <div class="max-w-lg mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Edit Post</h1>
        <form action="{{ route('posts.update', $post) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="title" class="block">Title</label>
                <input type="text" name="title" id="title" value="{{ $post->title }}" class="w-full border rounded p-2" required>
            </div>
            <div class="mb-4">
                <label for="content" class="block">Content</label>
                <textarea name="content" id="content" rows="4" class="w-full border rounded p-2" required>{{ $post->content }}</textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Update Post</button>
        </form>
    </div>
@endsection
