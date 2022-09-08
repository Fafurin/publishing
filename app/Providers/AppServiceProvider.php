<?php

namespace App\Providers;

use App\Models\Customer;
use App\Models\Format;
use App\Models\Order;
use App\Models\Type;
use App\Observers\Admin\CustomerObserver;
use App\Observers\Admin\FormatObserver;
use App\Observers\Admin\OrderObserver;
use App\Observers\Admin\TypeObserver;
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
        $this->app->bind(\App\Http\Handlers\Admin\Customer\ListHandlerContract::class,
                         \App\Http\Handlers\Admin\Customer\ListHandler::class);
        $this->app->bind(\App\Http\Handlers\Admin\Customer\UpdateHandlerContract::class,
                         \App\Http\Handlers\Admin\Customer\UpdateHandler::class);


        $this->app->bind(\App\Http\Handlers\Admin\Format\ListHandlerContract::class,
                         \App\Http\Handlers\Admin\Format\ListHandler::class);
        $this->app->bind(\App\Http\Handlers\Admin\Format\StoreHandlerContract::class,
                         \App\Http\Handlers\Admin\Format\StoreHandler::class);
        $this->app->bind(\App\Http\Commands\Admin\CreateFormatCommandHandlerContract::class,
                         \App\Http\Commands\Admin\CreateFormatCommandHandler::class);
        $this->app->bind(\App\Http\Handlers\Admin\Format\UpdateHandlerContract::class,
                         \App\Http\Handlers\Admin\Format\UpdateHandler::class);
        $this->app->bind(\App\Http\Handlers\Admin\Format\DeleteHandlerContract::class,
                         \App\Http\Handlers\Admin\Format\DeleteHandler::class);

        $this->app->bind(\App\Http\Handlers\Admin\Type\ListHandlerContract::class,
                         \App\Http\Handlers\Admin\Type\ListHandler::class);
        $this->app->bind(\App\Http\Handlers\Admin\Type\StoreHandlerContract::class,
                         \App\Http\Handlers\Admin\Type\StoreHandler::class);
        $this->app->bind(\App\Http\Commands\Admin\CreateTypeCommandHandlerContract::class,
                         \App\Http\Commands\Admin\CreateTypeCommandHandler::class);
        $this->app->bind(\App\Http\Handlers\Admin\Type\UpdateHandlerContract::class,
                         \App\Http\Handlers\Admin\Type\UpdateHandler::class);
        $this->app->bind(\App\Http\Handlers\Admin\Type\DeleteHandlerContract::class,
                         \App\Http\Handlers\Admin\Type\DeleteHandler::class);

        $this->app->bind(\App\Http\Handlers\Admin\Order\ListHandlerContract::class,
                         \App\Http\Handlers\Admin\Order\ListHandler::class);
        $this->app->bind(\App\Http\Handlers\Admin\Order\CreateHandlerContract::class,
                         \App\Http\Handlers\Admin\Order\CreateHandler::class);
        $this->app->bind(\App\Http\Handlers\Admin\Order\StoreHandlerContract::class,
                         \App\Http\Handlers\Admin\Order\StoreHandler::class);
        $this->app->bind(\App\Http\Commands\Admin\CreateOrderCommandHandlerContract::class,
                         \App\Http\Commands\Admin\CreateOrderCommandHandler::class);
        $this->app->bind(\App\Http\Commands\Admin\UpdateOrderCommandHandlerContract::class,
                         \App\Http\Commands\Admin\UpdateOrderCommandHandler::class);
        $this->app->bind(\App\Http\Commands\Admin\CreateBookCommandHandlerContract::class,
                         \App\Http\Commands\Admin\CreateBookCommandHandler::class);
        $this->app->bind(\App\Http\Commands\Admin\CreateCustomerCommandHandlerContract::class,
                         \App\Http\Commands\Admin\CreateCustomerCommandHandler::class);
        $this->app->bind(\App\Http\Handlers\Admin\Order\UpdateHandlerContract::class,
                         \App\Http\Handlers\Admin\Order\UpdateHandler::class);
        $this->app->bind(\App\Http\Handlers\Admin\Order\DeleteHandlerContract::class,
                         \App\Http\Handlers\Admin\Order\DeleteHandler::class);
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
        Format::observe(FormatObserver::class);
        Type::observe(TypeObserver::class);
        Order::observe(OrderObserver::class);
    }
}
