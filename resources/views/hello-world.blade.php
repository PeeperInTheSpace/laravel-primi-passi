<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello World Laravel</title>
</head>

    <body>

        <h1>
            Ciaone
        </h1>

        @php
            $numbers = [2, 4, 6, 7, 16, 20]
        @endphp

        @foreach ($numbers as $item)
            <p>
                {{$item}}
            </p>
        @endforeach

    </body>

</html>
