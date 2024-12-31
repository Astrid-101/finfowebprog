@extends('layouts.user')
@section('content')
<section class=" py-8">
            <div class="flex flex-col justify-center bg-[#00224F] p-[100px] lg:flex-row gap-4 mb-6">
                <div class="lg:w-2/3">
                    <h2 class="text-4xl font-semibold text-white mb-2">"Have you observed anything unusual? <br> Report it to help safeguard our oceans."</h2>
                    <h2 class="text-2xl mt-5 font-semibold text-white mb-2">Report Your Cases</h2>
                    <a href="{{ route('report') }}">
                        <button class="btn rounded-lg bg-gradient-to-bl from-gradientStart to-gradientMid text-white px-5 py-2 mt-4 font-bold">Report</button>
                    </a>
                </div>
                <div class="lg:w-1/3">
                    <img 
                        src="{{ asset('image/Group 27.png') }}" 
                        alt="Ocean Facts" 
                        class="object-cover rounded-md"
                    >
                </div>
            </div>
            <div class="container w-full flex flex-col justify-center items-center px-6">
                <div class="w-full grid grid-cols-1 px-[100px] justify-center">
                    <!-- Left Column -->
                    <div class="w-full space-y-6">
                        @for ($i = 0; $i < 4; $i++)
                        <a class="flex justify-between items-center gap-[50px]" href="{{ route('detail-reports') }}">
                                <!-- Text -->
                                <p class="text-gray-800 text-sm font-medium">
                                     John Carter, a local fisherman <br> Date and Time: December 15, 2024,<br> 2:45 PM <br>Location: 12°34'N, 45°67'W
                                </p>
                                <!-- Image Placeholder -->
                                <div class="w-[150px] h-[150px] bg-gray-300 rounded-md"></div>
                                <p class="text-gray-800 text-sm font-medium">
                                     Incident Overview: <br> An undetected ship was spotted in the Atlantic Ocean by John <br>
                                    Carter while navigating his fishing vessel in the area. The ship <br>
                                    appeared to lack visible identification markers, such as flags or <br>
                                    registration numbers, and did not show up on marine radar systems <br>
                                    or tracking tools used by nearby vessels.
                                </p>
                        </a>
                        <div class="hidden lg:flex justify-center">
                            <div class="w-full h-[1px] bg-black"></div>
                        </div>
                        @endfor
                    </div>

                    

                </div>
            </div>

        </section>
@endsection