<x-app-layout>
    <div class="h-screen flex items-center">
        <div class="w-[400px] mx-auto text-center">
            <h2>We're sorry</h2>
            <p>Your order could not be completed</p>
            <hr class="my-8 h-px border-t-0 bg-transparent bg-gradient-to-r from-transparent via-neutral-500 to-transparent opacity-25 dark:opacity-100" />
            <p>{{$message ?? ''}}</p>            
        </div>
    </div>
</x-app-layout>
