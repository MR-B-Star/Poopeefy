<?php

namespace App\Events;

use App\Models\Surat;
use Illuminate\Broadcasting\Channel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class SuratDisetujui implements ShouldBroadcast
{
    public $surat;

    public function __construct(Surat $surat)
    {
        $this->surat = $surat;
    }

    public function broadcastOn()
    {
        return new Channel('surat-status');
    }

    public function broadcastAs()
    {
        return 'surat.disetujui';
    }
}
