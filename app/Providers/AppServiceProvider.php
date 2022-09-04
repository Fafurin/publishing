<?php

namespace App\Providers;

use App\Http\Commands\Admin\Customer\CreateCustomerCommandHandler;
use App\Http\Commands\Admin\Customer\CreateCustomerCommandHandlerContract;
use App\Http\Handlers\Admin\Customer\DeleteHandler;
use App\Http\Handlers\Admin\Customer\DeleteHandlerContract;
use App\Http\Handlers\Admin\Customer\ListHandler;
use App\Http\Handlers\Admin\Customer\ListHandlerContract;
use App\Http\Handlers\Admin\Customer\ShowHandler;
use App\Http\Handlers\Admin\Customer\ShowHandlerContract;
use App\Http\Handlers\Admin\Customer\StoreHandler;
use App\Http\Handlers\Admin\Customer\StoreHandlerContract;
use App\Http\Handlers\Admin\Customer\UpdateHandler;
use App\Http\Handlers\Admin\Customer\UpdateHandlerContract;
use App\Http\Repositories\Admin\CustomerRepository;
use App\Http\Repositories\Admin\CustomerRepositoryContract;
use App\Models\Customer;
use App\Observers\Admin\CustomerObserver;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ListHandlerContract::class, ListHandler::class);
        $this->app->bind(StoreHandlerContract::class, StoreHandler::class);
        $this->app->bind(CreateCustomerCommandHandlerContract::class, CreateCustomerCommandHandler::class);
        $this->app->bind(UpdateHandlerContract::class, UpdateHandler::class);
        $this->app->bind(DeleteHandlerContract::class, DeleteHandler::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        Customer::observe(CustomerObserver::class);
    }
}
