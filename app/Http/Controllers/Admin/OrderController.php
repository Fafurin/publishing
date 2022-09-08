<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Models\Book;
use App\Models\BooksFiles;
use App\Models\Customer;
use App\Models\Format;
use App\Models\Order;
use App\Models\OutputInformation;
use App\Models\Type;
use Illuminate\Support\Facades\Storage;

//class OrderController extends Controller
//{
//    public function index()
//    {
//        $orders = Order::orderBy('created_at', 'DESC')->get();
//        return view('admin.order.index', compact('orders'));
//    }
//
//    public function create()
//    {
//        $formats = Format::all();
//        return view('admin.order.create', compact('formats' ));
//    }
//
//    public function store(OrderRequest $request)
//    {
//
//        $data = $request->validated();
//
//        $customerData = [
//            'name' => $data['name'],
//            'phone' => $data['phone'],
//            'email' => $data['email']
//        ];
//        $customer = Customer::firstOrCreate($customerData);
//        unset($customerData);
//
//        $typeData = [
//            'title' => $data['type']
//        ];
//        $type = Type::firstOrCreate($typeData);
//        unset($typeData);
//
//        $bookData = [
//            'title' => $data['title'],
//            'customer_id' => $customer->id,
//            'type_id' => $type->id,
//            'format_id' => $data['format_id'],
//            'description' => $data['description'],
//        ];
//
//        $book = Book::firstOrCreate($bookData);
//        unset($bookData);
//
//        foreach ($data['files'] as $file)
//        {
//            $file = [
//                'book_id' => $book->id,
//                'path' => Storage::disk('public')->put('files/' . $book->id, $file)
//            ];
//            BooksFiles::firstOrCreate($file);
//        }
//
//        $bookOutputInformation = [
//            'book_id' => $book->id,
//            'isbn' => $data['isbn'],
//            'circulation' => $data['circulation'],
//        ];
//
//        OutputInformation::firstOrCreate($bookOutputInformation);
//        unset($bookOutputInformation);
//
//        $orderData = [
//            'number' => $data['order_number'],
//            'book_id' => $book->id,
//            'payment' => $data['payment'],
//            'deadline' => $data['deadline'],
//        ];
//
//        Order::firstOrCreate($orderData);
//        unset($orderData);
//
//
//
//        return redirect()->route('admin.order.index');
//
//    }
//
//
//    public function show(Order $order)
//    {
//        return view('admin.order.show', compact('order'));
//    }
//
//    public function edit(Order $order)
//    {
//        return view('admin.order.edit', compact('order'));
//    }
//
//    public function update(OrderRequest $request, Order $order)
//    {
//        $data = $request->validated();
//        $order->update($data);
//        return view('admin.order.show', compact('order'));
//    }
//
//    public function delete (Order $order)
//    {
//        $order->delete();
//        return redirect()->route('admin.order.index');
//    }
//}
