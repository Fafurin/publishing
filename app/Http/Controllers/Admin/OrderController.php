<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Models\Book;
use App\Models\Customer;
use App\Models\Format;
use App\Models\Order;
use App\Models\OutputInformation;
use App\Models\Type;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('admin.order.index', compact('orders'));
    }

    public function create()
    {
        $formats = Format::all();
        $types = Type::all();
        return view('admin.order.create', compact('formats', 'types'));
    }

    public function store(OrderRequest $request)
    {
        $data = $request->validated();
        $customerData = [
            'name' => $data['name'],
            'phone' => $data['phone'],
            'email' => $data['email']
        ];

        $customer = Customer::firstOrCreate($customerData);
        unset($customerData);

        $bookData = [
            'title' => $data['title'],
            'customer_id' => $customer->id,
            'type_id' => $data['type_id'],
            'format_id' => $data['format_id'],
            'description' => $data['description'],
        ];

        $book = Book::firstOrCreate($bookData);
        unset($bookData);

        $bookOutputInformation = [
            'book_id' => $book->id,
            'isbn' => $data['isbn'],
            'circulation' => $data['circulation'],
        ];

        OutputInformation::firstOrCreate($bookOutputInformation);
        unset($bookOutputInformation);

        $orderData = [
            'number' => $data['order_number'],
            'book_id' => $book->id,
            'payment' => $data['payment'],
            'deadline' => $data['deadline'],
        ];

        Order::firstOrCreate($orderData);
        unset($orderData);

        return redirect()->route('admin.order.index');

    }
}
