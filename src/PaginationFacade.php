<?php

namespace Noking50\Pagination;

use Illuminate\Support\Facades\Facade;

/**
 * @see \App\Classes\Pagination\Pagination
 */
class PaginationFacade extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() {
        return 'pagination';
    }

}
