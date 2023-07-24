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
    <form action="{{route('admin.store')}}" method="post">
        @method('PUT')
        @csrf
        <div class="container row">
            <div class="col-6 mt-4">
                <select class="form-control" name="book_id">
                    @foreach($books as $book)
                        <option
                                value="{{$book->id}}" {{in_array($book->id,old('book',[]))?'selected' : ''}}>{{$book->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-6 mt-4">
                <input type="text" class="form-control" name="discount" placeholder="Discount">
            </div>
        </div>
            <button type="submit" class="btn btn-primary mt-4 ml-3">Submit</button>
    </form>
@foreach($discounts as $discount)
    <div class="d-flex">
    <h3 class="mt-4">Book: {{$discount->book->name}}</h3>
    <h3 class="mt-4 ml-3">Discount: {{$discount->discount}}%</h3>
    </div>
@endforeach
</body>
</html>
