<?php

namespace App\Services;

class TwilioService
{
    /**
     * @var string
     */
    private $sid;

    /**
     * @var string
     */
    private $auth;

    /**
     * TwilioService constructor.
     */
    public function __construct()
    {
        $this->sid = config('services.twilio.account_sid');
        $this->auth = config('services.twilio.auth_token');
    }

    /**
     * Send a SMS
     *
     * @param string $recipient
     * @param string $message
     */
    public function sendSMS($recipient, $message)
    {
        $client = new \Services_Twilio($this->sid, $this->auth);
        $client->account->messages->sendMessage(
            config('services.twilio.sender_number'),
            $recipient,
            $message
        );
    }

    /**
     * Do a lookup and format a number correctly for the supplied country
     *
     * @param string $number    number to check
     * @param string $country   country
     * @return string       re-format number
     */
    public function numberLookUp($number, $country)
    {
        $client = new \Lookups_Services_Twilio($this->sid, $this->auth);
        $response = $client->phone_numbers->get($number, array("CountryCode" => $country));
        return $response->phone_number;
    }
}
