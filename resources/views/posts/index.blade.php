<!DOCTYPE html>
<html class="h-full"> <head>
    <title>Techno Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex flex-col h-full"> <nav class="bg-white shadow mb-8">
        <div class="max-w-4xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-xl font-bold text-gray-800">Techno Blog</a>
            <div class="space-x-4">
                @auth
                    <span class="text-gray-600 text-sm">Hi, {{ Auth::user()->email }}</span>
                    <a href="{{ route('dashboard') }}" class="text-blue-600 hover:underline">Dashboard</a>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-red-600 hover:underline">Log Out</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-gray-600 hover:underline">Log in</a>
                @endauth
            </div>
        </div>
    </nav>

    <main class="flex-grow"> <div class="max-w-4xl mx-auto px-4 pb-10">
            @if (session('status'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6 shadow-sm">
                    {{ session('status') }}
                </div>
            @endif

            <div class="flex justify-between items-center mb-8 border-b pb-4">
                <h1 class="text-4xl font-bold text-gray-800">Latest Posts</h1>
                @auth
                    @if(auth()->user()->hasRole('ROLE_SUPER_ADMIN'))
                        <a href="{{ route('posts.create') }}" class="bg-green-600 text-white px-4 py-2 rounded-lg font-bold hover:bg-green-700 transition shadow-md">
                            + New Post
                        </a>
                    @endif
                @endauth
            </div>
            
            <div class="grid gap-6">
                @foreach($posts as $post)
                    <div class="bg-white p-6 rounded-lg shadow-md relative">
                        <h2 class="text-2xl font-semibold text-blue-600 hover:text-blue-800 transition">
                            <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
                        </h2>
                        <p class="text-gray-500 text-sm mb-4">
                            By {{ $post->user->email }} on {{ $post->created_at->format('M d, Y') }}
                        </p>
                        <div class="text-gray-700 leading-relaxed mb-4">
                            {{ Str::limit($post->content, 150) }}
                        </div>

                        @auth
                            @if(auth()->user()->hasRole('ROLE_SUPER_ADMIN'))
                                <div class="border-t pt-4 mt-4 flex items-center space-x-4">
                                    <a href="{{ route('posts.edit', $post) }}" class="text-indigo-600 hover:text-indigo-800 text-sm font-medium">Edit Post</a>
                                    <form action="{{ route('posts.destroy', $post) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-red-700 text-sm font-medium">Delete Post</button>
                                    </form>
                                </div>
                            @endif
                        @endauth
                    </div>
                @endforeach
            </div>

            <div class="mt-10">
                {{ $posts->links() }}
            </div>
        </div>
    </main>

    <footer class="bg-white border-t mt-auto">
        <div class="max-w-4xl mx-auto px-4 py-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <p class="text-gray-600 text-sm">
                        &copy; {{ date('Y') }} <strong>Techno Blog</strong>. Test
                    </p>
                </div>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-gray-600 transition">Test</a>
                    <a href="#" class="text-gray-400 hover:text-gray-600 transition">Test</a>
                    <a href="#" class="text-gray-400 hover:text-gray-600 transition">Test</a>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
