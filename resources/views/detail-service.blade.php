@extends('layouts.user')
@section('content')
<div class="w-full max-w-3xl mx-auto space-y-4 mb-[100px]">
        <!-- Title -->
        <h1 class="text-blue-900 text-4xl font-bold">
            Law Number 6 of 1996: <span class="font-normal">This law regulates the waters of Indonesia.</span>
        </h1>
        <!-- PDF Viewer -->
        <div class="w-full bg-gray-300 h-[600px] flex items-center justify-center rounded-md shadow-md">
            <iframe 
                src="{{ asset('file/PDF.pdf') }}" 
                class="w-full h-full"
                frameborder="0">
            </iframe>
        </div>
    </div>
@endsection