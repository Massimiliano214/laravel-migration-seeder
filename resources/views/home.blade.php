@extends('layouts.app')

@section('title', 'train list')

@section('content')
    <div class="container">
        <div class="row">

            <div class="wrapper d-flex flex-wrap justify-content-between">
    
                @foreach ($trains as $train)

                    @foreach ($train as $item)
                        
                    @dump($item)
                    <div class="card col-3 my-4 text-white" style="width: 18rem;">
                        <div class="card-body">
                            <h4 class="card-title text-center">azienda: {{$item}}</h4>
                            <h5 class="card-text">Stazione di Partenza: {{$item}}</h5>
                            <h5 class="card-text">Stazione di Arrivo: {{$item}}</h5>
                            <p class="card-text myText">Orario di partenza: {{$item}}</p>
                            <p class="card-text myText">Orario di arrivo: {{$item}}</p>
                            <p class="card-text myText">Numero Carrozze: {{$item}}</p>
                            <p class="card-text myText">In Orario: {{$item}}</p>
                            <p class="card-text myText">Cancellato: {{$item}}</p>
                            <p class="card-text myText">Giorno Partenza: {{$item}}</p>
                        </div>
                    </div>
                    @endforeach
                    
    
                @endforeach
            </div>
        </div>
    </div>
@endsection