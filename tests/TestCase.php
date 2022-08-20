<?php

namespace poldixd\BladeRepeat\Tests;

use poldixd\BladeRepeat\BladeRepeatServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;
use Illuminate\Foundation\Testing\Concerns\InteractsWithViews;

class TestCase extends BaseTestCase
{
    use InteractsWithViews;

    protected function getPackageProviders($app): array
    {
        return [
            BladeRepeatServiceProvider::class,
        ];
    }
}