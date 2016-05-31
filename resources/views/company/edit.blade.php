@extends('template.layout')

@section('title') Empresa | App nómina @endsection

@section('content')

	{!! Form::open(['route' => ['company.update', $company], 'method' => 'PUT']) !!}
		{!! Form::hidden('update_user', Auth::user()->id) !!}
		<div class="form-group">							
			{!! Form::label('nombre', 'Nombre') !!}
			{!! Form::text('nombre', $company->nombre, ['class' => 'form-control', 'placeholder' => 'Nombre de la empresa']) !!}							
		</div>
		
		<div class="form-group">							
			{!! Form::label('direccion', 'Dirección') !!}
			{!! Form::text('direccion', $company->direccion, ['class' => 'form-control']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('tlf', 'Teléfono') !!}
			{!! Form::text('tlf', $company->tlf, ['class' => 'form-control']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('rif', 'R.I.F.') !!}
			{!! Form::text('rif', $company->rif, ['class' => 'form-control']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('n_patronal', 'Nº Patronal') !!}
			{!! Form::text('n_patronal', $company->n_patronal, ['class' => 'form-control']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('f_incripcion', 'Fecha de incripción') !!}
			{!! Form::date('f_incripcion', $company->f_incripcion, ['class' => 'form-control']) !!}							
		</div>
		
		{!! Form::button('<i class="fa fa-refresh fa-fw"></i> Actualizar', ['type' => 'submit', 'class' => 'btn btn-warning']) !!} 	
	{!! Form::close() !!}

@endsection