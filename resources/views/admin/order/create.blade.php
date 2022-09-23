@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <h3 class="text-center">Новый заказ</h3>
            <form action="{{ route('admin.order.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Название издания
                                <input type="text" value="{{ old('title') }}" name="title" class="form-control">
                            </label>
                            @error('title')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Вид издания
                                <select name="type_id" class="form-control select2" style="width: 100%;">
                                    @foreach($data['types'] as $type)
                                        <option value="{{ $type->id }}">{{ $type->title }}</option>
                                    @endforeach
                                </select>
                            </label>
                            @error('type_id')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <a class="btn btn-info mb-4" href="{{ route('admin.type.create') }}">Создать вид
                            издания</a>

                        <div class="form-group">
                            <label>Формат издания
                                <select name="format_id" class="form-control select2" style="width: 100%;">
                                    @foreach($data['formats'] as $format)
                                        <option value="{{ $format->id }}">{{ $format->title }} ({{ $format->size }})</option>
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
                                <input type="text" value="{{ old('order_number') }}" name="order_number"
                                       class="form-control">
                            </label>
                            @error('order_number')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Сроки
                                <input type="text" value="{{ old('deadline') }}" name="deadline" class="form-control">
                            </label>
                            @error('deadline')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>ISBN
                                <input type="text" value="{{ old('isbn') }}" name="isbn" class="form-control">
                            </label>
                            @error('isbn')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Тираж
                                <input type="number" value="{{ old('circulation') }}" name="circulation"
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
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>ФИО заказчика
                                <input type="text" value="{{ old('name') }}" name="name" class="form-control">
                            </label>
                            @error('name')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Телефон
                                <input type="text" value="{{ old('phone') }}" name="phone" class="form-control">
                            </label>
                            @error('phone')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>E-mail
                                <input type="email" value="{{ old('email') }}" name="email" class="form-control">
                            </label>
                            @error('email')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Комментарии к заказу
                        <textarea name="description" cols="120" rows="2" class="form-control">{{ old('description') }}</textarea>
                    </label>
                    @error('description')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Сохранить заказ">
                </div>
            </form>
        </section>
    </div>
@endsection
