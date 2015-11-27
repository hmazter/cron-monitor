<?php

namespace App\Services;

class TwilioService
{
    /**
     * @var \Services_Twilio
     */
    private $client;

    /**
     * @var string
     */
    private $from;

    /**
     * TwilioService constructor.
     */
    public function __construct()
    {
        $this->client = new \Services_Twilio(
            config('services.twilio.account_sid'),
            config('services.twilio.auth_token')
        );

        $this->from = config('services.twilio.sender_number');
    }

    /**
     * @param string $recipient
     * @param string $message
     */
    public function sendSMS($recipient, $message)
    {
        $this->client->account->messages->sendMessage(
            $this->from,
            $recipient,
            $message
        );
    }
}