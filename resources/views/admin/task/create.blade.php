@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <h3>Новая задача</h3>
            <form action="{{ route('admin.task.store', $order->id) }}" method="POST">
                @csrf
                    <input type="hidden" value="{{ $order->id }}" name="order_id" class="form-control">
                    <input type="hidden" value="2" name="status_id" class="form-control">
                <div class="row">
                    <div class="form-group">
                        <label>Название
                            <input type="text" value="{{ old('title') }}" name="title" class="form-control">
                        </label>
                        @error('title')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label>Исполнитель
                            <select name="user_id" class="form-control select2" style="width: 100%;">
                                @foreach($data['users'] as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </label>
                        @error('user_id')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Создать задачу">
                </div>
            </form>
            <div class="form-group">
                <label>Заказ
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
                                            <td>{{ $order->book->format->title }} ({{ $order->book->format->size }}
                                                )
                                            </td>
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
                                                <td class="d-block"><a
                                                        href="{{ asset('storage') . '/' . $file->path}}">{{ $file->path }}</a>
                                                </td>
                                            @endforeach
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </label>
                @error('order_id')
                <div class="text-danger">{{$message}}</div>
                @enderror
            </div>
        </section>
    </div>
@endsection
