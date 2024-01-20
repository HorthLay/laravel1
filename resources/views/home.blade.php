<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>welcone home page</h2>
    <ul>
        @foreach($homes as $home)
        <li>Id :{{$home->id}}</li>
        <li>Id :{{$home->title}}</li>
        <li>Id :{{$home->body}}</li>
        @endforeach
    </ul>
</body>

</html>