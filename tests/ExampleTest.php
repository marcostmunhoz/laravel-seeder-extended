<?php

namespace Marcostmunhoz\LaravelSeederExtended\Tests;

use Orchestra\Testbench\TestCase;
use Marcostmunhoz\LaravelSeederExtended\LaravelSeederExtendedServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelSeederExtendedServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
