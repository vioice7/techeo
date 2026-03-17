<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Control Panel') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-bold mb-4">Welcome back, {{ Auth::user()->email }}!</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="border p-4 rounded-lg bg-gray-50">
                            <h4 class="font-semibold mb-2">Blog Management</h4>
                            <div class="space-y-2">
                                <a href="{{ route('posts.create') }}" class="block text-blue-600 hover:underline">Create New Post</a>
                                <a href="{{ route('home') }}" class="block text-blue-600 hover:underline">Manage Existing Posts</a>
                            </div>
                        </div>

                        <div class="border p-4 rounded-lg bg-gray-50">
                            <h4 class="font-semibold mb-2">Account Security</h4>
                            <div class="space-y-2">
                                <a href="{{ route('profile.edit') }}" class="block text-blue-600 hover:underline font-bold">
                                    Change Password & Profile Info
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
