<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body style="background: #BEF3FA; font-size: 14px; margin: 0px; padding: 0px; font-family: Helvetica; color: #000000;">
	<br>
	<div style="background-color: #ffffff; border-radius: 4px; padding: 25px; max-width: 500px; margin: 0 auto;">
		<h2 style="text-align: center; font-family: Helvetica;">Activar cuenta</h2>
		<p>Hola <i>{{ $data['name'] }}</i>,</p>

		<p>Para activar su cuenta por favor haga clic en el siguiente enlace:</p>
		<div style="background-color: #1859FF; border-radius: 6px; padding: 13px; max-width: 100px; height: 100%;">
			<a href="{{ url('/') }}/activate/{{ $data['code'] }}" style="text-align: center; color: #fff; width: 100%; text-decoration: none;"><b>Activar cuenta</b></a>
		</div>	
		<p>Gracias por registrarte.</p>
		<hr>
		<p>&mdash; System Auth</p>		
	</div>
	
	<p style="text-align: center; font-family: Helvetica;">Follow <a href="http://twitter.com/joserph_a">@joserph_a</a> on Twitter.</p>
	<hr>
	<br>
	
</body>
</html>