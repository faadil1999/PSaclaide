<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class RestoreUserEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $mail_user;
    public $name_user;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(String $mail , String $name)
    {
        //
        $this->mail_user = $mail;
        $this->name_user = $name;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
