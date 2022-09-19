@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <h3 class="text-center">Новые заказы</h3>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-2 m-3">
                        <a href="{{route('admin.order.create')}}" class="btn btn-block btn-primary">Новый заказ</a>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>Название издания</th>
                                        <th>Вид издания</th>
                                        <th>Формат издания</th>
                                        <th>Заказчик</th>
                                        <th colspan="3">Действия</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($orders as $order)
                                        <tr>
                                            <td><a href="{{route('admin.order.show', $order->book->id)}}">{{ $order->book->title }}</a></td>

                                            <td>{{ $order->book->type->title }}</td>
                                            <td>{{ $order->book->format->title }}</td>
                                            <td><a href="{{route('admin.customer.show', $order->customer->id)}}">{{ $order->customer->name }}</a></td>
                                            <td>
                                                <a href="{{route('admin.order.show', $order->id)}}">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            </td>
                                            <td><a class="text-success"
                                                   href="{{route('admin.order.edit', $order->id)}}">
                                                    <i class="fas fa-pencil-alt"></i></a>
                                            </td>
                                            <td><a class="text-success"
                                                   href="{{route('admin.task.create', $order->id)}}">
                                                    <i class="fas fa-pencil-alt"></i></a>
                                            </td>
{{--                                            <td>--}}
{{--                                                <form action="{{route('admin.order.delete', $order->id)}}" method="POST">--}}
{{--                                                    @csrf--}}
{{--                                                    @method('DELETE')--}}
{{--                                                    <button type="submit" class="border-0 bg-transparent">--}}
{{--                                                        <i class="fas fa-trash text-danger" role="button"></i>--}}
{{--                                                    </button>--}}
{{--                                                </form>--}}
{{--                                            </td>--}}
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
            </div>
        </section>
    </div>
@endsection
