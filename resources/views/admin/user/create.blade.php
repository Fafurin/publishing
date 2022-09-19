@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <h3>Новый сотрудник</h3>
            <form action="{{ route('admin.user.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>ФИО
                                <input type="text" value="{{ old('name') }}" name="name" class="form-control"
                                   placeholder="ФИО">
                                </label>
                            @error('name')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>E-mail
                                <input type="email" value="{{ old('email') }}" name="email" class="form-control"
                                   placeholder="E-mail">
                            </label>
                            @error('email')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Должность
                                <select name="position_id" class="form-control select2" style="width: 100%;">
                                    @foreach($data['positions'] as $position)
                                        <option value="{{ $position->id }}">{{ $position->title }}</option>
                                    @endforeach
                                </select>
                            </label>
                            @error('position_id')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <a class="btn btn-info mb-4" href="{{ route('admin.position.create') }}">Создать должность</a>

                        <div class="form-group">
                            <label>Роль
                                <select name="role_id" class="form-control select2" style="width: 100%;">
                                    @foreach($data['roles'] as $role)
                                        <option value="{{ $role->id }}">{{ $role->title }}</option>
                                    @endforeach
                                </select>
                            </label>
                            @error('role_id')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <a class="btn btn-info mb-4" href="{{ route('admin.role.create') }}">Создать роль</a>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Телефон
                                <input type="text" value="{{ old('phone') }}" name="phone" class="form-control"
                                   placeholder="Телефон">
                                </label>
                            @error('phone')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Дата рождения
                                <input type="date" value="{{ old('date_of_birth') }}" name="date_of_birth"
                                   class="form-control">
                                </label>
                            @error('date_of_birth')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Домашний адрес
                                <input type="text" value="{{ old('address') }}" name="address" class="form-control"
                                   placeholder="Домашний адрес">
                                </label>
                            @error('address')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Добавить">
                    </div>
                </div>
            </form>

        </section>
    </div>
@endsection
