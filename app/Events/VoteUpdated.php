<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Queue\SerializesModels;

class VoteUpdated implements ShouldBroadcastNow
{
    use InteractsWithSockets, SerializesModels;

    public $candidateVotes;

    public function __construct($candidateVotes)
    {
        $this->candidateVotes = $candidateVotes; // Format: [candidateId => votes]
    }

    public function broadcastOn()
    {
        return new Channel('votes');
    }

    public function broadcastWith()
    {
        return [
            'candidateVotes' => $this->candidateVotes,
        ];
    }
}

