<?php

namespace App\Listeners;

use App\Events\UnavailablePeriodMarked;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class InformPatients
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
     * @param  UnavailablePeriodMarked  $event
     * @return void
     */
    public function handle(UnavailablePeriodMarked $event)
    {
        //
    }
}
