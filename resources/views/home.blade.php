@extends('layouts.app')

@section('page-title', 'train')

@section('content')

    <div class="row">
        @foreach ($trains as $train)
            <p>{{$train->Azienda}}</p>
            <p>{{$train->Orario_di_partenza}}</p>
        @endforeach
    </div>

@endsection