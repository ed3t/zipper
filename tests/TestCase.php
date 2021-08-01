<?php

namespace Usefulsomebody\PhpZipper\Tests;

use Usefulsomebody\PhpZipper\PhpZipperServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();
    }

    /**
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            PhpZipperServiceProvider::class,
        ];
    }
}
