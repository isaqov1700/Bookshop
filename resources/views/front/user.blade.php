<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@foreach($users as $user)
    <h3>Name: {{$user->name}}</h3>
    <h3>Tell number: {{$user->tel_number}}</h3>
    <h3>Location: {{$user->location}}</h3>
@endforeach
</body>
</html>
