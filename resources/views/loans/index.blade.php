@extends('layouts.app')
@section('content')
    <div class="container container-fluid">
        <h2>
            <span class="bd-content-title">
                Mis prestamos
            </span>
        </h2>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-light table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Id de Prestamo</th>
                                    <th scope="col">Equipo Usado</th>
                                    <th scope="col">Fecha de Prestamo</th>
                                    <th scope="col">Fecha de Entrega</th>
                                    <th scope="col">Estatus</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($loans as $loan)
                                    <tr>
                                        <td>{{ $loan['id_loan'] }}</td>
                                        <td>{{ $loan['id_equipment'] }}</td>
                                        <td>{{ $loan['start_date'] }}</td>
                                        <td>{{ $loan['end_date'] }}</td>
                                        <td>{{ $loan['status']==1 ? "Entregado" : "Pendiente" }}</td>
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
