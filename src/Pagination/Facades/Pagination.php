<?php

namespace Noking50\Pagination\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see Noking50\Pagination\Pagination
 */
class Pagination extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() {
        return 'pagination';
    }

}
