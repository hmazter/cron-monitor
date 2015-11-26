<?php

namespace App\Console\Commands;

use App\Models\Monitor;
use Carbon\Carbon;
use Illuminate\Console\Command;

class CheckLateMonitors extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'monitor:check';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check if any monitors is running late';

    /**
     * Create a new command instance.
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
        $monitors = Monitor::select('*')
            ->selectRaw('DATE_ADD(pinged_at, INTERVAL allowed_runtime SECOND) as end_time')
            ->where('state', Monitor::STATE_RUNNING)
            ->having('end_time', '<', new Carbon())
            ->get();

        /** @var Monitor $monitor */
        foreach ($monitors as $monitor) {
            $monitor->warnings()->create(['type' => Monitor::STATE_LATE]);
            $monitor->state = Monitor::STATE_LATE;
            $monitor->save();
        }
    }
}
