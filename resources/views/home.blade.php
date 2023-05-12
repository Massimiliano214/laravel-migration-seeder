@extends('layouts.app')

@section('title', 'train list')

@section('content')
    <div>
        @foreach ($trains as $train)
           
            {{$train}}
            
        @endforeach
    </div>
@endsection