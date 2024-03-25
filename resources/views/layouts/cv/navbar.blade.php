<header
    x-data="{
        mobileMenuOpen: false,
        cartItemsCount: {{ \App\Helpers\Cart::getCartItemsCount() }},
    }"
    @cart-change.window="cartItemsCount = $event.detail.count"
    class="flex flex-col justify-between z-50"
    id="navbar"
>
    <div class="preheader">
        <ul class="flex gap-x-4">
            @foreach (Config::get('languages') as $lang => $language)
                @if ($lang != App::getLocale())
                    <li>
                        <a class="flex items-center gap-x-1 opacity-50" href="{{ route('lang.switch', $lang) }}">
                            <span class="flag-icon flag-icon-{{$language['flag-icon']}}"></span>
                            <span>{{$language['display']}}</span>
                        </a>
                    </li>
                @else
                    <li>
                        <a class="flex items-center gap-x-1" href="{{ route('lang.switch', $lang) }}">
                            <span class="flag-icon flag-icon-{{$language['flag-icon']}}"></span>
                            <span>{{$language['display']}}</span>
                        </a>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
    <div class="flex items-center justify-between px-6">

        <div class="logo">
            <x-application-logong />
        </div>
    
        <!-- Responsive Menu -->
        <div
            class="block fixed z-10 top-0 bottom-0 height h-full w-[220px] transition-all mobile-menu md:hidden p-4"
            :class="mobileMenuOpen ? 'left-0' : '-left-[220px]'"
        >
            <ul>
                <li>
                    <a
                        href="#curriculum-vitae"
                        class="relative flex items-center justify-between py-2 px-3 transition-colors underline-hover"
                        @click="mobileMenuClosed"
                    >
                        <div class="flex items-center">
                            {{ __('Curriculum') }}
                        </div>
                    </a>
                </li>
                <li>
                    <a
                        href="#portfolio"
                        class="relative flex items-center justify-between py-2 px-3 transition-colors underline-hover"
                        onclick="closeNav()"
                    >
                        <div class="flex items-center">
                            {{ __('Portfolio') }}
                        </div>
                    </a>
                </li>
                <!-- <li>
                    <a
                        href="{{ route('login') }}"
                        class="flex items-center py-2 px-3 transition-colors underline-hover"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-6 w-6 mr-2"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"
                            />
                        </svg>
                        {{ __('Contacto') }}
                    </a>
                </li> -->
                <li class="px-3 py-3">
                    <a
                        href="{{ route('welcome') }}"
                        class="block text-center py-2 px-3 rounded shadow-md transition-colors w-full btn-demo"
                        onclick="closeNav()"
                    >
                        {{ __('Ver Demo') }}
                    </a>
                </li>
            </ul>
        </div>
        
        <!--/ Responsive Menu -->
        <nav class="hidden md:flex">
            <ul class="grid grid-flow-col items-center">
                <li class="number">
                    <a
                        href="#curriculum-vitae"
                        class="relative inline-flex items-center py-navbar-item px-navbar-item underline-hover scroll-smooth"
                    >
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                    </svg> -->
    
                        <span><b>01 | </b> {{ __('Curriculum') }}</span>
                    </a>
                </li>
                <li class="number">
                    <a
                        href="#portfolio"
                        class="relative inline-flex items-center py-navbar-item px-navbar-item underline-hover scroll-smooth"
                    >
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z" />
                    </svg> -->
    
                    <span><b>02 |  </b> {{ __('Portfolio') }}</span>
                    </a>
                </li>
                <li class="number hidden">
                    <a
                        href="{{ route('login') }}"
                        class="flex items-center py-navbar-item px-navbar-item underline-hover"
                    >
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                        </svg> -->
    
                        <span><b>03 |  </b> {{ __('Contacto') }}</span>
                    </a>
                </li>
                <li>
                    <a
                        href="{{ route('welcome') }}"
                        class="btn-demo py-2 px-3 shadow transition-colors"
                    >
                        {{ __('Ver Demo') }}
                    </a>
                </li>
            </ul>
        </nav>
        <div class="flex md:hidden">
            <!-- <div x-data="{open: false}" class="relative">
                <a
                    @click="open = !open"
                    class="cursor-pointer flex items-center py-navbar-item px-navbar-item pr-5 underline-hover h-full"
                >
                    <span class="flag-icon flag-icon-{{Config::get('languages')[App::getLocale()]['flag-icon']}}"></span>
                    <span class="small-text">{{ Config::get('languages')[App::getLocale()]['display'] }}</span>
                </a>
                <ul
                    @click.outside="open = false"
                    x-show="open"
                    x-transition
                    x-cloak
                    class="absolute z-10 right-0 w-48 dropdown px-4"
                >
                    @foreach (Config::get('languages') as $lang => $language)
                        @if ($lang != App::getLocale())
                            <li>
                                <a class="flex items-center underline-hover py-lang-navbar-item" href="{{ route('lang.switch', $lang) }}"><span class="flag-icon flag-icon-{{$language['flag-icon']}}"></span><span class="small-text">{{$language['display']}}</span></a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div> -->
            <button
                @click="mobileMenuOpen = !mobileMenuOpen"
                class="p-4 block md:hidden"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="1"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M4 6h16M4 12h16M4 18h16"
                    />
                </svg>
            </button>
        </div>
    </div>
</header>

<script>
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.getElementById("navbar").style.top = "0";
    } else {
        document.getElementById("navbar").style.top = "-90px";
    }
    prevScrollpos = currentScrollPos;
    
    if(window.scrollY > window.innerHeight){
        document.getElementById("navbar").classList.add("scrolled-bottom");
    }else{
        document.getElementById("navbar").classList.remove("scrolled-bottom");
    }
    }
    // function closeNav() {
    //     const mobileMenu = document.querySelector(".mobile-menu");
    //     const closeMenu = ()=>{
    //         if(mobileMenu.style.left = 0){
    //             document.querySelector(".mobile-menu").style.left = "-220px";
    //         }
    //     }
    // }
</script>