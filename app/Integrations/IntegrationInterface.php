<?php

namespace App\Integrations;

interface IntegrationInterface
{
    public function __construct($settings);

    public function notify($type);
}
