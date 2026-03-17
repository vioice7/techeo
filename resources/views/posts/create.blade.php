<!DOCTYPE html>
<html>
<head>
    <title>Create New Post - Tech</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-10">
    <div class="max-w-2xl mx-auto">
        <a href="{{ route('home') }}" class="text-blue-600 hover:underline mb-6 inline-block">Back to Posts</a>

        <div class="bg-white p-8 rounded-lg shadow-md">
            <h1 class="text-3xl font-bold mb-6 text-gray-800">Create New Post</h1>

            <form action="{{ route('posts.store') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="title" class="block text-gray-700 font-bold mb-2">Title</label>
                    <input type="text" name="title" id="title" 
                           class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('title') border-red-500 @enderror" 
                           value="{{ old('title') }}" required autofocus>
                    @error('title')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="content" class="block text-gray-700 font-bold mb-2">Content</label>
                    <textarea name="content" id="content" rows="6" 
                              class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('content') border-red-500 @enderror" 
                              required>{{ old('content') }}</textarea>
                    @error('content')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg font-bold hover:bg-blue-700 transition">
                        Publish Post
                    </button>
                    <span class="text-gray-500 text-sm italic">Publishing as {{ Auth::user()->email }}</span>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
