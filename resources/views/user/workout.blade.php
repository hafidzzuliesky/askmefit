@extends('layouts.homelayouts4')

@section('konten')
<div class="relative">
    <a href="{{ route('program') }}" class="absolute top-0 left-0 ml-16">
        <button class="inline-flex text-white bg-black border-0 py-2 px-6 focus:outline-none hover:bg-gray-800 rounded-full text-lg">
            Menu Program
        </button>
    </a>
</div>
<div class="flex flex-col justify-center items-center mt-14">
    <div class="bg-white bg-opacity-50 p-8 rounded-lg mb-10" style="width: 300px;">
        <p class="text-center text-2xl font-bold mb-6">Daftar Workout</p>
        <div class="flex flex-col">
            <label class="inline-flex items-center">
                <input type="checkbox" class="form-checkbox h-5 w-5 text-gray-600">
                <a href="https://youtu.be/n-BhuYLQKak?si=3UB9QSB4UbrPPKMi" target="_blank" rel="noopener noreferrer"><span class="ml-2">Bakar Lemak Paha</span></a>
            </label>
            <hr class="mb-6 border-black">

            <label class="inline-flex items-center">
                <input type="checkbox" class="form-checkbox h-5 w-5 text-gray-600">
                <a href="https://youtu.be/n-BhuYLQKak?si=3UB9QSB4UbrPPKMi" target="_blank" rel="noopener noreferrer"><span class="ml-2">Bakar Lemak Perut</span></a>
            </label>
            <hr class="mb-6 border-black">

            <label class="inline-flex items-center">
                <input type="checkbox" class="form-checkbox h-5 w-5 text-gray-600">
                <a href="https://youtu.be/53guT_5FM1Y?si=TxZ7oPYJW24_LkWF" target="_blank" rel="noopener noreferrer"><span class="ml-2">Bakar Lemak Lengan</span></a>
            </label>
            <hr class="mb-6 border-black">

            <label class="inline-flex items-center">
                <input type="checkbox" class="form-checkbox h-5 w-5 text-gray-600">
                <a href="https://youtu.be/Q35yhOdETtw?si=sGIJya_ajCO2c9AZ" target="_blank" rel="noopener noreferrer"><span class="ml-2">Bakar 1000 Kalori</span></a>
            </label>
            <hr class="mb-6 border-black">

            <label class="inline-flex items-center">
                <input type="checkbox" class="form-checkbox h-5 w-5 text-gray-600">
                <a href="https://youtu.be/_B_AeMWYUKk?si=naSgP3oC2HFjSetv" target="_blank" rel="noopener noreferrer"><span class="ml-2">Menghilangkan Double Chin</span></a>
            </label>
            <hr class="mb-6 border-black">

            <label class="inline-flex items-center">
                <input type="checkbox" class="form-checkbox h-5 w-5 text-gray-600">
                <a href="https://youtu.be/KtyaSI9KtSw?si=Yvpz7T9K5H6Zq2ye" target="_blank" rel="noopener noreferrer"><span class="ml-2">Aerobik 10 Kg Lemak</span></a>
            </label>
            <hr class="mb-6 border-black">
        </div>
    </div>
</div>
@endsection
