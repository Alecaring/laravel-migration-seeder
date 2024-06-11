@extends('layout.app')

@section('content')
    <div class="cont-main">
        @foreach ($datas as $data)
            <div class="container_cards">
                <span>{{ $data->id }}</span>
                <span>{{ $data->azienda }}</span>
                <span>{{ $data->stazione_partenza }}</span>
                <span>{{ $data->stazione_arrivo }}</span>
                <span>{{ $data->orario_partenza }}</span>
                <span>{{ $data->orario_arrivo }}</span>
                <span>{{ $data->codeice_treno }}</span>
                <span>{{ $data->numero_carrozze }}</span>
                <span>{{ $data->in_orario }}</span>
                <span>{{ $data->cancellato }}</span>
            </div>
        @endforeach
    </div>
@endsection
