@extends('template.layout')

@section('title') Recibos | App nómina @endsection

@section('content')

	<table class="table table-striped table-hover table-responsive">
        <tr>
            <th>#</th>
            <th>Desde</th>
            <th>Hasta</th>  
            <th>Dias Laborados</th>
            <th>Fecha</th>
            <th>Acciones</th>
        </tr>
        @foreach($receipts as $item)
            <tr>
                <td></td>
                <td class="text-uppercase">{{ $item->desde }}</td>
                <td class="text-uppercase">{{ $item->hasta }}</td>
                <td>{{ $item->dias_lab }}</td>
                <td>{{date("d/m/Y", strtotime($item->fecha)) }}</td>
                <td>
                    <a href="{{ route('receipts.show', $item->id) }}" class="btn btn-info btn-xs">Ver </a>
                    <a href="{{ route('receipts.edit', $item->id) }}" class="btn btn-warning btn-xs"> Editar</a>
                </td>
            </tr>
        @endforeach
    </table>

@endsection