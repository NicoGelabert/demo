<x-app-layout>
<x-confeti />
    <div class="h-screen flex items-center">
        <div class="w-[400px] mx-auto text-center">
            <h2>{{$customer->name}},</h2>
            <p>Your order has been completed!!</p>
            <p class="small font-bold">Your tracking code</p>
            <p>#00{{ $payment->id }}-{{ \Carbon\Carbon::parse($payment->created_at)->format('dm-Y') }}</p>
        </div>
    </div>
</x-app-layout>
