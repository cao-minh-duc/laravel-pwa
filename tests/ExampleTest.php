<?php

namespace CaoMinhDuc\LaravelPwa\Tests;

use Orchestra\Testbench\TestCase;
use CaoMinhDuc\LaravelPwa\LaravelPwaServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelPwaServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
