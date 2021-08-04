<?php

namespace Usefulsomebody\Zipper\Tests;

use Usefulsomebody\Zipper\ZipperServiceProvider;
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
            ZipperServiceProvider::class,
        ];
    }
}
