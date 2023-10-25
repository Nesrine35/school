<?php

namespace App\Listeners;

use App\Events\AdminEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

use Illuminate\Mail\Mailer;

class AdminListener implements ShouldQueue
{
    /**
     * Create the event listener.
     */
    public function __construct(private Mailer $mailer)
    {
       
    }

    /**
     * Handle the event.
     */
    public function handle(AdminEvent $event): void
    {
        //$this->mailer->send(new ContactMail($event->formation, $event->data));
    }
}
