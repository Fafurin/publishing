@extends('personal.layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="col-sm-12">
                    <h1 class="m-0 text-center">Личный кабинет</h1>
                </div>
            </div>
        </div>
        <section class="content mt-4">
            <div class="container-fluid">
                <div class="row">
                    @auth()
                        @if (auth()->user()->role_id == 1)
                            <h5>{{ Auth::user()->name }}, добро пожаловать в электронную систему управления издательством ПГУ!</h5>
                        @else
                            <h5>{{ Auth::user()->name }}, добро пожаловать в личный кабинет!</h5>
                        @endif
                    @endauth
                </div>
            </div>
        </section>
    </div>
@endsection
