<?php

namespace Marcostmunhoz\LaravelSeederExtended;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Marcostmunhoz\LaravelSeederExtended\Skeleton\SkeletonClass
 */
class LaravelSeederExtendedFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-seeder-extended';
    }
}
