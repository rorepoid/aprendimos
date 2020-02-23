<?php

namespace App\Events;

use App\Concepts\Event;
use App\Concepts\Person;
use App\Concepts\Text;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class TextRead extends Event
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $person;
    public $text;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Person $person, Text $text)
    {
//        $this->person = $person;
        $this->text = $text;
        $this->text->markAsRead();
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
