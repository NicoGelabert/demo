<footer>
    <div class="footer-container flex flex-col md:flex-row max-w-[90%] lg:max-w-[80%] mx-auto mt-16">
        <div class="flex flex-col items-center">
            <div class="logo">
                <a href="#" class="flex gap-2">
                    <div>
                        <img src="{{ asset('storage/images/logo-ng.png') }}" alt="">
                    </div>
                    <h3 class="text-6xl">
                        ng
                    </h3>
                </a>
            </div>
            <div class="flex gap-4 justify-center social-icons">
                <a href="https://wa.me/34623037048?text=Hola%20Nicolás!%20Te%20escribo%20desde%20tu%20web" target="blank">
                    <i class="fi fi-brands-whatsapp"></i>
                </a>
                <a href="mailto:nico.gelabert@gmail.com" target="blank">
                    <i class="fi fi-sr-envelope"></i>
                </a>
                <a href="https://www.behance.net/nicolasgelabert" target="blank">
                    <i class="fi fi-brands-behance"></i>
                </a>
                <a href="https://www.linkedin.com/in/nicolasgelabert/" target="blank" class="linkedin">
                    <i class="fi fi-brands-linkedin"></i>
                </a>
                <a href="https://www.instagram.com/nicolas.gelabert.dg/" target="blank">
                    <i class="fi fi-brands-instagram"></i>
                </a>
            </div>
        </div>
        <div class="flex flex-col text-center sm:flex-row gap-y-8 sm:flex-row sm:justify-between md:text-left md:gap-8 lg:gap-16 footer-menu">
            <div>
                <h4>{{ __('Nicolás Gelabert') }}</h4>
                <ul>
                    <li>
                        <a href="#curriculum-vitae">
                            {{ __('Curriculum') }}
                        </a>
                    </li>
                    <li>
                        <a href="#portfolio">
                            {{ __('Portfolio') }}
                        </a>
                    </li>
                    <li>
                        <a href="{{ asset('storage/files/cv.pdf') }}" download="01-curriculum-vitae-nicolas-gelabert">
                            {{ __('Descargar CV') }}
                        </a>
                    </li>
                </ul>
            </div>
            <div>
                <h4>{{ __('Demos Web') }}</h4>
                <ul>
                    <li><a href="{{ route('welcome') }}" target="blank">{{ __('Demo Vue') }}</a></li>
                    <li><a href="https://nifty-booth-702758.netlify.app/" target="blank">{{ __('Demo React') }}</a></li>
                </ul>
            </div>
        </div>
    </div>
    <hr class="h-px border-t-0 bg-transparent bg-gradient-to-r from-transparent via-white to-transparent opacity-50 dark:opacity-100" />
    <div class="post-footer max-w-[90%] lg:max-w-[80%] ">
        <span>{{__('Site design and developed by')}}<a href="{{ route('welcome') }}"> Nicolás Gelabert</a></span>
        <!-- <ul class="flex gap-x-4">
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
        </ul> -->
    </div>
</footer>