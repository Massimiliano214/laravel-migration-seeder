@extends('layouts.app')

@section('title', 'train list')

@section('content')
    <div class="container">
        @foreach ($trains as $train)
           
            {{$train}}
            
        @endforeach
    </div>
@endsection