<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Test</title>
    </head>
    <body>
        <div>
            <p>input value: {{ $phone }}<p>
            <p>Msg: {{ $result }}<p>
            <p>Result: {{ $hidden }}<p>
        </div>
    </body>
</html>
