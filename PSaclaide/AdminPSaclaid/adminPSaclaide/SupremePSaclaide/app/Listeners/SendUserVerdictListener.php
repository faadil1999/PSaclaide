<?php

namespace App\Listeners;

use App\Mail\BanMail;
use App\Events\BannUserEvent;
use App\Events\RestoreUserEvent;
use App\Mail\RestoreMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendUserVerdictListener
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
     * @param  \App\Events\BannUserEvent  $event
     * @return void
     */
    public function handle()
    {
        //
    }

    public function banUser(BannUserEvent $event)
    {
       
        Mail::to($event->mail_user)->send(new BanMail($event->name_user));
    }

    public function restoreUser(RestoreUserEvent $event)
    {
        Mail::to($event->mail_user)->send(new RestoreMail($event->name_user));
    }

}
