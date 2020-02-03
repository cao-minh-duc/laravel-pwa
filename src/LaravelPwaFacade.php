<?php

namespace CaoMinhDuc\LaravelPwa;

use Illuminate\Support\Facades\Facade;

/**
 * @see \CaoMinhDuc\LaravelPwa\Skeleton\SkeletonClass
 */
class LaravelPwaFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-pwa';
    }
}
