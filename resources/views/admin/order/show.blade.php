@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="m-0">{{$order->book->title}}</h1>
                        <a class="ml-3 text-success"
                           href="{{route('admin.order.edit', $order->id)}}">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.order.index') }}">Заказы</a></li>
                            <li class="breadcrumb-item active">{{ $order->number }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <tbody>
                                    <tr>
                                        <th>Название издания</th>
                                        <td>{{ $order->book->title }}</td>
                                    </tr>
                                    <tr>
                                        <th>Номер заказа</th>
                                        <td>{{ $order->number }}</td>
                                    <tr>
                                        <th>Вид издания</th>
                                        <td>{{ $order->book->type->title }}</td>
                                    </tr>
                                    <tr>
                                        <th>Формат издания</th>
                                        <td>{{ $order->book->format->title }} ({{ $order->book->format->size }})</td>
                                    </tr>
                                    <tr>
                                        <th>Оплата</th>
                                        <td>{{ $order->payment }}</td>
                                    </tr>
                                    <tr>
                                        <th>Статус заказа</th>
                                        <td>{{ $order->status->title }}</td>
                                    </tr>
                                    <tr>
                                        <th>Сроки</th>
                                        <td>{{ $order->deadline }}</td>
                                    </tr>
                                    <tr>
                                        <th>ISBN</th>
                                        <td>{{ $order->book->outputInformation->isbn }}</td>
                                    </tr>
                                    <tr>
                                        <th>Тираж</th>
                                        <td>{{ $order->book->outputInformation->circulation }}</td>
                                    </tr>
                                    <tr>
                                        <th>Комментарии к заказу</th>
                                        <td>{{ $order->description }}</td>
                                    </tr>
                                    <tr>
                                        <th>Заказчик</th>
                                        <td>
                                            <a href="{{route('admin.customer.show', $order->customer->id)}}">{{ $order->customer->name }}</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Телефон</th>
                                        <td>{{ $order->customer->phone }}</td>
                                    </tr>
                                    <tr>
                                        <th>E-mail</th>
                                        <td>{{ $order->customer->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Файлы</th>
                                        @foreach($order->book->booksFiles as $file)
                                            <td class="d-block" ><a href="{{ asset('storage') . '/' . $file->path}}">{{ $file->path }}</a></td>
                                        @endforeach
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
