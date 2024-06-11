@extends('layout.app')

@section('content')
    <div class="cont-main">
        @foreach ($datas as $data)


        @php
        // Creazione degli oggetti DateTime per le date di partenza e arrivo
        $date_partenza = new DateTime($data->orario_partenza);
        $formattedTime_partenza = $date_partenza->format('H:i');
    
        $date_arrivo = new DateTime($data->orario_arrivo);
        $formattedTime_arrivo = $date_arrivo->format('H:i');
    
        // Calcolo della differenza di tempo tra partenza e arrivo
        $interval = $date_partenza->diff($date_arrivo);
    
        // Formattazione della differenza in ore e minuti
        $difference = $interval->format('%h ore %i minuti');
    @endphp


            <div class="container_cards">
                <div class="top_cont">

                    <span class="agg">{{ $data->azienda }}</span>
                    <span><strong>cod:</strong> {{ $data->codice_treno }}</span>

                </div>
                <div class="center_cont">
                    <div class="left_center_cont">
                        <span class="genral">


                            <span class="num">{{ $formattedTime_partenza }}</span>
                            <span class="arr">{{ $data->stazione_partenza }}</span>

                        </span>
                        <span class="genral">
                            <span>•••••••    {{ $difference }}    •••••••</span>

                        </span>
                        <span class="genral">

                            <span class="num">{{ $formattedTime_arrivo }}</span>
                            <span class="arr">{{ $data->stazione_arrivo }}</span>
                        </span>
                    </div>
                    <div class="right_center_cont"></div>
                </div>
                <div class="bottom_cont"></div>
                <span>{{ $data->numero_carrozze }}</span>
                <span>{{ $data->in_orario }}</span>
                <span>{{ $data->cancellato }}</span>
            </div>
        @endforeach
    </div>
@endsection
