<?php

namespace RamaID\UrbanParakeet\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \RamaID\UrbanParakeet\UrbanParakeet
 */
class UrbanParakeet extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \RamaID\UrbanParakeet\UrbanParakeet::class;
    }
}
