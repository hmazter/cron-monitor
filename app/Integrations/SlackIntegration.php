<?php

namespace App\Integrations;

use App\Models\Warning;
use GuzzleHttp\Client;

class SlackIntegration implements IntegrationInterface
{
    /**
     * @var array
     */
    private $settings;

    public function __construct($settings) {
        $this->settings = $settings;
    }
    /**
     * @param Warning $warning
     */
    public function notify(Warning $warning)
    {
        $url = $this->settings->webhook_url;
        $payload = [
            'username' => 'CronMonitor',
            'text' => $warning->getTitle(),
        ];

        $client = new Client();
        $client->post($url, ['json' => $payload]);
    }
}
