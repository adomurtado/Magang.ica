<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>daftar page</title>
</head>
<body>
    <h1> daftar cikara</h1>
    <ul>
        @foreach ( $data as $item)
            <li>{{sistem['nama']}}</li>
        @endforeach
    </ul>
</body>
</html>

