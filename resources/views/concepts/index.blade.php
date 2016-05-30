@extends('template.layout')

@section('title') Conceptos | App nómina @endsection

@section('content')

	<table class="table table-striped table-hover table-responsive">
        <tr>
            <th>#</th>
            <th>Codigo</th>
            <th>Descripción</th>  
            <th>Porcentaje</th>
            <th>Tipo</th>
            <th>Acciones</th>
        </tr>
        @foreach ($concepts as $item)
            <tr>
                <td>{{ $contador += 1 }}</td>
                <td class="text-uppercase">{{ $item->codigo }}</td>
                <td class="text-uppercase">{{ $item->descripcion }}</td>
                <td>{{ $item->porcentaje }}%</td>
                <td>{{ $item->tipo }}</td>
                <td>
                    <a href="{{ route('concepts.show', $item->id) }}" class="btn btn-info btn-xs">Ver </a>
                    <a href="{{ route('concepts.edit', $item->id) }}" class="btn btn-warning btn-xs"> Editar</a>
                </td>
            </tr>
        @endforeach
    </table>

@endsection