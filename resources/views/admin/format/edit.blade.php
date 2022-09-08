@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <section class="content ml-3">
            <h3>Изменить формат</h3>
            <div class="row">
                <form action="{{ route('admin.format.update', $format->id) }}" method="POST">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <input type="text" value="{{ $format->title ?? old('title') }}" name="title"
                               class="form-control" placeholder="Название">
                        @error('title')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="text" value="{{ $format->size ?? old('size') }}" name="size" class="form-control"
                               placeholder="Размер">
                        @error('size')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Изменить">
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection
