@extends('template.layout')

@section('title') Conceptos | App nómina @endsection

@section('content')

	{!! Form::open(['route' => ['concepts.update', $concept], 'method' => 'PUT']) !!}
		{!! Form::hidden('id_user', Auth::user()->id) !!}
		{!! Form::hidden('update_user', Auth::user()->id) !!}
		<div class="form-group">							
			{!! Form::label('codigo', 'Código') !!}
			{!! Form::text('codigo', $concept->codigo, ['class' => 'form-control', 'placeholder' => 'Código del concepto']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('descripcion', 'Descripción') !!}
			{!! Form::text('descripcion', $concept->descripcion, ['class' => 'form-control']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('porcentaje', 'Porcentaje') !!}
			{!! Form::text('porcentaje', $concept->porcentaje, ['class' => 'form-control']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('tipo', 'Tipo') !!}
			{!! Form::select('tipo', [
				'asignacion'	=> 'Asignación',
				'deduccion'		=> 'Deducción'
			], $concept->tipo, ['class' => 'form-control', 'placeholder' => 'Seleccionar tipo']) !!}							
		</div>
		
		{!! Form::button('<i class="fa fa-plus-circle fa-fw"></i> Actualizar', ['type' => 'submit', 'class' => 'btn btn-warning']) !!} 	
	{!! Form::close() !!}

@endsection