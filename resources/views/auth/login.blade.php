<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Techno Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans antialiased text-gray-900">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        
        <div class="mb-8">
            <a href="/" class="text-4xl font-extrabold text-gray-800 tracking-tight">
                Techno <span class="text-blue-600">Blog</span>
            </a>
        </div>

        <div class="w-full sm:max-w-md px-8 py-10 bg-white shadow-xl overflow-hidden sm:rounded-2xl border border-gray-100">
            
            <h2 class="text-2xl font-bold mb-6 text-gray-800 text-center">Welcome Back</h2>

            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-4">
                    <x-input-label for="email" :value="__('Email')" class="font-semibold text-gray-700" />
                    <x-text-input id="email" class="block mt-1 w-full border-gray-300 focus:ring-blue-500 focus:border-blue-500" 
                                  type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="mb-4">
                    <x-input-label for="password" :value="__('Password')" class="font-semibold text-gray-700" />
                    <x-text-input id="password" class="block mt-1 w-full border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="flex items-center justify-between mt-4 mb-6">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-blue-600 shadow-sm focus:ring-blue-500" name="remember">
                        <span class="ms-2 text-sm text-gray-600 italic">{{ __('Remember me') }}</span>
                    </label>

                    @if (Route::has('password.request'))
                        <a class="text-sm text-blue-600 hover:text-blue-800 hover:underline" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>

                <div class="flex flex-col gap-4">
                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 rounded-lg shadow-lg transition transform active:scale-95">
                        {{ __('Log in') }}
                    </button>
                    
                    <a href="/" class="text-center text-sm text-gray-500 hover:text-gray-700">
                        Back to Home
                    </a>
                </div>
            </form>
        </div>

        <footer class="mt-8 text-gray-400 text-sm">
            &copy; {{ date('Y') }} Techno Blog
        </footer>
    </div>
</body>
</html>
