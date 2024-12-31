<nav class="navbar flex items-center w-full navbar-light bg-light">
    <a class="navbar-brand px-5" href="{{ route('home')}}">
        <img src="{{ asset('image/logo.png') }}" width="50" height="50" alt="Logo">
        {{-- <p>Protecting The Ocean Preserving Life</p> --}}
    </a>
    <div class="flex justify-end w-full">
        <ul class="navbar-nav flex justify-start ml-[300px] w-full gap-[150px]">
            <li class="nav-item">
                <a class="nav-link text-black" href="{{ route('services')}}">Service</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('facts')}}">Facts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('reports')}}">Report</a>
            </li>
        </ul>
    </div>
</nav>
