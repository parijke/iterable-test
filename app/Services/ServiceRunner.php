<?php

namespace App\Services;

use Illuminate\Container\Attributes\Tag;


class ServiceRunner
{
    public function __construct(
        #[Tag('reports')] protected iterable $reports,
    )
    {

    }

    public function run(): void
    {
        foreach ($this->reports as $report) {
            $report->run();
        }
    }

}
