<?php

namespace App\Integrations;

use App\Models\Warning;
use GuzzleHttp\Client;

class HipchatIntegration implements IntegrationInterface
{
    /**
     * @var array
     */
    private $settings;

    public function __construct($settings)
    {
        $this->settings = $settings;
    }

    /**
     * @param Warning $warning
     */
    public function notify(Warning $warning)
    {
        $url = $this->settings->webhook_url;
        $payload = [
            'color' => 'red',
            'message_format' => 'html',
            'message' => $warning->getTitle() . ' <a href="' . route('account.monitors.index') . '">View my monitors</a>',
        ];

        $client = new Client();
        $client->post($url, ['json' => $payload]);
    }
}
