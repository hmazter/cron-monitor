<?php

namespace App\Integrations;

use App\Models\Warning;

interface IntegrationInterface
{
    public function __construct($settings);

    /**
     * @param Warning $warning
     */
    public function notify(Warning $warning);
}
