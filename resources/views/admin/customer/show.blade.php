@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="m-0">{{$customer->name}}</h1>
                        <a class="ml-3 text-success"
                           href="{{route('admin.customer.edit', $customer->id)}}">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.customer.index') }}">Заказчики</a></li>
                            <li class="breadcrumb-item active">{{ $customer->name }}</li>
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
                                        <th>ФИО</th>
                                        <td>{{$customer->name}}</td>
                                    <tr>
                                        <th>Телефон</th>
                                        <td>{{$customer->phone}}</td>
                                    </tr>
                                    <tr>
                                        <th>E-mail</th>
                                        <td>{{$customer->email}}</td>
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
