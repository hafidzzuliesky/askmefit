@extends('layouts.homelayouts4')

@section('konten')
<div class="relative">
    <a href="{{ route('program') }}" class="absolute top-0 left-0  ml-16">
        <button class="inline-flex text-white bg-black border-0 py-2 px-6 focus:outline-none hover:bg-gray-800 rounded-full text-lg">
            Menu Program
        </button>
    </a>
</div>
    <div class="flex flex-col justify-center items-center mt-14">
        <div id="proteinContent" class="bg-white bg-opacity-50 p-8 rounded-lg mb-10" style="width: 300px;">
            <p class="text-center text-2xl font-bold mb-6">Protein</p>
            <p class="text-center text-xl">Pisang 3 Buah</p>
            <hr class="mb-6 border-black">
            <p class="text-center text-xl">Kacang Tanah</p>
            <hr class="mb-6 border-black">
            <p class="text-center text-xl">Tempe</p>
            <hr class="mb-6 border-black">
            <p class="text-center text-xl">Ayam</p>
            <hr class="mb-6 border-black">
            <p class="text-center text-xl">Bubuk Protein</p>
            <hr class="mb-6 border-black">
            <p class="text-center text-xl">Kedelai</p>
            <hr class="mb-6 border-black">
        </div>
        <button id="nextButton" onclick="toggleContent()" class="text-white bg-black border-0 py-2 px-6 focus:outline-none hover:bg-gray-800 rounded-full text-lg">Selanjutnya</button>

        <div id="karbohidratContent" class="hidden bg-white bg-opacity-50 p-8 rounded-lg mb-10" style="width: 300px;">
            <p class="text-center text-2xl font-bold mb-6">Karbohidrat</p>
            <p class="text-center text-xl">Nasi</p>
            <hr class="mb-6 border-black">
            <p class="text-center text-xl">Roti</p>
            <hr class="mb-6 border-black">
            <p class="text-center text-xl">Kentang</p>
            <hr class="mb-6 border-black">
            <p class="text-center text-xl">Pasta</p>
            <hr class="mb-6 border-black">
            <p class="text-center text-xl">Sereal</p>
            <hr class="mb-6 border-black">
            <p class="text-center text-xl">Oatmeal</p>    
            <hr class="mb-6 border-black">
        </div>
        <button id="prevButton" onclick="toggleContent(true)" class="text-white bg-black border-0 py-2 px-6 focus:outline-none hover:bg-gray-800 rounded-full text-lg hidden">Sebelumnya</button>
    </div>

<script>
    function toggleContent(reverse = false) {
        const proteinContent = document.getElementById('proteinContent');
        const karbohidratContent = document.getElementById('karbohidratContent');
        const nextButton = document.getElementById('nextButton');
        const prevButton = document.getElementById('prevButton');

        if (!reverse) {
            proteinContent.classList.add('hidden');
            karbohidratContent.classList.remove('hidden');
            nextButton.classList.add('hidden');
            prevButton.classList.remove('hidden');
        } else {
            karbohidratContent.classList.add('hidden');
            proteinContent.classList.remove('hidden');
            prevButton.classList.add('hidden');
            nextButton.classList.remove('hidden');
        }
    }
</script>
@endsection
