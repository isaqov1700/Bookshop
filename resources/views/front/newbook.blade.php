<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container" >
<form action="{{route('book.store')}}" method="post">
    @method('PUT')
    @csrf
    <div class="row mt-4">
        <div class="col-6">
            <input type="text" class="form-control" name="name" placeholder="Book name">
        </div>
        <div class="col-6">
            <input type="text" class="form-control" name="author_name" placeholder="Author name">
        </div>
        <div class="col-6 mt-4">
            <input type="text" class="form-control" name="publish_year" placeholder="Publish Year">
        </div>
        <div class="col-6 mt-4">
            <input type="text" class="form-control" name="price" placeholder="Price">
        </div>

        <div class="col-6 mt-4">
            <input type="text" class="form-control" name="number" placeholder="Book number">
        </div>
        <div class="col-6 mt-4">
            <input type="file" class="form-control" name="image" placeholder="Image">
        </div>
        <div class="col-6 mt-4">
            <textarea type="text" class="form-control" name="description" placeholder="Description"></textarea>
        </div>
        <div class="col-6 mt-4">
            <select class="form-control" name="category_id" id="courses">
                @foreach($categorys as $category)
                    <option
                        value="{{$category->id}}" {{in_array($category->id,old('category',[]))?'selected' : ''}}>{{$category->title}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script></body>
</html>
