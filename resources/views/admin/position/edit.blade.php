@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <section class="content ml-3">
            <h3>Изменить название должности</h3>
            <div class="row">
                <form action="{{ route('admin.position.update', $position->id) }}" method="POST">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <input type="text" value="{{ $position->title ?? old('title') }}" name="title"
                               class="form-control" placeholder="Название">
                        @error('title')
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
