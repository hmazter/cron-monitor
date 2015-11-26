<?php

namespace App\Console\Commands;

use App\Models\Warning;
use Carbon\Carbon;
use Illuminate\Console\Command;

class SendWarnings extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'monitor:warnings';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send all unsent warnings';

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
        $warnings = Warning::getUnsent();

        $this->info("Found " . count($warnings) . " unsent warnings");

        /** @var Warning $warning */
        foreach ($warnings as $warning) {
            $warning->monitor->notify($warning);
            $warning->sent_at = new Carbon();
            $warning->save();
        }
    }
}
