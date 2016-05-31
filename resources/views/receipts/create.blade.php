@extends('template.layout')

@section('title') Recibo | App nómina @endsection

@section('content')

	{!! Form::open(['route' => 'receipts.store']) !!}
		{!! Form::hidden('id_user', Auth::user()->id) !!}
		{!! Form::hidden('update_user', Auth::user()->id) !!}
		{!! Form::hidden('id_company', $company->id) !!}
		<div class="form-group">							
			{!! Form::label('desde', 'Desde') !!}
			{!! Form::date('desde', null, ['class' => 'form-control', 'placeholder' => 'Nombre de la empresa']) !!}							
		</div>
		
		<div class="form-group">							
			{!! Form::label('hasta', 'Hasta') !!}
			{!! Form::date('hasta', null, ['class' => 'form-control']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('dias_lab', 'Dias Laborados') !!}
			{!! Form::text('dias_lab', null, ['class' => 'form-control']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('fecha', 'Fecha') !!}
			{!! Form::date('fecha', null, ['class' => 'form-control']) !!}							
		</div>		
		{!! Form::button('<i class="fa fa-plus-circle fa-fw"></i> Agregar', ['type' => 'submit', 'class' => 'btn btn-success']) !!} 	
	{!! Form::close() !!}

@endsection