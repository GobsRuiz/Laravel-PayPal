<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PayPal</title>
</head>
<body>

    <h1>
        Aoba
    </h1>

    <br>

    <a href="{{ url('/paypal/pay') }}">
        PayPal
    </a>

    @if (session('status'))
        <h3>
            {{ session('status') }}
        </h3>
    @endif
</body>
</html>
