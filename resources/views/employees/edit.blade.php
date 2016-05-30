@extends('template.layout')

@section('title') Empleados | App nómina @endsection

@section('content')

	{!! Form::open(['route' => ['employees.update', $employee], 'method' => 'PUT']) !!}
		{!! Form::hidden('update_user', Auth::user()->id) !!}
		<div class="form-group">							
			{!! Form::label('nombre', 'Nombre') !!}
			{!! Form::text('nombre', $employee->nombre, ['class' => 'form-control', 'placeholder' => 'Nombre del empleado']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('apellido', 'Apellido') !!}
			{!! Form::text('apellido', $employee->apellido, ['class' => 'form-control']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('ci', 'C.I.') !!}
			{!! Form::text('ci', $employee->ci, ['class' => 'form-control']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('edad', 'Edad') !!}
			{!! Form::text('edad', $employee->edad, ['class' => 'form-control']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('direccion', 'Dirección') !!}
			{!! Form::text('direccion', $employee->direccion, ['class' => 'form-control']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('tlf', 'Teléfono') !!}
			{!! Form::text('tlf', $employee->tlf, ['class' => 'form-control']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('cel', 'Celular') !!}
			{!! Form::text('cel', $employee->cel, ['class' => 'form-control']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('rif', 'R.I.F.') !!}
			{!! Form::text('rif', $employee->rif, ['class' => 'form-control']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('sexo', 'Sexo') !!}
			{!! Form::select('sexo', [
				'femenino' 	=> 'Femenino',
				'masculino'	=> 'Masculino'
				], $employee->sexo, ['class' => 'form-control', 'placeholder' => 'Seleccionar sexo']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('email', 'Email') !!}
			{!! Form::text('email', $employee->email, ['class' => 'form-control']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('fecha_n', 'Fecha de nacimiento') !!}
			{!! Form::date('fecha_n', $employee->fecha_n, ['class' => 'form-control']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('nacionalidad', 'Nacionalidad') !!}
			{!! Form::text('nacionalidad', $employee->nacionalidad, ['class' => 'form-control']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('fecha_i', 'Fecha ingreso') !!}
			{!! Form::date('fecha_i', $employee->fecha_i, ['class' => 'form-control']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('cargo', 'Cargo') !!}
			{!! Form::text('cargo', $employee->cargo, ['class' => 'form-control']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('asegurado', 'Asegurado') !!}
			{!! Form::select('asegurado', [
				'si'	=> 'SI',
				'no'	=> 'NO'
			], $employee->asegurado, ['class' => 'form-control', 'placeholder' => 'Seleccionar']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('registroivss', 'Registra patronal') !!}
			{!! Form::text('registroivss', $employee->registroivss, ['class' => 'form-control']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('fecha_ivss', 'Fecha ingrego ivss') !!}
			{!! Form::date('fecha_ivss', $employee->fecha_ivss, ['class' => 'form-control']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('tipo', 'Tipo') !!}
			{!! Form::select('tipo', [
				'empleado'		=> 'Empleado',
				'accionista'	=> 'Accionista'
			], $employee->tipo, ['class' => 'form-control', 'placeholder' => 'Seleccionar tipo de trabajador']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('sueldo', 'Sueldo') !!}
			{!! Form::text('sueldo', $employee->sueldo, ['class' => 'form-control']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('sueldo_otro', 'Sueldo + bono') !!}
			{!! Form::text('sueldo_otro', $employee->sueldo_otro, ['class' => 'form-control']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('bono_a', 'Bono Alimentación') !!}
			{!! Form::text('bono_a', $employee->bono_a, ['class' => 'form-control']) !!}							
		</div>
		<div class="form-group">							
			{!! Form::label('estatus', 'Estatus') !!}
			{!! Form::select('estatus', [
				'activo'	=> 'Activo',
				'despedido'	=> 'Despedido',
				'reposo'	=> 'Reposo',
				'retirado'	=> 'Retirado'
			], $employee->estatus, ['class' => 'form-control', 'placeholder' => 'Seleccionar estatus']) !!}							
		</div>
		{!! Form::button('<i class="fa fa-refresh fa-fw"></i> Actualizar', ['type' => 'submit', 'class' => 'btn btn-warning']) !!} 	
	{!! Form::close() !!}

@endsection