@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <h3>Изменить заказ</h3>
            <form action="{{ route('admin.order.update', $order->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Название
                                <input type="text" value="{{ $order->book->title ?? old('title') }}" name="title"
                                       class="form-control">
                            </label>
                            @error('title')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Вид издания
                                <input type="text" value="{{ $order->book->type->title ?? old('type') }}" name="type"
                                       class="form-control">
                            </label>
                            @error('type')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Формат издания
                                <select name="format_id" class="form-control select2" style="width: 100%;">
                                    @foreach($formats as $format)
                                        <option value="{{ $format->id }}"
                                            {{ $format->id == $order->book->format_id ? 'selected' : ''}}>
                                            {{ $format->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </label>
                            @error('format_id')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <a class="btn btn-info mb-4" href="{{ route('admin.format.create') }}">Создать формат
                            издания</a>

                        <div class="form-group">
                            <label>Оплата
                                <select name="payment" class="form-control select2" style="width: 100%;">
                                    <option value="contract">Договор</option>
                                    <option value="receipt">Квитанция</option>
                                </select>
                            </label>
                            @error('payment')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Номер заказа
                                <input type="text" value="{{ $order->number ?? old('order_number') }}" name="order_number"
                                       class="form-control">
                            </label>
                            @error('order_number')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Сроки
                                <input type="text" value="{{ $order->deadline ?? old('deadline') }}" name="deadline" class="form-control">
                            </label>
                            @error('deadline')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>ISBN
                                <input type="text" value="{{ $order->book->outputInformation->isbn ?? old('isbn') }}" name="isbn" class="form-control">
                            </label>
                            @error('isbn')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Тираж
                                <input type="number" value="{{ $order->book->outputInformation->circulation ?? old('circulation') }}" name="circulation"
                                       class="form-control">
                            </label>
                            @error('circulation')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Загрузите файлы
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="files[]" multiple>
                                        <label class="custom-file-label">Выберите файлы</label>
                                    </div>
                                </div>
                            </label>
                            @error('main_image')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>ФИО заказчика
                                <input type="text" value="{{ $order->customer->name ?? old('name') }}" name="name" class="form-control">
                            </label>
                            @error('name')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Телефон
                                <input type="text" value="{{ $order->customer->phone ?? old('phone') }}" name="phone" class="form-control">
                            </label>
                            @error('phone')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>E-mail
                                <input type="email" value="{{ $order->customer->email ?? old('email') }}" name="email" class="form-control">
                            </label>
                            @error('email')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Комментарии к заказу
                        <textarea name="description" cols="120" rows="2" class="form-control">{{ $order->description ?? old('description') }}</textarea>
                    </label>
                    @error('description')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Изменить заказ">
                </div>
            </form>
        </section>
    </div>
@endsection
