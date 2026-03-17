<!DOCTYPE html>
<html>
<head>
    <title>{{ $post->title }} - Techno Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-10">
    <div class="max-w-4xl mx-auto">
        <a href="{{ route('home') }}" class="text-blue-600 hover:underline mb-6 inline-block">Back to all posts</a>

        <article class="bg-white p-10 rounded-lg shadow-md">
            <h1 class="text-5xl font-bold mb-4 text-gray-900">{{ $post->title }}</h1>
            
            <p class="text-gray-500 mb-8 pb-4 border-b">
                Published by <strong>{{ $post->user->email }}</strong> on {{ $post->created_at->format('F j, Y') }}
            </p>

            <div class="text-gray-800 text-xl leading-relaxed whitespace-pre-line">
                {{ $post->content }}
            </div>

            @auth
                @if(auth()->user()->hasRole('ROLE_SUPER_ADMIN'))
                    <div class="mt-10 pt-6 border-t flex space-x-4">
                        <a href="{{ route('posts.edit', $post) }}" class="bg-indigo-600 text-white px-4 py-2 rounded shadow hover:bg-indigo-700">Edit this Post</a>
                    </div>
                @endif
            @endauth
        </article>
    </div>
</body>
</html>
