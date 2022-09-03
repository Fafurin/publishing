@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <h3>Заказчики</h3>
                <div class="row">
                    <div class="mb-3">
                        <a href="{{route('admin.customer.create')}}" class="btn btn-block btn-primary">Новый заказчик</a>
                    </div>
                    <table class="table table-hover text-nowrap">
                        <thead>
                        <tr>
                            <th>Имя</th>
                            <th>Телефон</th>
                            <th>E-mail</th>
                            <th colspan="3">Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($customers as $customer)
                            <tr>
                                <td>{{ $customer->name }}</td>
                                <td>{{ $customer->phone }}</td>
                                <td>{{ $customer->email }}</td>
                                <td>
                                    <a href="{{route('admin.customer.show', $customer->id)}}">
                                        <i class="far fa-eye"></i>
                                    </a>
                                </td>
                                <td><a class="text-success"
                                       href="{{route('admin.customer.edit', $customer->id)}}">
                                        <i class="fas fa-pencil-alt"></i></a>
                                </td>
                                <td>
                                    <form action="{{route('admin.customer.delete', $customer->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="border-0 bg-transparent">
                                            <i class="fas fa-trash text-danger" role="button"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
@endsection
