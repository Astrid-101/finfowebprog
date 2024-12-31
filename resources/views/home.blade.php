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
        <div class="min-h-screen w-full bg-hero bg-cover bg-center bg-no-repeat bg-[length:100%_100%]">
            @include('navbar')
            <div class="hero p-[50px] h-full w-full flex items-center justify-start">
                <div class="hero-content m-[50px]">
                    <h1 class="text-5xl font-[900] bg-gradient-to-b from-gradientStart to-gradientMid text-transparent bg-clip-text">Protect The Ocean</h1>
                    <p class="text-lg text-black mt-5">Lorem ipsum ...</p>
                    <p class="text-lg text-black mt-5">Report Your Case</p>
                    <a href="{{ route('report') }}">
                        <button class="btn rounded-lg bg-gradient-to-bl from-gradientStart to-gradientMid text-white px-5 py-2 mt-4 font-bold">Report</button>
                    </a>
                </div>
            </div>
        </div>
        <section class="container min-h-screen flex justify-center mx-auto px-4 py-8">
            <div class="flex flex-col items-center  lg:flex-row items-start gap-6">
                <!-- Map Image -->
                <div class="map flex justify-center items-center">

                    <img 
                    src="{{ asset('image/Map wo Grid.png') }}" 
                    width="450"
                    height="350"
                    alt="Indonesia Ocean Map" 
                    class=""
                    >
                </div>
                <!-- Text Content -->
                <div class="flex-1">
                    <h1 class="text-2xl bg-gradient-to-b from-gradientStart to-gradientMid text-transparent bg-clip-text lg:text-3xl font-semibold mb-4">
                    Indonesia Ocean Map
                    </h1>
                    <p class="text-white bg-[#869CB2] w-full p-2 leading-relaxed">
                    Peta laut Indonesia menggambarkan kekayaan maritim dengan lebih dari 17.000 pulau, jalur pelayaran, dan ekosistem penting seperti terumbu karang dan mangrove. Peta ini berfungsi sebagai alat navigasi, konservasi, dan pengelolaan sumber daya laut Indonesia. Selain itu, Peta ini menampilkan berbagai elemen penting seperti batas wilayah laut, jalur pelayaran, zona ekonomi eksklusif (ZEE), kedalaman laut, serta ekosistem penting.
                    </p>
                </div>
            </div>
        </section>
        <section id="related-facts" class="p-5 w-full bg-[#869CB2] flex flex-col items-center shadow-lg">
            <h1 class="text-2xl text-white font-bold text-center lg:text-3xl font-semibold mb-4">
                Related Facts
            </h1>
            <div class="flex w-2/3 h-[300px] my-[50px]">
                <div class="w-3/5 h-full rounded-bl-lg rounded-tl-lg bg-white p-[50px]">
                    <p class="text-3xl ">Emerging Danger From North</p>
                    <p class="text-3xl ">Sea Indonesia</p>
                    <p class="mt-3">Lorem ipsum</p>
                </div>
                <div class="w-2/5 h-full bg-facts bg-cover bg-no-repeat rounded-br-lg rounded-tr-lg bg-white p-5">

                </div>
            </div>
        </section>
        <div class="flex w-full justify-center my-[50px]">
            <button class="rounded-lg px-[100px] font-bold py-3 bg-gradient-to-bl from-gradientStart to-gradientMid text-white">See More</button>
        </div>

        <section class="bg-white p-5 w-full flex flex-col items-center  my-[100px]">
            <h1 class="text-3xl font-bold tex-center text-[#2B4967]">Authorated Reports</h1>
            <div class="card-container flex items-center justify-center gap-[50px] my-[50px]">
                <div class="card w-[293px] h-[365px] bg-[#D9D9D9] flex flex-col justify-center items-center rounded-lg p-5">
                    <div class="image">
                        <img src="{{ asset('image/user.png') }}" alt="Report 1" class="w-[150px] h-[150px] rounded-lg">
                    </div>
                    <div class="detail text-left mt-2">

                        <p class="text-[#454545] text-lg"> John Carter, a local fisherman</p>
                        <p class="text-[#454545] text-lg"> Date and Time: December 15</p>
                        <p class="text-[#454545] text-lg"> 2024, 2:45 PM</p>
                        <p class="text-[#454545] text-lg"> Location: 12°34'N, 45°67'W</p>
                    </div>
                </div>
                <div class="card w-[293px] h-[365px] bg-[#D9D9D9] flex flex-col justify-center items-center rounded-lg p-5">
                    <div class="image">
                        <img src="{{ asset('image/user.png') }}" alt="Report 1" class="w-[150px] h-[150px] rounded-lg">
                    </div>
                    <div class="detail text-left mt-2">

                        <p class="text-[#454545] text-lg"> John Carter, a local fisherman</p>
                        <p class="text-[#454545] text-lg"> Date and Time: December 15</p>
                        <p class="text-[#454545] text-lg"> 2024, 2:45 PM</p>
                        <p class="text-[#454545] text-lg"> Location: 12°34'N, 45°67'W</p>
                    </div>
                </div>
                <div class="card w-[293px] h-[365px] bg-[#D9D9D9] flex flex-col justify-center items-center rounded-lg p-5">
                    <div class="image">
                        <img src="{{ asset('image/user.png') }}" alt="Report 1" class="w-[150px] h-[150px] rounded-lg">
                    </div>
                    <div class="detail text-left mt-2">

                        <p class="text-[#454545] text-lg"> John Carter, a local fisherman</p>
                        <p class="text-[#454545] text-lg"> Date and Time: December 15</p>
                        <p class="text-[#454545] text-lg"> 2024, 2:45 PM</p>
                        <p class="text-[#454545] text-lg"> Location: 12°34'N, 45°67'W</p>
                    </div>
                </div>
                <div class="card w-[293px] h-[365px] bg-[#D9D9D9] flex flex-col justify-center items-center rounded-lg p-5">
                    <div class="image">
                        <img src="{{ asset('image/user.png') }}" alt="Report 1" class="w-[150px] h-[150px] rounded-lg">
                    </div>
                    <div class="detail text-left mt-2">

                        <p class="text-[#454545] text-lg"> John Carter, a local fisherman</p>
                        <p class="text-[#454545] text-lg"> Date and Time: December 15</p>
                        <p class="text-[#454545] text-lg"> 2024, 2:45 PM</p>
                        <p class="text-[#454545] text-lg"> Location: 12°34'N, 45°67'W</p>
                    </div>
                </div>
            </div>

            </div>
        </section>
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

                <!-- About Us -->
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
