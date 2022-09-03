@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <h3>Виды изданий</h3>
            <table class="table table-hover text-nowrap">
                <thead>
                <tr>
                    <th>Номер</th>
                    <th>Название</th>
                    <th colspan="3">Действия</th>
                </tr>
                </thead>
                <tbody>
                @foreach($types as $type)
                    <tr>
                        <td>{{ $type->id }}</td>
                        <td>{{ $type->title }}</td>
                        <td>
                            <a href="{{route('admin.type.show', $type->id)}}">
                                <i class="far fa-eye"></i>
                            </a>
                        </td>
                        <td><a class="text-success"
                               href="{{route('admin.type.edit', $type->id)}}">
                                <i class="fas fa-pencil-alt"></i></a>
                        </td>
                        <td>
                            <form action="{{route('admin.type.delete', $type->id)}}" method="POST">
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
        </section>
    </div>
@endsection
