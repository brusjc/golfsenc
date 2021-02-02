<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
</head>
<body>
    <h2>{{ __('auth.Confirmación de correo electrónico') }}</h2>
	<p>{{ __('auth.Hola') }} {{ $name }}, {{ __('auth.gracias por registrarte en www.practicavalenciano.es') }}</p>
    <p>{{ __('auth.Por favor confirma tu correo electrónico') }}.</p>
    <p>{{ __('auth.Para ello simplemente debes hacer click en el siguiente enlace') }}:</p>

    <a href="{{ url('/register/verify/' . $confirmation_code . '/'. $username) }}">
        {{ __('auth.Clic para confirmar tu email') }}
    </a>
</body>
</html>