<?php

namespace Zerp\Training\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Zerp\Training\Providers\TrainingServiceProvider;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [TrainingServiceProvider::class];
    }
}
