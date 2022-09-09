@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <h3 class="text-center">Должности</h3>
            <div class="row">
                <div class="m-3">
                    <a href="{{route('admin.position.create')}}" class="btn btn-block btn-primary">Новая должность</a>
                </div>
                <table class="table table-hover text-nowrap">
                    <thead>
                    <tr>
                        <th>Номер</th>
                        <th>Название</th>
                        <th colspan="3">Действия</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($positions as $position)
                        <tr>
                            <td>{{ $position->id }}</td>
                            <td>{{ $position->title }}</td>
                            <td>
                                <a href="{{route('admin.position.show', $position->id)}}">
                                    <i class="far fa-eye"></i>
                                </a>
                            </td>
                            <td><a class="text-success"
                                   href="{{route('admin.position.edit', $position->id)}}">
                                    <i class="fas fa-pencil-alt"></i></a>
                            </td>
                            <td>
                                <form action="{{route('admin.position.delete', $position->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="border-0 bg-transparent">
                                        <i class="fas fa-trash text-danger" role="button"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </section>
    </div>
@endsection
