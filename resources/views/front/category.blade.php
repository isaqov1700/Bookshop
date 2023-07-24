<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body>
@foreach($categories as $category)
    <h3>Janrlar: {{$category->title}}</h3>
@endforeach
</body>
</html>
