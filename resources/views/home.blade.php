@extends('layouts.app')

@section('page-title', 'train')

@section('content')

    <div class="row">
        @foreach ($trains as $train)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $train->company }}</h5>
                    <p class="card-text">{{ $train->departure_station }} => {{ $train->arrival_station }}</p>
                    <p class="card-text">{{ $train->departure_time }} <br>=><br> {{ $train->arrival_time }}</p>
                    <p class="card-text">{{ $train->train_code }}</p>
                    <p class="card-text">{{ $train->wagons_number }}</p>
                    <p class="card-text">{{ $train->on_time }}</p>
                    <p class="card-text">{{ $train->cancelled }}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        @endforeach
    </div>

@endsection
