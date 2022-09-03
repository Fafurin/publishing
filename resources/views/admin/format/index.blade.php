@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <h3>Форматы изданий</h3>
            <div class="row">
                <div class="mb-3">
                    <a href="{{route('admin.format.create')}}" class="btn btn-block btn-primary">Новый формат издания</a>
                </div>
                <table class="table table-hover text-nowrap">
                    <thead>
                    <tr>
                        <th>Номер</th>
                        <th>Название</th>
                        <th>Размер</th>
                        <th colspan="3">Действия</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($formats as $format)
                        <tr>
                            <td>{{ $format->id }}</td>
                            <td>{{ $format->title }}</td>
                            <td>{{ $format->size }}</td>
                            <td>
                                <a href="{{route('admin.format.show', $format->id)}}">
                                    <i class="far fa-eye"></i>
                                </a>
                            </td>
                            <td><a class="text-success"
                                   href="{{route('admin.format.edit', $format->id)}}">
                                    <i class="fas fa-pencil-alt"></i></a>
                            </td>
                            <td>
                                <form action="{{route('admin.format.delete', $format->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="border-0 bg-transparent">
                                        <i class="fas fa-trash text-danger" role="button"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </div>
@endsection
