@extends('template.layout')

@section('title') Conceptos | App nómina @endsection

@section('content')

	{!! Form::open(['route' => 'concepts.store']) !!}
		{!! Form::hidden('id_user', Auth::user()->id) !!}
		{!! Form::hidden('update_user', Auth::user()->id) !!}
		<div class="form-group">							
			{!! Form::label('codigo', 'Código') !!}
			{!! Form::text('codigo', null, ['class' => 'form-control', 'placeholder' => 'Código del concepto']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('descripcion', 'Descripción') !!}
			{!! Form::text('descripcion', null, ['class' => 'form-control']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('porcentaje', 'Porcentaje') !!}
			{!! Form::text('porcentaje', null, ['class' => 'form-control']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('tipo', 'Tipo') !!}
			{!! Form::select('tipo', [
				'asignacion'	=> 'Asignación',
				'deduccion'		=> 'Deducción'
			], null, ['class' => 'form-control', 'placeholder' => 'Seleccionar tipo']) !!}							
		</div>
		
		{!! Form::button('<i class="fa fa-plus-circle fa-fw"></i> Agregar', ['type' => 'submit', 'class' => 'btn btn-success']) !!} 	
	{!! Form::close() !!}

@endsection