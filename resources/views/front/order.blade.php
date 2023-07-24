<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="row mx-auto">

            <form action="{{'shop'}}" method="post">
                @method('PUT')
                @csrf
        @foreach($orders as $order)
                <h3>Name: {{$order->book->name}}</h3>
                <h3>User: {{$order->user->name}}</h3>
                <h3>Numbers: {{$order->orders}}</h3> <br>
                <input type="hidden" name="book_id" value="{{$order->book_id}}">
                <input type="hidden" name="user_id" value="{{$order->user_id}}">
        @endforeach

                @if($order->status=='purchased')
                <button type="submit" class="btn btn-danger mt-4 ml-3">Shoped</button>
                @else
                    <button type="submit" class="btn btn-primary mt-4 ml-3">Shop</button>
                @endif
            </form>


</div>
</body>
</html>
