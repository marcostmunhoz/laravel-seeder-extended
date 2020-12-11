<?php

namespace MarcosTMunhoz\LaravelSeederExtended\Tests;

use MarcosTMunhoz\LaravelSeederExtended\LaravelSeederExtendedServiceProvider;
use Orchestra\Testbench\TestCase;

class MakeSeederCommandTest extends TestCase
{
    public function test_it_creates_a_new_seeder_class()
    {
        $path = database_path('seeders/TestSeeder.php');

        $this->artisan('seeder:make TestSeeder')
            ->assertExitCode(0)
            ->execute();

        $this->assertFileExists($path);
    }

    protected function getPackageProviders($app)
    {
        return [LaravelSeederExtendedServiceProvider::class];
    }

    protected function parseTestMethodAnnotations($app, string $name): void
    {
        parent::parseTestMethodAnnotations($app, $name);
    }
}
