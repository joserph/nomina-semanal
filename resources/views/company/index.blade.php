@extends('template.layout')

@section('title') Empresa | App nómina @endsection

@section('content')

	<table class="table table-striped table-hover table-responsive">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>R.I.F.</th>  
            <th>Dirección</th>
            <th>Telefono</th>
            <th>Nº Patronal</th>
            <th>Acciones</th>
        </tr>
        @foreach($company as $item)
            <tr>
                <td></td>
                <td class="text-uppercase">{{ $item->nombre }}</td>
                <td class="text-uppercase">{{ $item->rif }}</td>
                <td>{{ $item->direccion }}</td>
                <td>{{ $item->tlf }}</td>
                <td>{{ $item->n_patronal }}</td>
                <td>
                    <a href="{{ route('company.show', $item->id) }}" class="btn btn-info btn-xs">Ver </a>
                    <a href="{{ route('company.edit', $item->id) }}" class="btn btn-warning btn-xs"> Editar</a>
                </td>
            </tr>
        @endforeach
    </table>

@endsection