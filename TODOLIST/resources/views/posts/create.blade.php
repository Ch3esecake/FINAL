@extends('layouts.app')

@section('content')
    <div class="max-w-lg mx-auto py-6">
        <h1 class="text-2xl font-bold mb-4">Create a New Post</h1>
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="title" class="block">Title</label>
                <input type="text" name="title" id="title" class="w-full border rounded p-2" required>
            </div>
            <div class="mb-4">
                <label for="content" class="block">Content</label>
                <textarea name="content" id="content" rows="4" class="w-full border rounded p-2" required></textarea>
            </div>
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Create Post</button>
        </form>
    </div>
@endsection
