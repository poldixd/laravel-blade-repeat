<?php

namespace poldixd\BladeRepeat\Tests;

use Illuminate\Foundation\Testing\Concerns\InteractsWithViews;
use Orchestra\Testbench\TestCase as BaseTestCase;
use poldixd\BladeRepeat\BladeRepeatServiceProvider;

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
