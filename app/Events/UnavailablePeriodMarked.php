<?php

namespace App\Events;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\unavailablePeriodsCancelledAppointment;

class UnavailablePeriodMarked extends Event implements ShouldBroadcast
{   
    public $details;
    use SerializesModels;
    

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(unavailablePeriodsCancelledAppointment $details)
    {
        $this->details = $details;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return ['appointmentCancelled'];
    }

    public function broadcastWith()
    {
        return [
            'details' => [
                'patient_id' => $this->details->patient_id,
                'message' => $this->details->message
            ]
        ];
    }

}
