@extends('template.layout')

@section('title') Empleados | App nómina @endsection

@section('content')

	<table class="table table-striped table-hover table-responsive">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido</th>  
            <th>C.I.</th>
            <th>Edad</th>
            <th>Fecha Ingreso</th>
            <th>Cargo</th>  
            <th>T. Alimen.</th>
            <th>Sueldo</th>
            <th>Acciones</th>
        </tr>
        @foreach ($employees as $item)
            @if($item->estatus == 'activo')
                <tr>
                    <td>{{ $contador += 1 }}</td>
                    <td class="text-uppercase">{{ $item->nombre }}</td>
                    <td class="text-uppercase">{{ $item->apellido }}</td>
                    <td>{{ number_format($item->ci,0,",",".") }}</td>
                    <td>{{ $item->edad }}</td>
                    <td>{{ date("d/m/Y", strtotime($item->fecha_i)) }}</td>
                    <td>{{ $item->cargo }}</td>
                    <td>{{ number_format($item->bono_a,2,",",".") }}</td>
                    <td>{{ number_format($item->sueldo,2,",",".") }}</td>
                    <td>
                        <a href="{{ route('employees.show', $item->id) }}" class="btn btn-info btn-xs">Ver </a>
                        <a href="{{ route('employees.edit', $item->id) }}" class="btn btn-warning btn-xs"> Editar</a>
                    </td>
                </tr>
            @endif
        @endforeach
    </table>

@endsection