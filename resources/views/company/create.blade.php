@extends('template.layout')

@section('title') Empresa | App nómina @endsection

@section('content')

	{!! Form::open(['route' => 'company.store']) !!}
		{!! Form::hidden('id_user', Auth::user()->id) !!}
		{!! Form::hidden('update_user', Auth::user()->id) !!}
		<div class="form-group">							
			{!! Form::label('nombre', 'Nombre') !!}
			{!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la empresa']) !!}							
		</div>
		
		<div class="form-group">							
			{!! Form::label('direccion', 'Dirección') !!}
			{!! Form::text('direccion', null, ['class' => 'form-control']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('tlf', 'Teléfono') !!}
			{!! Form::text('tlf', null, ['class' => 'form-control']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('rif', 'R.I.F.') !!}
			{!! Form::text('rif', null, ['class' => 'form-control']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('n_patronal', 'Nº Patronal') !!}
			{!! Form::text('n_patronal', null, ['class' => 'form-control']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('f_incripcion', 'Fecha de incripción') !!}
			{!! Form::date('f_incripcion', null, ['class' => 'form-control']) !!}							
		</div>
		
		{!! Form::button('<i class="fa fa-plus-circle fa-fw"></i> Agregar', ['type' => 'submit', 'class' => 'btn btn-success']) !!} 	
	{!! Form::close() !!}

@endsection