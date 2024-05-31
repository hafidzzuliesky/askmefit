@extends('layouts.homelayouts3')

@section('konten')
<section class="text-gray-1000 body-font bg-opacity-50 bg-cover">
    <div class="container mx-auto flex px-5 py-2 md:flex-row flex-col items-center">
        <div
            class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-10 md:mb-0 items-center text-center">
            {{-- Menampilkan hasil BMI jika sudah dihitung --}}
            @if(isset($bmiResult))
                <div class="text-black bg-white bg-opacity-25 p-8 rounded-lg shadow-md">
                    <p>Skor BMI Anda:</p>
                    <button
                        class="ml-4 inline-flex text-white bg-black border-0 py-2 px-6 focus:outline-none hover:bg-gray-800 rounded-full text-lg mb-4">{{ $bmiResult['bmi'] }}
                    </button>
                    <h1 class="title-font sm:text-4xl text-3xl mb-4 font-bold text-black">{{ $bmiResult['interpretation'] }}
                    </h1>
                    {{-- Menampilkan advice dengan tag <br> --}}
                    <p class="mb-8 leading-relaxed text-black">{!! $bmiResult['advice'] !!}</p>
                    <a href="{{ route('program') }}">
                        <button
                            class="ml-4 inline-flex text-white bg-black border-0 py-2 px-6 focus:outline-none hover:bg-gray-800 rounded-full text-lg">Ikutin
                            program kami
                        </button>
                    </a>

                </div>
            @else   
                <div class="text-black bg-white bg-opacity-25 p-8 rounded-lg shadow-md">
                    <p class="mb-5 leading-relaxed text-black">Halo, {{ $userName }} Selamat Datang di AskMeFit!</p>
                    <h1 class="title-font sm:text-5xl text-3xl mb-4 font-bold text-black">Ga Penasaran berat badan kamu
                        termasuk
                        ideal atau engga?
                        <br class="hidden lg:inline-block">dengan sekali klik!
                    </h1>
                    <p class="mb-8 leading-relaxed text-black">CEK SEKARANG DI KALKULATOR BMI !!</p>
                </div>

            @endif
        </div>
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-8 md:mb-0">
            <form method="POST" action="{{ route('calculateBMI') }}"
                class="bg-white bg-opacity-25 shadow-md rounded px-8 pt-6 pb-8">
                @csrf
                <h2 class="text-center text-2xl font-bold mb-4">AskMeFit</h2>
                <h3 class="text-center text-xl font-bold mb-8">BMICalculator</h3>
                <div class="mb-4">
                    <label for="weight" class="block text-gray-700 text-sm font-bold mb-2">Berat Badan (kg):</label>
                    <input type="number" name="weight" id="weight" required
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label for="height" class="block text-gray-700 text-sm font-bold mb-2">Tinggi Badan (cm):</label>
                    <input type="number" name="height" id="height" required
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="flex items-center justify-center mb-4">
                    <button type="submit"
                        class="bg-black hover:bg-gray-800 text-white font-bold py-2 px-6 rounded-full focus:outline-none focus:shadow-outline">
                        Hitung BMI
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection