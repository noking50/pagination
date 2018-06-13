<?php

namespace Noking50\Pagination;

use Illuminate\Support\ServiceProvider;

class PaginationServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {
        $this->app->singleton('pagination', function () {
            return new Pagination();
        });
    }
    
    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides() {
        return ['pagination'];
    }

}
