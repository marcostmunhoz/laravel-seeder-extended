<?php

namespace MarcosTMunhoz\LaravelSeederExtended\Seeders;

use Illuminate\Database\Seeder;

abstract class AbstractSeeder extends Seeder
{
    /**
     * Runs the seeder.
     *
     * @return void
     */
    abstract public function seed();
}
