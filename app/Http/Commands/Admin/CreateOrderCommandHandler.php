<?php

namespace App\Http\Commands\Admin;

use App\Models\Order;

class CreateOrderCommandHandler implements CreateOrderCommandHandlerContract
{

    public function __construct(
        public CreateCustomerCommandHandlerContract $createCustomerHandler,
        public CreateBookCommandHandlerContract $createBookHandler
    )
    {
    }

    public function handle(array $data)
    {
        $customer = $this->createCustomerHandler->handle($data);
        $book = $this->createBookHandler->handle($data);

        $orderData = [
            'number' => $data['order_number'],
            'customer_id' => $customer->id,
            'book_id' => $book->id,
            'payment' => $data['payment'],
            'deadline' => $data['deadline'],
            'description' => $data['description'],
        ];

        Order::firstOrCreate($orderData);
        unset($orderData);
    }
}
