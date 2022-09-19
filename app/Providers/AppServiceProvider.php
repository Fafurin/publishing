<?php

namespace App\Providers;

use App\Models\Customer;
use App\Models\Format;
use App\Models\Order;
use App\Models\Position;
use App\Models\Role;
use App\Models\Type;
use App\Models\User;
use App\Observers\Admin\CustomerObserver;
use App\Observers\Admin\FormatObserver;
use App\Observers\Admin\OrderObserver;
use App\Observers\Admin\PositionObserver;
use App\Observers\Admin\RoleObserver;
use App\Observers\Admin\TypeObserver;
use App\Observers\Admin\UserObserver;
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

        $this->app->bind(\App\Http\Handlers\Admin\User\CreateHandlerContract::class,
                         \App\Http\Handlers\Admin\User\CreateHandler::class);
        $this->app->bind(\App\Http\Handlers\Admin\User\ListHandlerContract::class,
                         \App\Http\Handlers\Admin\User\ListHandler::class);
        $this->app->bind(\App\Http\Handlers\Admin\User\StoreHandlerContract::class,
                         \App\Http\Handlers\Admin\User\StoreHandler::class);
        $this->app->bind(\App\Http\Commands\Admin\User\CreateUserCommandHandlerContract::class,
                         \App\Http\Commands\Admin\User\CreateUserCommandHandler::class);
        $this->app->bind(\App\Http\Handlers\Admin\User\UpdateHandlerContract::class,
                          \App\Http\Handlers\Admin\User\UpdateHandler::class);
        $this->app->bind(\App\Http\Handlers\Admin\User\DeleteHandlerContract::class,
                          \App\Http\Handlers\Admin\User\DeleteHandler::class);
        $this->app->bind(\App\Http\Commands\Admin\User\CreateProfileCommandHandlerContract::class,
            \App\Http\Commands\Admin\User\CreateProfileCommandHandler::class);

        $this->app->bind(\App\Http\Handlers\Admin\User\Position\ListHandlerContract::class,
                         \App\Http\Handlers\Admin\User\Position\ListHandler::class);
        $this->app->bind(\App\Http\Handlers\Admin\User\Position\StoreHandlerContract::class,
                         \App\Http\Handlers\Admin\User\Position\StoreHandler::class);
        $this->app->bind(\App\Http\Commands\Admin\User\CreatePositionCommandHandlerContract::class,
                         \App\Http\Commands\Admin\User\CreatePositionCommandHandler::class);
        $this->app->bind(\App\Http\Handlers\Admin\User\Position\UpdateHandlerContract::class,
                         \App\Http\Handlers\Admin\User\Position\UpdateHandler::class);
        $this->app->bind(\App\Http\Handlers\Admin\User\Position\DeleteHandlerContract::class,
                         \App\Http\Handlers\Admin\User\Position\DeleteHandler::class);

        $this->app->bind(\App\Http\Handlers\Admin\User\Role\ListHandlerContract::class,
                         \App\Http\Handlers\Admin\User\Role\ListHandler::class);
        $this->app->bind(\App\Http\Handlers\Admin\User\Role\StoreHandlerContract::class,
                         \App\Http\Handlers\Admin\User\Role\StoreHandler::class);
        $this->app->bind(\App\Http\Commands\Admin\User\CreateRoleCommandHandlerContract::class,
                         \App\Http\Commands\Admin\User\CreateRoleCommandHandler::class);
        $this->app->bind(\App\Http\Handlers\Admin\User\Role\UpdateHandlerContract::class,
                         \App\Http\Handlers\Admin\User\Role\UpdateHandler::class);
        $this->app->bind(\App\Http\Handlers\Admin\User\Role\DeleteHandlerContract::class,
                         \App\Http\Handlers\Admin\User\Role\DeleteHandler::class);

        $this->app->bind(\App\Http\Handlers\Admin\Task\ListHandlerContract::class,
            \App\Http\Handlers\Admin\Task\ListHandler::class);
        $this->app->bind(\App\Http\Handlers\Admin\Task\StoreHandlerContract::class,
            \App\Http\Handlers\Admin\Task\StoreHandler::class);
        $this->app->bind(\App\Http\Commands\Admin\CreateTaskCommandHandlerContract::class,
            \App\Http\Commands\Admin\CreateTaskCommandHandler::class);
        $this->app->bind(\App\Http\Handlers\Admin\Task\UpdateHandlerContract::class,
            \App\Http\Handlers\Admin\Task\UpdateHandler::class);
        $this->app->bind(\App\Http\Handlers\Admin\Task\DeleteHandlerContract::class,
            \App\Http\Handlers\Admin\Task\DeleteHandler::class);
        $this->app->bind(\App\Http\Handlers\Admin\Task\CreateHandlerContract::class,
            \App\Http\Handlers\Admin\Task\CreateHandler::class);
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
        Position::observe(PositionObserver::class);
        Role::observe(RoleObserver::class);
        User::observe(UserObserver::class);
    }
}
