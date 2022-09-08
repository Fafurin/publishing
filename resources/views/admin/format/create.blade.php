@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <h3>Новый формат</h3>
            <div class="row">
                <form action="{{ route('admin.format.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" value="{{ old('title') }}" name="title" class="form-control"
                               placeholder="Название">
                        @error('title')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="text" value="{{ old('size') }}" name="size" class="form-control"
                               placeholder="Размер">
                        @error('size')
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
