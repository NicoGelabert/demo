<x-app-layout>
    <form
        action="{{ route('password.email') }}"
        method="post"
        class="max-w-[400px] mx-auto p-6 pt-24"
    >
        @csrf

        <div class="title mb-8 ">
            <h3>{{ __('Enter your email') }}</h3>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')"/>

        <div class="mb-3">
            <x-input id="email" class="w-full account" type="email" name="email" :value="old('email')" required
            autofocus placeholder="{{ __('Your email address') }}"/>
        </div>
        <div class="grid grid-cols-5 gap-3 mb-3 items-center">
            <div class="col-span-3">
                <button
                    class="btn-primary w-full"
                >
                    {{ __('Reset password') }}
                </button>
            </div>
            <div class="col-span-2 w-full">
                <a
                    href="{{ route('login') }}"
                    class="btn-secondary"
                >
                    {{ __('Login') }}
                </a>
            </div>
        </div>
    </form>
</x-app-layout>
