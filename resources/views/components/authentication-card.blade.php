<div class="min-h-screen flex flex-col justify-center items-center pt-6 sm:pt-0 bg-cover bg-center"
    style="background-image: url('/image/background-home.png');">

    <div class="w-full sm:max-w-md mt-6 px-6 py-8 bg-white bg-opacity-70 shadow-lg rounded-lg">
        <div class="text-center">
            <div style="margin-left: 123px;">{{ $logo }}</div>
            <p class="text-2xl font-bold text-black " style="margin-top: -70px;">AskMeFit</p>
        </div>
        <div class="text-black">
            {{ $slot }}
        </div>
    </div>
</div>