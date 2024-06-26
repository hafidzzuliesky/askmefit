@extends('layouts.homelayouts2')

@section('konten')
<section class="text-gray-600 body-font">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
        <div
            class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-10 md:mb-0 items-center text-center">
            <p class="mb-5 leading-relaxed text-white"><strong>Halo, Selamat Datang di AskMeFit!</strong></p>

            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-white">
                <strong>Temukan kesehatan Anda</strong>
             <br class="hidden lg:inline-block"><strong>dengan sekali klik!</strong>
            </h1>
            <p class="mb-8 leading-relaxed text-white">Jadilah bagian dari orang yang sehat dan peduli akan kesehatan
                diri sendiri maupun orang lain</p>
            <div class="flex justify-center mb-20">
                <a href="{{ route('login') }}">
                    <button
                        class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Masuk</button>
                </a>
                <a href="{{ route('register') }}">
                    <button
                        class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Daftar</button>
                </a>
            </div>
        </div>
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
        </div>
    </div>
</section>

@endsection