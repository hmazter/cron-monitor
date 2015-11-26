<?php

namespace App\Integrations;

interface IntegrationInterface
{
    public function __construct($settings);

    /**
     * @param \App\Models\Warning $warning
     */
    public function notify($warning);
}
