<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-[#d1759b] leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12" style="background: linear-gradient(rgba(222, 145, 214, 0.2), rgba(239, 177, 177, 0.2)); min-height: 80vh;">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-3xl border-2 border-pink-100">
                <div class="p-8 text-gray-900">
                    <h3 class="text-3xl font-bold mb-6 text-center" style="color: #d1759b;">✨ Welcome, {{ Auth::user()->name }}! ✨</h3>
                    
                    <div class="flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-8 mb-8 bg-pink-50 p-6 rounded-2xl border border-pink-200">
                        @if (Auth::user()->profile_image)
                            <img src="{{ Storage::url(Auth::user()->profile_image) }}" alt="Profile Image" class="w-32 h-32 rounded-full object-cover border-4 border-[#d1759b] shadow-md">
                        @else
                            <div class="w-32 h-32 rounded-full bg-pink-200 flex items-center justify-center text-pink-600 font-semibold border-4 border-[#d1759b] shadow-md">No Image</div>
                        @endif
                        
                        <div class="text-lg">
                            <p class="mb-2"><strong class="text-pink-600">Name:</strong> {{ Auth::user()->name }}</p>
                            <p class="mb-2"><strong class="text-pink-600">Email:</strong> {{ Auth::user()->email }}</p>
                            <p><strong class="text-pink-600">Role:</strong> <span class="capitalize bg-[#d1759b] text-white px-3 py-1 rounded-full text-sm shadow-sm">{{ Auth::user()->role }}</span></p>
                        </div>
                    </div>

                    <div class="mt-8 flex justify-center space-x-4">
                        <a href="{{ route('profile.edit') }}" class="inline-flex items-center px-6 py-3 bg-[#d1759b] border border-transparent rounded-full font-semibold text-sm text-white uppercase tracking-widest hover:bg-[#b05e7e] focus:bg-[#b05e7e] active:bg-[#8c4b64] focus:outline-none focus:ring-2 focus:ring-[#d1759b] focus:ring-offset-2 transition ease-in-out duration-150 shadow-md">
                            Edit Profile
                        </a>
                        <a href="{{ route('products.index') }}" class="inline-flex items-center px-6 py-3 bg-white border-2 border-[#d1759b] rounded-full font-semibold text-sm text-[#d1759b] uppercase tracking-widest hover:bg-pink-50 focus:outline-none focus:ring-2 focus:ring-[#d1759b] focus:ring-offset-2 transition ease-in-out duration-150 shadow-md">
                            Go to Products
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
