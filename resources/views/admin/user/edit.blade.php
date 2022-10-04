@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <h3>Изменить данные сотрудника</h3>
            <form action="{{ route('admin.user.update', $user->id) }}" method="POST">
                @csrf
                @method('patch')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>ФИО
                                <input type="text" value="{{ $user->name ?? old('name') }}" name="name"
                                       class="form-control"
                                       placeholder="ФИО">
                            </label>
                            @error('name')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>E-mail
                                <input type="email" value="{{ $user->email ?? old('email') }}" name="email"
                                       class="form-control"
                                       placeholder="E-mail">
                            </label>
                            @error('email')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Должность
                                <select name="position_id" class="form-control select2" style="width: 100%;">
                                    @foreach($positions as $position)
                                        <option value="{{ $position->id }}"
                                            {{ $position->id == $user->position->id ? 'selected' : ''}}>
                                            {{ $position->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </label>
                            @error('position_id')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Роль
                                <select name="role_id" class="form-control select2" style="width: 100%;">
                                    @foreach($roles as $role)
                                        <option value="{{ $role->id }}"
                                            {{ $role->id == $user->role->id ? 'selected' : ''}}>
                                            {{ $role->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </label>
                            @error('role_id')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Телефон
                                <input type="text" value="{{ $user->profile->phone ?? old('phone') }}" name="phone" class="form-control"
                                       placeholder="Телефон">
                            </label>
                            @error('phone')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Дата рождения
                                <input type="date" value="{{ $user->profile->date_of_birth ?? old('date_of_birth') }}" name="date_of_birth"
                                       class="form-control">
                            </label>
                            @error('date_of_birth')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Домашний адрес
                                <input type="text" value="{{ $user->profile->address ?? old('address') }}" name="address" class="form-control"
                                       placeholder="Домашний адрес">
                            </label>
                            @error('address')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Изменить">
                    </div>
                </div>
            </form>

        </section>
    </div>
@endsection
