<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Customer;
use App\Models\Format;
use App\Models\Order;
use App\Models\Type;

class MainController extends Controller
{
    public function index()
    {
        $data = [];
        $data['ordersCount'] = Order::all()->count();
        $data['customersCount'] = Customer::all()->count();
        $data['booksCount'] = Book::all()->count();
        $data['typesCount'] = Type::all()->count();
        $data['formatsCount'] = Format::all()->count();
        return view('admin.main.index', compact('data'));
    }
}
