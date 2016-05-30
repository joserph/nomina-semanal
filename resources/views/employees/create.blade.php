@extends('template.layout')

@section('title') Empleados | App nómina @endsection

@section('content')

	{!! Form::open(['route' => 'employees.store']) !!}
		{!! Form::hidden('id_user', Auth::user()->id) !!}
		{!! Form::hidden('update_user', Auth::user()->id) !!}
		<div class="form-group">							
			{!! Form::label('nombre', 'Nombre') !!}
			{!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre del empleado']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('apellido', 'Apellido') !!}
			{!! Form::text('apellido', null, ['class' => 'form-control']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('ci', 'C.I.') !!}
			{!! Form::text('ci', null, ['class' => 'form-control']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('edad', 'Edad') !!}
			{!! Form::text('edad', null, ['class' => 'form-control']) !!}							
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
			{!! Form::label('cel', 'Celular') !!}
			{!! Form::text('cel', null, ['class' => 'form-control']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('rif', 'R.I.F.') !!}
			{!! Form::text('rif', null, ['class' => 'form-control']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('sexo', 'Sexo') !!}
			{!! Form::select('sexo', [
				'femenino' 	=> 'Femenino',
				'masculino'	=> 'Masculino'
				], null, ['class' => 'form-control', 'placeholder' => 'Seleccionar sexo']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('email', 'Email') !!}
			{!! Form::text('email', null, ['class' => 'form-control']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('fecha_n', 'Fecha de nacimiento') !!}
			{!! Form::date('fecha_n', null, ['class' => 'form-control']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('nacionalidad', 'Nacionalidad') !!}
			{!! Form::text('nacionalidad', null, ['class' => 'form-control']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('fecha_i', 'Fecha ingreso') !!}
			{!! Form::date('fecha_i', null, ['class' => 'form-control']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('cargo', 'Cargo') !!}
			{!! Form::text('cargo', null, ['class' => 'form-control']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('asegurado', 'Asegurado') !!}
			{!! Form::select('asegurado', [
				'si'	=> 'SI',
				'no'	=> 'NO'
			], null, ['class' => 'form-control', 'placeholder' => 'Seleccionar']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('registroivss', 'Registra patronal') !!}
			{!! Form::text('registroivss', null, ['class' => 'form-control']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('fecha_ivss', 'Fecha ingrego ivss') !!}
			{!! Form::date('fecha_ivss', null, ['class' => 'form-control']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('tipo', 'Tipo') !!}
			{!! Form::select('tipo', [
				'empleado'		=> 'Empleado',
				'accionista'	=> 'Accionista'
			], null, ['class' => 'form-control', 'placeholder' => 'Seleccionar tipo de trabajador']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('sueldo', 'Sueldo') !!}
			{!! Form::text('sueldo', null, ['class' => 'form-control']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('sueldo_otro', 'Sueldo + bono') !!}
			{!! Form::text('sueldo_otro', null, ['class' => 'form-control']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('bono_a', 'Bono Alimentación') !!}
			{!! Form::text('bono_a', null, ['class' => 'form-control']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('estatus', 'Estatus') !!}
			{!! Form::select('estatus', [
				'activo'	=> 'Activo',
				'despedido'	=> 'Despedido',
				'reposo'	=> 'Reposo',
				'retirado'	=> 'Retirado'
			], null, ['class' => 'form-control', 'placeholder' => 'Seleccionar estatus']) !!}							
		</div>
		{!! Form::button('<i class="fa fa-plus-circle fa-fw"></i> Agregar', ['type' => 'submit', 'class' => 'btn btn-success']) !!} 	
	{!! Form::close() !!}

@endsection