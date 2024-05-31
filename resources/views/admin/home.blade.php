@extends('layouts.homelayouts1')

@section('konten')

<div class="bg-white bg-opacity-25 p-6 rounded-lg shadow-md">
    <h2 class="text-3xl font-bold text-gray-800 mb-4">Welcome to the Admin Dashboard</h2>
    
    <!-- Cards Section -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Total Feedback Card -->
        <div class="bg-gray-800 text-white p-6 rounded-lg flex items-center justify-between">
            <div>
                <p class="text-lg font-bold">Total Feedback</p>
                <p class="text-2xl font-bold">{{ $totalFeedback }}</p>
            </div>
            <i class="fas fa-comments fa-3x"></i>
        </div>

        <!-- Average Rating Card -->
        <div class="bg-gray-800 text-white p-6 rounded-lg flex items-center justify-between">
            <div>
                <p class="text-lg font-bold">Average Rating</p>
                <p class="text-2xl font-bold">{{ number_format($averageRating, 2) }}</p>
            </div>
            <i class="fas fa-star fa-3x"></i>
        </div>

        <!-- Total Users Card -->
        <div class="bg-gray-800 text-white p-6 rounded-lg flex items-center justify-between">
            <div>
                <p class="text-lg font-bold">Total Users</p>
                <p class="text-2xl font-bold">{{ $totalUsers }}</p>
            </div>
            <i class="fas fa-users fa-3x"></i>
        </div>
    </div>

    <!-- Quick Links Section -->
    <div class="mt-8">
        <h3 class="text-2xl font-bold text-gray-700 mb-4">Quick Links</h3>
        <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <li>
                <!-- Add more quick links as needed -->
            </li>
        </ul>
    </div>
</div>
@endsection
