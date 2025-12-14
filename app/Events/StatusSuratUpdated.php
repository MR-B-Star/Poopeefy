<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class StatusSuratUpdated implements ShouldBroadcast
{
    public $id;
    public $status;

    public function __construct($id, $status)
    {
        $this->id = $id;
        $this->status = $status;
    }

    public function broadcastOn()
    {
        return new Channel('surat-status');
    }

    public function broadcastAs()
    {
        return 'surat.updated';
    }
}
