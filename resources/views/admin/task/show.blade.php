@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="m-0">{{ $task->title }}</h1>
                        <a class="ml-3 text-success"
                           href="{{ route('admin.task.edit', $task->id) }}">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
{{--                        <form action="{{ route('admin.task.delete', $task->id) }}" method="POST">--}}
{{--                            @csrf--}}
{{--                            @method('DELETE')--}}
{{--                            <button type="submit" class="border-0 bg-transparent">--}}
{{--                                <i class="fas fa-trash text-danger" role="button"></i>--}}
{{--                            </button>--}}
{{--                        </form>--}}
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.task.index') }}">Задачи</a></li>
                            <li class="breadcrumb-item active">{{ $task->title }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <tbody>
                                    <tr>
                                        <th>Задача</th>
                                        <td>{{ $task->title }}</td>
                                    </tr>
                                    <tr>
                                        <th>Исполнитель</th>
                                        <td>{{ $task->user->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Название издания</th>
                                        <td>{{ $task->order->book->title }}</td>
                                    </tr>
                                    <tr>
                                        <th>Формат издания</th>
                                        <td>{{ $task->order->book->format->title }} ({{ $task->order->book->format->size }})</td>
                                    </tr>
                                    <tr>
                                        <th>Вид издания</th>
                                        <td>{{ $task->order->book->type->title }}</td>
                                    </tr>
                                    <tr>
                                        <th>Номер заказа</th>
                                        <td>{{ $task->order->number }}</td>
                                    </tr>
                                    <tr>
                                        <th>Оплата</th>
                                        <td>{{ $task->order->payment }}</td>
                                    </tr>
                                    <tr>
                                        <th>Статус заказа</th>
                                        <td>{{ $task->order->status->title }}</td>
                                    </tr>
                                    <tr>
                                        <th>Сроки</th>
                                        <td>{{ $task->order->deadline }}</td>
                                    </tr>
                                    <tr>
                                        <th>ISBN</th>
                                        <td>{{ $task->order->book->outputInformation->isbn }}</td>
                                    </tr>
                                    <tr>
                                        <th>Тираж</th>
                                        <td>{{ $task->order->book->outputInformation->circulation }}</td>
                                    </tr>
                                    <tr>
                                        <th>Комментарии к заказу</th>
                                        <td>{{ $task->order->description }}</td>
                                    </tr>
                                    <tr>
                                        <th>Файлы</th>
                                        @foreach($task->order->book->booksFiles as $file)
                                            <td class="d-block" ><a href="{{ asset('storage') . '/' . $file->path}}">{{ $file->path }}</a></td>
                                        @endforeach
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <tbody>
                                    <tr>
                                        <th>Заказчик</th>
                                        <td>
                                            <a href="{{route('admin.customer.show', $task->order->customer->id)}}">{{ $task->order->customer->name }}</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Телефон</th>
                                        <td>{{ $task->order->customer->phone }}</td>
                                    </tr>
                                    <tr>
                                        <th>E-mail</th>
                                        <td>{{ $task->order->customer->email }}</td>
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
