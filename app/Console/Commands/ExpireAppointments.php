<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Carbon\Carbon;

class ExpireAppointments extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'expire:appointments';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Expire all unexpired appointments that have past dates';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('Ready to expire appointments');
        foreach (\App\appointment::where('expired',0)->get() as $appointment) {
            if (($appointment->aDate) < Carbon::today()){
                $appointment->patient->hasAppointment = 0;
                $appointment->patient->save();
                $appointment->expired = 1 ;
                $appointment->save();
            }      
        }
    }
}
