@extends('layouts.user')
@section('content')
<div class="container flex justify-center gap-5 items-center mx-auto px-6 py-12">
    <!-- Header Section -->
    <div class="w-3/5 mb-8">
        <h1 class="text-2xl mb-5 lg:text-3xl font-semibold text-[#222565]">
            "Understanding the Ocean: A Beginner's Guide to Our Planet's Blue Heart"
        </h1>
        <!-- Image Section -->
        <div class="lg:col-span-2">
            <img 
                src="{{ asset('image/facts.png') }}" 
                alt="Ocean Image" 
                class="w-full rounded-lg">
                
        </div>
        <!-- Text Content Section -->
        <div class="mt-8">
            <p class="text-gray-600 leading-relaxed">
                <span class="font-semibold">Breaking News: The Ocean is Full of Surprises!</span> <br>
                Did you know that more than 80% of the ocean remains unexplored? It’s like having a massive hidden world right here on Earth! Beneath the waves lies an incredible array of mysteries, from deep trenches to reefs that stretch farther than Mount Everest is tall to marine creatures that glow in the complete darkness. The ocean is not just water; it’s a frontier that’s still waiting to be discovered.
            </p>
            <p class="mt-4 text-gray-600 leading-relaxed">
                Exploring the ocean isn’t just for scientists—it’s something everyone can learn about! Whether you’re curious about coral reefs, tidal waves, or the strange animals that live in the deep sea, there’s always something fascinating to uncover. So, travel beyond the horizon, read stories, and join us in celebrating the wonders of our blue planet!
            </p>
        </div>
    </div>

    <!-- Main Content Section -->
    <div class="w-2/5 grid grid-cols-1">
        <!-- Sidebar Section -->
        <div class="space-y-4">
            @for ($i = 0; $i < 3; $i++)
            <div class="flex items-center gap-4">
                <!-- Text -->
                <p class="text-gray-800 text-sm font-medium">
                    "Understanding the Ocean: A Beginner's Guide to Our Planet's Blue Heart"
                </p>
                <!-- Image Placeholder -->
                <div class="w-[150px] h-[150px] bg-gray-300 rounded-md"></div>
            </div>
            @endfor
        </div>
    </div>

    
</div>
@endsection