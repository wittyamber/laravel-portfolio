@extends('layouts.app')

@section('title', 'My Certificates')

@section('content')
<div class="container mx-auto p-8">
    <h1 class="text-4xl font-bold mb-8" data-aos="fade-down">My Certificates & Credentials</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @forelse ($certificates as $certificate)
            <div class="bg-white rounded-lg shadow-md overflow-hidden" data-aos="fade-up">
                {{-- Check if an image exists --}}
                @if ($certificate->image_path)
                    <img src="{{ asset('storage/' . $certificate->image_path) }}" alt="{{ $certificate->title }}" class="w-full h-48 object-cover">
                @else
                    {{-- Placeholder if no image --}}
                    <div class="w-full h-48 bg-slate-200 flex items-center justify-center">
                        <span class="text-slate-500">No Image</span>
                    </div>
                @endif
                
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-slate-900">{{ $certificate->title }}</h2>
                    <p class="text-slate-600 mt-1">Issued by: <strong>{{ $certificate->issuing_organization }}</strong></p>
                    <p class="text-sm text-slate-500 mt-1">Date: {{ \Carbon\Carbon::parse($certificate->date_issued)->format('F Y') }}</p>
                    
                    {{-- Verification Link --}}
                    @if ($certificate->credential_url)
                        <a href="{{ $certificate->credential_url }}" target="_blank" class="inline-block mt-4 bg-blue-600 text-white font-semibold px-4 py-2 rounded-md hover:bg-blue-700 transition">
                            Verify Credential
                        </a>
                    @endif
                </div>
            </div>
        @empty
            <p class="text-slate-600 md:col-span-3">I am currently updating my certificates. Please check back soon!</p>
        @endforelse
    </div>
</div>
@endsection