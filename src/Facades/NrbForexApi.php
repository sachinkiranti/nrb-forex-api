<?php

namespace SachinKiranti\NrbForexApi\Facades;

use Illuminate\Support\Facades\Facade;

class NrbForexApi extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'nrb-forex-api';
    }

}