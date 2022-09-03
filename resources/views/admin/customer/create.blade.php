@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <section class="content ml-3">
            <h3>Новый заказчик</h3>
            <div class="row">
                <form action="{{ route('admin.customer.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>ФИО
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
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Добавить">
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection
