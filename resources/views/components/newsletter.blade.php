<div class="subscribe relative overflow-hidden py-16 sm:py-24 lg:py-32 -mx-5">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="flex flex-col gap-16 md:flex-row">
            <div class="w-full md:w-1/2 ">
                <h2 class="text-3xl font-bold tracking-tight sm:text-4xl">{{__('Subscribe to our newsletter.')}}</h2>
                <p class="mt-4 text-lg leading-8 text-gray-400">Nostrud amet eu ullamco nisi aute in ad minim nostrud adipisicing velit quis. Duis tempor incididunt dolore.</p>
                <div class="mt-6 flex flex-col sm:flex-row w-full gap-4">
                    <form id="subscriptionForm" action="{{ route('subscribe.store') }}" method="post" class="flex gap-2 w-full">
                        @csrf
                        <input id="emailInput" type="email" name="email" placeholder="Enter your email" required class="account w-full">
                        <button id="subscribeBtn" type="submit" class="btn-primary">{{__('Subscribe')}}</button>
                    </form>
                    <div id="successMessage" style="display: none;">
                        {{__('Subscription successful!')}}
                    </div>
                    <div id="errorMessage" style="display: none;">
                        Subscription failed. Please try again.
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/2 grid grid-cols-1 gap-x-8 gap-y-10 sm:grid-cols-2 lg:pt-2">
                <div class="flex flex-col items-start">
                    <div class="flex gap-4 items-center">
                        <div class="rounded-md bg-black/5 p-2 ring-1 ring-black/10">
                            <svg class="h-6 w-6 " fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                            </svg>
                        </div>
                        <dt class="font-semibold ">{{__('Weekly articles')}}</dt>
                    </div>
                    <dd class="mt-2 leading-7 text-gray-500">Non laboris consequat cupidatat laborum magna. Eiusmod non irure cupidatat duis commodo amet.</dd>
                </div>
                <div class="flex flex-col items-start">
                    <div class="flex gap-4 items-center">
                        <div class="rounded-md bg-black/5 p-2 ring-1 ring-black/10">
                            <svg class="h-6 w-6 " fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.05 4.575a1.575 1.575 0 10-3.15 0v3m3.15-3v-1.5a1.575 1.575 0 013.15 0v1.5m-3.15 0l.075 5.925m3.075.75V4.575m0 0a1.575 1.575 0 013.15 0V15M6.9 7.575a1.575 1.575 0 10-3.15 0v8.175a6.75 6.75 0 006.75 6.75h2.018a5.25 5.25 0 003.712-1.538l1.732-1.732a5.25 5.25 0 001.538-3.712l.003-2.024a.668.668 0 01.198-.471 1.575 1.575 0 10-2.228-2.228 3.818 3.818 0 00-1.12 2.687M6.9 7.575V12m6.27 4.318A4.49 4.49 0 0116.35 15m.002 0h-.002" />
                            </svg>
                        </div>
                        <dt class="font-semibold ">{{__('No spam')}}</dt>
                    </div>
                    <dd class="mt-2 leading-7 text-gray-500">Officia excepteur ullamco ut sint duis proident non adipisicing. Voluptate incididunt anim.</dd>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('subscriptionForm');
        const successMessage = document.getElementById('successMessage');
        const errorMessage = document.getElementById('errorMessage');

        form.addEventListener('submit', async function(event) {
            event.preventDefault(); // Prevent default form submission behavior

            const email = document.getElementById('emailInput').value;
            try {
                const response = await fetch('{{ route("subscribe.store") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ email })
                });

                const data = await response.json();
                if (response.ok) {
                    successMessage.style.display = 'block';
                    form.style.display = 'none';
                } else {
                    errorMessage.style.display = 'block';
                }
            } catch (error) {
                errorMessage.style.display = 'block';
            }
        });
    });
</script>