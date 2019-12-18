@extends('layouts.app')
@section('content')
    <div class="container container-fluid">
        <h2>
            <span class="bd-content-title">
                Detalles del equipo No. {{$equipment['ID']}}
            </span>
        </h2>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="text-center">
                            <img class="img-fluid" style="height: 9rem" src="{{asset('img/equipments/'.strtolower($equipment['model']).".png")}}" alt="{{$equipment['model']}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <table class="table table-light table-striped">
                            <tr>
                                <th scope="row">Marca</th>
                                <td>{{$equipment['brand']}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Modelo</th>
                                <td>{{$equipment['model']}}</td>
                            </tr>
                            <tr>
                                <th scope="row">Sistema Operativo</th>
                                <td>{{$equipment['SO']}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <h3>
                        <span class="bd-content-title">
                            Programas instalados
                        </span>
                    </h3>
                    <div class="col-md-12">
                        <table class="table table-light table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Programa</th>
                                    <th scope="col">Version</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($equipment['software'] as $software)
                                    <tr>
                                        <td>{{$software['name']}}</td>
                                        <td>{{$software['version']}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
