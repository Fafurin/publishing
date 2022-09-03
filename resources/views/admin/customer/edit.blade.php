@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <section class="content ml-3">
            <h3>Изменить данные заказчика</h3>
            <div class="row">
                <form action="{{ route('admin.customer.update', $customer->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label>ФИО
                            <input type="text" value="{{ $customer->name ?? old('name') }}" name="name" class="form-control">
                        </label>
                        @error('name')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Телефон
                            <input type="text" value="{{ $customer->phone ?? old('phone') }}" name="phone" class="form-control">
                        </label>
                        @error('phone')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>E-mail
                            <input type="email" value="{{ $customer->email ?? old('email') }}" name="email" class="form-control">
                        </label>
                        @error('email')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Изменить данные">
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection
