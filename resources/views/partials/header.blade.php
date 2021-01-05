{{-- 
    HEADER
 --}}

<header>
    <div class="logo">
        <a href="/" class="brand">
            <img src="{{ asset('img/logo.png') }}">
        </a>
    </div>

    <div class="content only-desktop">
        <a href="/">Home</a>
        <a href="{{ route('ricette') }} ">Le ricette</a>
        <a href="{{ route('news') }} ">Novità</a>
    </div>

    <div class="only-mobile">
        <a href="#"> 
            <i @click="isOpen = !isOpen" class="fas fa-bars"></i> 
        </a>
            {{-- <transition name="fade" appear> --}}
                <div v-if="isOpen" class="menu">
                    <a href="/">Home</a>
                    <a href="{{ route('ricette') }} ">Le ricette</a>
                    <a href="{{ route('news') }} ">Novità</a>
                </div>
            {{-- <transition> --}}
    </div>
</header>


