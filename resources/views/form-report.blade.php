@extends('layouts.user')
@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-50">
    <!-- Container -->
    
    <div class="grid grid-cols-1 lg:grid-cols-2 w-full max-w-5xl bg-white shadow-lg rounded-lg overflow-hidden">
        <!-- Left Section -->
        <div class="bg-blue-900 text-white p-12 flex flex-col justify-between">
            <div>
                <h2 class="text-2xl font-bold mb-4">Report Your Cases</h2>
                <p class="text-gray-200">Lorem Ipsum...........</p>
            </div>
            <a href="{{route('reports')}}" class="text-white font-medium underline mt-8">See Reported Cases</a>
        </div>
        <!-- Right Section -->
        <div class="p-12 bg-gray-100">
            @if(session('success'))
                <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Tampilkan pesan error -->
            @if(session('error'))
                <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                    {{ session('error') }}
                </div>
            @endif
            <form action="{{route('report.store')}}" enctype="multipart/form-data" method="POST" class="space-y-6">
                @csrf
                <!-- Name Input -->
                <input 
                    type="text" 
                    name="nama"
                    placeholder="NAME.." 
                    class="w-full px-4 py-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600"
                >
                <!-- Location Input -->
                <input 
                    type="text" 
                    name="location"
                    placeholder="Location..." 
                    class="w-full px-4 py-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600"
                >
                <!-- Email Input -->
                <input 
                    type="email" 
                    name="email"
                    placeholder="Email..." 
                    class="w-full px-4 py-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600"
                >
                <!-- Report Text Area -->
                <input 
                    type="file" 
                    name="file" 
                    class="w-full px-4 py-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600"
                >
                <!-- Submit Button -->
                <button 
                    type="submit" 
                    class="w-full btn rounded-lg bg-gradient-to-bl from-gradientStart to-gradientMid text-white px-5 py-2 mt-4 font-bold">
                    Report 
                </button>
            </form>
        </div>
    </div>
</div>

@endsection