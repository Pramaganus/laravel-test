<?php

namespace App\Listeners;

use App\Events\OrderSubmitted;
use App\Mail\NewOrderEmail;
use Mail;

class SendNewOrderEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  OrderSubmitted  $event
     * @return void
     */
    public function handle(OrderSubmitted $event)
    {
        Mail::to('mikeislookingforajob@gmail.com')->send(
            new NewOrderEmail($event->order)
        );
    }
}
