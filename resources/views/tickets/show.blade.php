@extends('master')
@section('title', 'Просмотр заявки')
@section('content')

    <div class="container col-md-8 col-md-offset-2 mt-5">
        <div class="card">
            <div class="card-header ">
                <h5 class="float-left">{{ $ticket->title }}</h5>
                <div class="clearfix"></div>
            </div>
            <div class="card-body">
                <p> <strong>Статус</strong>: {{ $ticket->status ? 'В ожидании' : 'Отвечено' }}</p>
                <p> {{ $ticket->content }} </p>
                <a href="#" class="btn btn-info">Изменить</a>
                <a href="#" class="btn btn-info">Удалить</a>
            </div>
        </div>
    </div>

@endsection