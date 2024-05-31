@extends('layouts.homelayouts3')

@section('konten')
<section class="text-gray-600 body-font">
    <div class="container px-5 mx-auto">
        <div class="flex flex-wrap -mx-4 text-center items-center">
            <!-- Bagian Kiri: Dua Gambar dengan Deskripsi -->
            <div class="sm:w-1/2 bg-white bg-opacity-50 p-8 rounded-lg shadow-xl">
                <div class="rounded-lg h-64 overflow-hidden flex justify-center items-center space-x-4 p-4">
                    <div class="w-1/2 flex flex-col items-center">
                        <a href="{{ route('workout') }}" class="relative inline-block overflow-hidden">
                            <img src="/image/workout.png" alt="Workout Image"
                                class="object-cover rounded-full h-32 w-32 transition-transform duration-300 transform hover:scale-110">
                            <p class="mt-4 text-black font-bold">Workout</p>
                        </a>

                    </div>
                    <div class="w-1/2 flex flex-col items-center">
                        <a href="{{ route('food') }}" class="relative inline-block overflow-hidden">
                            <img src="/image/food.png" alt="Food Image" class="object-cover rounded-full h-32 w-32 transition-transform duration-300 transform hover:scale-110">
                            <p class="mt-4 text-black font-bold">Healthy Food</p>
                        </a>

                    </div>
                </div>
            </div>

            <!-- Bagian Kanan: Paragraf Teks -->
            <div class="sm:w-1/2 px-4 text-left">
                <div class="text-black bg-white bg-opacity-50 p-8 rounded-lg shadow-md">
                    <h1 class="title-font sm:text-xl text-xl mb-4 font-bold text-black">Jangan menunda perubahan!
                    </h1>
                    <h1 class="title-font sm:text-5xl text-3xl mb-4 font-bold text-black">Ikuti Programnya, Ditunggu
                        Versi Terbaik Dari Kamu !
                    </h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- resources/views/articles/index.blade.php -->


<div class="container mx-auto mt-10 mb-50 ">
    <div class="grid grid-cols-4 gap-4 ">
        @foreach ($articles as $article)
            <div class="p-4 border rounded bg-white bg-opacity-30">
                <img src="{{ asset($article['image']) }}" alt="{{ $article['title'] }}"
                    class="w-full h-30 object-cover rounded mb-4">
                <h2 class="text-lg font-bold">{{ $article['title'] }}</h2>
                <p class="text-black">{{ $article['summary'] }}</p>
                <a href="{{ $article['link'] }}" class="text-blue-700">Read more</a>
            </div>
        @endforeach
        <div class="mb-17">

        </div>
    </div>
</div>



@endsection