@extends('layouts.homelayouts3')

@section('konten')
<div class="container mx-auto mt-8">
    <h2 class="text-2xl font-bold mb-4">Feedback</h2>

    @if(session('success'))
        <div class="bg-gray-200 text-gray-800 px-4 py-2 rounded-md mb-4">{{ session('success') }}</div>
    @endif

    <form action="{{ route('feedback.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="rating" class="block text-gray-700">Rating:</label>
            <select name="rating" id="rating" class="form-select w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" required>
                <option value="">-- Pilih Rating --</option>
                @for($i = 1; $i <= 5; $i++)
                    <option value="{{ $i }}">{{ $i }} Bintang</option>
                @endfor
            </select>
        </div>
        <div class="mb-4">
            <label for="comment" class="block text-gray-700">Saran:</label>
            <textarea name="comment" id="comment" class="form-textarea w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" rows="4"></textarea>
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-md focus:outline-none focus:ring focus:ring-blue-500 focus:ring-opacity-50">Submit</button>
    </form>
</div>
@endsection
