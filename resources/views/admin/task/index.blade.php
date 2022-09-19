@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <h3 class="text-center">Задачи</h3>
{{--        <div class="row">--}}
{{--            <div class="col-2 m-3">--}}
{{--                <a href="{{route('admin.task.create')}}" class="btn btn-block btn-primary">Новая задача</a>--}}
{{--            </div>--}}
{{--        </div>--}}
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>Название задачи</th>
                                        <th>Исполнитель</th>
                                        <th>Название издания</th>
                                        <th>Номер заказа</th>
                                        <th colspan="2">Действия</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($tasks as $task)
                                        <tr>
                                            <td>{{ $task->title }}</a></td>
                                            <td>{{ $task->user->name }}</td>
                                            <td>{{ $task->order->book->title }}</td>
                                            <td>{{ $task->order->number }}</td>
                                            <td>
                                                <a href="{{ route('admin.task.show', $task->id) }}">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                            </td>
                                            <td><a class="text-success"
                                                   href="{{route('admin.task.edit', $task->id)}}">
                                                    <i class="fas fa-pencil-alt"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
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
