<?php

namespace ElegantTechnologies\Grok\Facades;

use Illuminate\Support\Facades\Facade;

class Grok extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'grok';
    }
}
