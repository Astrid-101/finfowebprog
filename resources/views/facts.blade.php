@extends('layouts.user')
@section('content')
        <section class=" py-8">
            <div class="flex flex-col justify-center bg-[#869CB2] p-[50px] lg:flex-row gap-4 mb-6">
                <div class="lg:w-1/2">
                    <h2 class="text-4xl font-semibold text-gray-800 mb-2">Facts and News</h2>
                    <p class="text-gray-700 text-md">
                        Breaking News: The Ocean is Full of Surprises! 🌊 <br>
                        Did you know that more than 80% of the ocean remains <br>
                        unexplored? It’s like having a massive hidden world 
                        right here <br>
                        on Earth! Beneath
                    </p>
                </div>
                <div class="lg:w-1/3">
                    <img 
                        src="{{ asset('image/facts.png') }}" 
                        alt="Ocean Facts" 
                        class="w-full h-40 object-cover rounded-md"
                    >
                </div>
            </div>
            <div class="container flex justify-center items-center px-6">
                <div class="grid grid-cols-1 px-[100px] lg:grid-cols-3 justify-center">
                    <!-- Left Column -->
                    <div class="space-y-6">
                        @for ($i = 0; $i < 4; $i++)
                        <a class="flex items-center gap-[50px]" href="{{ route('detail-facts') }}">
                                <!-- Text -->
                                <p class="text-gray-800 text-sm font-medium">
                                    "Understanding the Ocean: A <br>Beginner's Guide to Our Planet's Blue Heart"
                                </p>
                                <!-- Image Placeholder -->
                                <div class="w-[150px] h-[150px] bg-gray-300 rounded-md"></div>
                        </a>
                        @endfor
                    </div>

                    <!-- Vertical Line -->
                    <div class="hidden lg:flex justify-center">
                        <div class="w-[1px] h-full bg-black"></div>
                    </div>

                    <!-- Right Column -->
                    <div class="space-y-6">
                        @for ($i = 0; $i < 4; $i++)
                        <a class="flex items-center gap-[50px]" href="{{ route('detail-facts') }}">
                                <!-- Text -->
                                <p class="text-gray-800 text-sm font-medium">
                                    "Understanding the Ocean: A <br>Beginner's Guide to Our Planet's Blue Heart"
                                </p>
                                <!-- Image Placeholder -->
                                <div class="w-[150px] h-[150px] bg-gray-300 rounded-md"></div>
                        </a>
                        @endfor
                    </div>
                </div>
            </div>

        </section>
@endsection