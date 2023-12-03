@extends('padreAdmi')
@section('contenidoPrincipal')
<section>
        <br><br>
        <div class="container mt-3">
            <h1>Ventas</h1>
            <!--<input id="datepicker" width="150" />-->

            <div class="container p-3" id="main-container">
                <!--CALENDARIO-->


                <!--TABLAAAAAAAA-->

                <div class="table-responsive">
                    <br>
                    <table class="table " >
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Fecha</th>
                                <th>Usuario</th>
                                <th class="d-none d-md-table-cell">Dirrección de envio</th>
                                <th>Monto</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($sales as $sale)
                            <tr>
                                <td>{{ $sale->id }}</td>
                                <td>{{ $sale->created_at->format('Y-m-d') }}</td>
                                <td>{{ $sale->user->name }}</td>
                                <td class="d-none d-md-table-cell">
                                    @if ($sale->adress) 
                                    {{ $sale->adress->reference }} {{ $sale->adress->houseNumber }}, {{ $sale->adress->neighborhood }}<br>
                                    {{ $sale->adress->city }}, {{ $sale->adress->cp }}
                                    @else
                                        Dirección no disponible
                                    @endif</td>
                                <td>{{ $sale->total }}</td>

                            </tr>
                            @endforeach
                        </tbody>

                    </table>

                </div>
            </div>
        </div>
    </section>
    @endsection