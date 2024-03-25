<?php

namespace App\Listeners;

use App\Events\SubscriptionCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscriptionConfirmation;

class SendSubscriptionConfirmation implements ShouldQueue
{
    use InteractsWithQueue;

    public function handle(SubscriptionCreated $event)
    {
        Mail::to($event->subscription->email)
            ->send(new SubscriptionConfirmation($event->subscription));
    }
}
