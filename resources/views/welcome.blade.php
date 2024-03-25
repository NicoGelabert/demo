<?php
    /** @var \Illuminate\Database\Eloquent\Collection $products */
    ?>
    <x-app-layout>
        <div class="flex flex-col md:flex-row items-center relative h-screen">
            <div class="w-full md:w-3/5 relative isolate px-6 pt-24 pb-3 md:pt-0 md:pb-0 lg:px-8 slide-in-left">
                <div class="flex mb-4 justify-start">
                    <div class="relative rounded-full sm:px-3 py-1 text-xs lg:text-sm leading-6 text-gray-600 sm:ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                    {{__('Site design and developed by')}} Nicolás Gelabert 
                        <a href="/" class="font-semibold">
                            <span class="absolute inset-0" aria-hidden="true"></span>{{__('Back to CV')}} <span aria-hidden="true">&rarr;</span>
                        </a>
                    </div>
                </div>
                <div class="text-left">
                    <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">E-Commerce demo</h1>
                    <p class="mt-2 text-lg leading-8 text-gray-600">{{__('E-commerce site developed with Laravel, Vue JS and Tailwind.')}}</p>
                    <div class="flex gap-3 my-6 md:justify-start">
                        <div class="">
                            <button
                                class="btn-primary w-full"
                            >
                            {{ __('Login')}}
                            </button>
                        </div>
                        <div class="">
                            <a href="{{ route('register') }}" class="anchor-btn">{{__('Register now')}}<span aria-hidden="true">→</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="md:w-2/5 pr-16 scale-in-center my-6">
                <img src="{{ asset('storage/images/camera-home.png') }}" alt="" >
            </div>
        </div>

        <x-promo-welcome />

        <div id="image-carousel" class="splide my-16 md:mx-16" aria-label="Latest products">
            <div class="mb-8 text-center">
                <h2 class="text-2xl font-bold text-3xl">{{__('Latest products')}}
            </div>
            <div class="splide__track mx-8">
                <ul class="splide__list">
                    @foreach($products as $product)
                    <li class="splide__slide border-transparent overflow-hidden rounded-lg bg-white">
                        <a href="{{ route('product.view', [$product->category?->slug, $product->slug ]) }}"
                        class="aspect-w-3 aspect-h-2 block">
                            <img src="{{ $product->image }}" alt="{{$product->title}}"
                            class="card-image object-cover hover:scale-105 hover:rotate-1 transition-transform">
                            <div class="p-4 card-listing">
                                <div>
                                    <h3 class="underline-hover w-fit">
                                        {{$product->title}}
                                    </h3>
                                </div>
                                <div class="price-container relative flex justify-between">
                                    <h5 class="font-number pl-4 text-lg md:text-xl lg:text-2xl">${{$product->price}}</h5>
                                </div>
                            </div>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        
        <hr class="mt-24 h-px border-t-0 bg-transparent bg-gradient-to-r from-transparent via-neutral-500 to-transparent opacity-25 dark:opacity-100" />

        <x-newsletter />
        
    </x-app-layout>