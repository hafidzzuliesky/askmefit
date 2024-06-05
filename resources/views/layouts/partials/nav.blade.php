<header class="text-black body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a class="flex title-font font-medium items-center text-black mb-4 md:mb-0 text-2xl">
            <img src="\image\logo.png" alt="askmefit" style="width: 100px;"class="mt-9">
            <h1 style="margin-left: -30px;" >AskMeFit</h1>
        </a>
        @if(Auth::check())
            @if(Auth::user()->usertype === 'admin')
                <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                    <a class="mr-5 hover:text-black text-2xl" href="{{ route('home') }}">Dashboard</a>
                    <a class="mr-5 hover:text-black text-2xl" href="{{ route('admin.users.index') }}">Manajemen Pengguna</a>
                    <a class="mr-5 hover:text-black text-2xl" href="{{ route('feedback.index') }}">Feedback</a>

                    @if($dashboard)
                        @include('dashboard')
                    @endif
                </nav>
            @else
                <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                <a class="mr-12 hover:text-black text-xl" href="{{ route('home') }}">Home</a>
                <a class="mr-12 hover:text-black text-xl" href="{{ route('feedback.create') }}">Feedback</a>
                    @if($dashboard)
                        @include('dashboard')
                    @endif
                </nav>
            @endif
        @else
            <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                <a class="mr-12 hover:text-black text-2xl" href="{{ route('home') }}">Home</a>
                <a class="mr-12 hover:text-black text-2xl" href="{{ route('about_us') }}">About Us</a>
                
            </nav>
            @if($dashboard)
                @include('dashboard')
            @endif
        @endif
    </div>
</header>
