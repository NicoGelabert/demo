<x-app-layout>
    <form
        action="{{ route('register') }}"
        method="post"
        class="max-w-[400px] mx-auto p-6 pt-24"
    >
        @csrf

        <div class="title mb-8 ">
            <h3>{{ __('Create an account')}}</h3>
        </div>
        
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')"/>

        <div class="mb-4">
            <x-input placeholder="{{ __('Your name')}}" type="text" name="name" :value="old('name')"  class="w-full account"/>
        </div>
        <div class="mb-4">
            <x-input placeholder="{{ __('Your email')}}" type="email" name="email" :value="old('email')" class="w-full account" />
        </div>
        <div class="mb-4">
            <x-input placeholder="{{ __('Password')}}" type="password" name="password" class="w-full account"/>
        </div>
        <div class="mb-4">
            <x-input placeholder="{{ __('Repeat password')}}" type="password" name="password_confirmation" class="w-full account"/>
        </div>

        <div class="grid grid-cols-5 gap-3 mb-3 items-center">
            <div class="col-span-3">
                <button
                    class="btn-primary w-full"
                >
                    {{ __('Sign up')}}
                </button>
            </div>
            <div class="col-span-2">
                <a
                    href="{{ route('login') }}"
                    class="btn-secondary w-full"
                >
                    {{ __('Login')}}
                </a>
            </div>
        </div>
    </form>
</x-app-layout>
