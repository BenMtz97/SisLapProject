@extends('layouts.app')
<?php $cards = [
    ['Brand' => 'HP', 'ID' => 19,'Software' => ['Hola','Prueba'], 'SO' => 'Windows 10'],
    ['Brand' => 'HP', 'ID' => 19,'Software' => ['Hola','Prueba'], 'SO' => 'Linux'],
    ['Brand' => 'HP', 'ID' => 19,'Software' => ['Hola','Prueba'], 'SO' => 'Ubuntu']
]?>
@section('content')
        <div class="container-fluid">
            <div class="row justify-content-center">
                @foreach ($cards as $card)
                    <div class="col-md-2">
                        <div class="card">
                            <img style="height: 11rem" src="{{asset('img/SO/'.str_replace(' ','-',$card['SO']).".png")}}" class="card-img-top img-fluid img-thumbnail" alt="PC">
                            <div class="card-body">
                                <h5 class="card-title">{{ $card['Brand']." - ".$card['ID'] }}</h5>
                                <p class="card-text">{{count($card['Software'])}} programas.</p>
                                <a href="{{url('equipment/details/'.$card['ID'])}}" class="btn btn-primary">Detalles</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

@endsection
