@extends('template.layout')

@section('title') Recibo | App nómina @endsection

@section('content')

	{!! Form::open(['route' => ['receipts.update', $receipt], 'method' => 'PUT']) !!}
		{!! Form::hidden('update_user', Auth::user()->id) !!}
		{!! Form::hidden('id_company', $company->id) !!}
		<div class="form-group">							
			{!! Form::label('desde', 'Desde') !!}
			{!! Form::date('desde', $receipt->desde, ['class' => 'form-control', 'placeholder' => 'Nombre de la empresa']) !!}							
		</div>
		
		<div class="form-group">							
			{!! Form::label('hasta', 'Hasta') !!}
			{!! Form::date('hasta', $receipt->hasta, ['class' => 'form-control']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('dias_lab', 'Dias Laborados') !!}
			{!! Form::text('dias_lab', $receipt->dias_lab, ['class' => 'form-control']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('fecha', 'Fecha') !!}
			{!! Form::date('fecha', $receipt->fecha, ['class' => 'form-control']) !!}							
		</div>		
		{!! Form::button('<i class="fa fa-refresh fa-fw"></i> Actualizar', ['type' => 'submit', 'class' => 'btn btn-warning']) !!} 	
	{!! Form::close() !!}

@endsection