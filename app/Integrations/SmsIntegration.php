<?php

namespace App\Integrations;

use App\Models\Warning;
use App\Services\TwilioService;

class SmsIntegration implements IntegrationInterface
{
    /**
     * @var array
     */
    private $settings;

    /**
     * @var TwilioService
     */
    private $twilioService;

    public function __construct($settings)
    {
        $this->settings = $settings;
        $this->twilioService = new TwilioService();
    }

    /**
     * @param Warning $warning
     */
    public function notify(Warning $warning)
    {
        $recipient = $this->settings->recipient;
        $this->twilioService->sendSMS($recipient, $warning->getTitle());
    }
}
