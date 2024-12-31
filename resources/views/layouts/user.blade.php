<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="w-full">
            @include('navbar')
        </div>
        {{-- Page Content --}}
        <main>
            @yield('content')
        </main>
        <footer class="bg-[#002855] text-white py-8">
            <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-6 items-start">
                <!-- Logo & Tagline -->
                <div class="flex flex-col items-center md:items-start text-center md:text-left">
                <img 
                    src="{{ asset('image/logo2.png') }}" 
                    alt="Ocean Logo" 
                    class="w-[150px] h-[150px] mb-4"
                >
                <p class="text-sm ml-5 font-semibold">
                    "Protecting the Ocean, <br>Preserving Life"
                </p>
                </div>


                <!-- Contact -->
                <div class="text-center mt-[50px] md:text-left">
                    <h3 class="text-lg font-semibold mb-2">About Us</h3>
                    <p class="text-sm leading-relaxed">
                        Our mission is simple yet vital: to protect the ocean and preserve the life it sustains. 
                        As the lifeblood of our planet, the ocean supports countless ecosystems, regulates our climate, 
                        and provides for millions of communities worldwide.
                    </p>
                </div>

                <!-- Contact -->
                <div class="text-center mt-[50px] ml-[150px] md:text-left">
                <h3 class="text-lg font-semibold mb-2">Contact</h3>
                <p class="text-sm mb-2">Loremipsum@f.info.com</p>
                <p class="text-sm mb-4">Call contact: +3456789098764</p>
                <div class="flex justify-start gap-4">
                    <!-- Icons -->
                    <a href="#" class="hover:text-gray-400">
                    <i class="fa-brands fa-instagram text-xl"></i>
                    </a>
                    <a href="#" class="hover:text-gray-400">
                    <i class="fa-brands fa-whatsapp text-xl"></i>
                    </a>
                    <a href="#" class="hover:text-gray-400">
                    <i class="fa-brands fa-facebook text-xl"></i>
                    </a>
                </div>
                </div>
            </div>

            <!-- Copyright -->
            <div class="text-center mt-6 text-sm text-gray-400">
                ©2024 F.info. All right reserved
            </div>
            </footer>

    </body>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</html>
