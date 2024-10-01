<?php

namespace App\Http\Controllers;

use App\Services\ServiceRunner;

class Controller
{
    public function __construct(
        private ServiceRunner $serviceRunner
    )
    {
    }

    public function test(): void
    {
        $this->serviceRunner->run();
    }
}
