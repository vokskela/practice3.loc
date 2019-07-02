@extends('master')
@section('title', 'Список заявок')
@section('content')

    <div class="container col-md-8 col-md-offset-2 mt-5">
        <div class="card">
            <div class="card-header ">
                <h5 class="float-left">Tickets</h5>
                <div class="clearfix"></div>
            </div>
            <div class="card-body mt-2">
                @if ($tickets->isEmpty())
                    <p> Нет заявок.</p>
                @else
                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Заголовок</th>
                            <th>Статус</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tickets as $ticket)
                            <tr>
                                <td>{{ $ticket->id }} </td>
                                <td>{{ $ticket->title }}</td>
                                <td>{{ $ticket->status ? 'В ожидании' : 'Отвечено' }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>

@endsection