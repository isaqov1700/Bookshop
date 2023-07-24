<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="row">
    <div class="col-6">

        @foreach($books as $book)
            <h3>Kitob nomi: {{$book->name}}</h3>
            <h3>Mualif: {{$book->author_name}}</h3>
            <h3>Qoshimcha malumot: {{$book->description}}</h3>
            <h3>Nashr yili: {{$book->publish_year}}</h3>
            <h3>Janr: {{$book->category->title}}</h3>
        <form action="{{route('book_save')}}" method="get">
            <input type="hidden" name="book_id" value="{{$book->id}}">
            <input type="hidden" name="user_id" value="{{$user->id}}">
            <input type="hidden" name="orders" value="1">
            <h3>Shop: <button type="submit" class="btn btn-primary mt-2">Save</button>
            </h3>
        </form>
            <br>
        @endforeach

    </div>
    <form action="{{route("search")}}">
        <div class="col-12 mt-4">
            <input type="text" class="form-control" name="name" placeholder="Search..">
            <button type="submit" class="btn btn-primary mt-3">Search</button>
        </div>
    </form>
</div>
</body>
</html>
