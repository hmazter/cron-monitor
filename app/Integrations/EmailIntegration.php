<?php

namespace App\Integrations;

use App\Models\Warning;
use Illuminate\Mail\Message;

class EmailIntegration implements IntegrationInterface
{
    private $settings;

    public function __construct($settings)
    {
        $this->settings = $settings;
    }

    /**
     * Notify user by Email about failed monitor task
     *
     * @param Warning $warning
     */
    public function notify($warning)
    {
        \Mail::send(
            'emails.notify',
            ['title' => $warning->getTitle(), 'text' => $warning->getMessage()],
            function (Message $message) use ($warning) {
                $message
                    ->to($this->settings->email)
                    ->subject("[{$warning->monitor->name}] Warning, task has failed!");
            }
        );
    }
}
