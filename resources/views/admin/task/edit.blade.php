@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <h3>Изменить задачу</h3>
            <form action="{{ route('admin.task.update', $task->id) }}" method="POST">
                @csrf
                @method('patch')
                <div class="row">
                    <div class="form-group">
                        <label>Название
                            <input type="text" value="{{ $task->title ?? old('title') }}" name="title" class="form-control">
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
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}"
                                    {{ $user->id == $task->user_id ? 'selected' : '' }}>
                                        {{ $user->name }}
                                    </option>
                                @endforeach
                            </select>
                        </label>
                        @error('user_id')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <label>Заказ
                            <select name="order_id" class="form-control select2" style="width: 100%;">
                                @foreach($orders as $order)
                                    <option value="{{ $order->id }}"
                                    {{ $order->id == $task->order_id ? 'selected' : '' }}>
                                        {{ $order->book->title }}
                                    </option>
                                @endforeach
                            </select>
                        </label>
                        @error('order_id')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Изменить задачу">
                </div>
            </form>
        </section>
    </div>
@endsection
