@extends('layouts.user')
@section('content')
<div class="container flex justify-center gap-5 items-center mx-auto px-[50px] py-12">
    <!-- Header Section -->
    <div class="w-3/5 mb-8">
        <!-- Image Section -->
        <div class="lg:col-span-2">
            <img 
                src="{{ asset('image/user.png') }}" 
                alt="Ocean Image" 
                class="rounded-lg mb-[50px]">
                
        </div>
        <h1 class="text-2xl mb-5 lg:text-3xl font-semibold text-[#222565]">
            John Carter, a local fisherman
        </h1>
        <!-- Text Content Section -->
        <div class="mt-8">
             <p class="text-gray-600">
                    <span class="font-bold">Summary Report:</span> Undetected Ship Sighting<br>
                    <span class="font-bold">Date and Time:</span> [Insert date and time]<br>
                    <span class="font-bold">Location:</span> [Insert location coordinates or general area]<br>
                    <span class="font-bold">Observer:</span> [Insert name or title, e.g., "A local fisherman"]
                </p>

                <h3 class="mt-6 text-lg font-semibold text-gray-800">Incident Overview:</h3>
                <p class="text-gray-600">
                    An undetected ship was spotted in [specific ocean/sea area] by [observer's name], 
                    who noticed the vessel while navigating through the area. The ship appeared to lack 
                    any visible identification markers, such as flags or registration numbers, and did not 
                    show up on local radar systems or marine tracking tools.
                </p>

                <h3 class="mt-6 text-lg font-semibold text-gray-800">Details of Observation:</h3>
                <p class="text-gray-600">
                    The ship was described as [size and description, e.g., "a medium-sized cargo vessel, 
                    rusted, and moving slowly"]. No signs of crew activity were visible, and the ship 
                    maintained an unusual course, seemingly avoiding heavily trafficked maritime routes. 
                    Attempts to communicate with the vessel using standard maritime channels yielded no response.
                </p>

                <h3 class="mt-6 text-lg font-semibold text-gray-800">Recommendations:</h3>
                <p class="text-gray-600">
                    The incident has been reported to [relevant authorities, e.g., "coast guard" or 
                    "marine surveillance agency"] for further investigation. It is recommended that local ships 
                    maintain caution in the area and report any additional sightings to ensure maritime safety 
                    and security. Further monitoring and potential intervention may be required to determine 
                    the ship's origin and purpose.
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