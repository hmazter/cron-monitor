<?php

namespace App\Integrations;

class EmailIntegration implements IntegrationInterface
{
    private $settings;

    public function __construct($settings)
    {
        $this->settings = $settings;
    }

    /**
     * Notify customer by Email about failed monitor
     *
     * @param int $type
     */
    public function notify($type)
    {
        dd("Notify customer by email about failed ($type) monitor, with settings", $this->settings);

        //\Mail::send();
    }
}
