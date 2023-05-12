@extends('layouts.app')

@section('title', 'train list')

@section('content')
    <div class="container">
        <div class="row">

            <div class="wrapper d-flex flex-wrap justify-content-between">
    
                @foreach ($trains as $train)

                    <div class="card col-3 my-4" style="width: 18rem;">
                        <div class="card-body">
                            <h4 class="card-title text-center">azienda: {{$train->azienda}}</h4>
                            <h5 class="card-text">Stazione di Partenza: <br> {{$train->stazione_partenza}}</h5>
                            <h5 class="card-text">Stazione di Arrivo: <br> {{$train->stazione_arrivo}}</h5>
                            <p class="card-text myText">Orario di partenza: {{$train->orario_partenza}}</p>
                            <p class="card-text myText">Orario di arrivo: {{$train->orario_arrivo}}</p>
                            <p class="card-text myText">Codice Treno: if {{$train->codice_treno}}</p>
                            <p class="card-text myText">Numero Carrozze: {{$train->numero_carrozze}}</p>
                            <p class="card-text myText">In Orario:
                                @if ($train->in_orario == 1)
                                    Si 
                                @else
                                    No
                                @endif
                            </p>
                            <p class="card-text myText">Giorno Partenza: {{$train->created_at}}</p>
                            <p class="card-text myText">Cancellato:
                                @if ($train->cancellato == 1)
                                    Si 
                                @else
                                    No
                                @endif
                            </p>
                        </div>
                    </div>
                    
    
                @endforeach
            </div>
        </div>
    </div>
@endsection