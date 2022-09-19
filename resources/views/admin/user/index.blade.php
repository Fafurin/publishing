@extends('admin.layouts.main')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            <h3 class="text-center">Сотрудники</h3>
            <div class="row">
                <div class="m-3">
                    <a href="{{route('admin.user.create')}}" class="btn btn-block btn-primary">Новый сотрудник</a>
                </div>
                <table class="table table-hover text-nowrap">
                    <thead>
                    <tr>
                        <th>Имя</th>
                        <th>Задачи</th>
                        <th>Должность</th>
                        <th>Телефон</th>
                        <th colspan="2">Действия</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ count($user->tasks) }}</td>
                            <td>{{ $user->position->title }}</td>
                            <td>{{ $user->profile->phone }}</td>
                            <td>
                                <a href="{{route('admin.user.show', $user->id)}}">
                                    <i class="far fa-eye"></i>
                                </a>
                            </td>
                            <td><a class="text-success"
                                   href="{{route('admin.user.edit', $user->id)}}">
                                    <i class="fas fa-pencil-alt"></i></a>
                            </td>
{{--                            <td>--}}
{{--                                <form action="{{route('admin.user.delete', $user->id)}}" method="POST">--}}
{{--                                    @csrf--}}
{{--                                    @method('DELETE')--}}
{{--                                    <button type="submit" class="border-0 bg-transparent">--}}
{{--                                        <i class="fas fa-trash text-danger" role="button"></i>--}}
{{--                                    </button>--}}
{{--                                </form>--}}
{{--                            </td>--}}
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </section>
    </div>
@endsection
