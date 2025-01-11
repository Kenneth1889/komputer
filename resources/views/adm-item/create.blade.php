<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Create Items</title>
</head>
<body>
  @section('main-content')
  <section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
      <div class="card">
        <div class="card-body p-4">
          <form method="post" action="{{route('item-store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="name">Category Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter new item name" autofocus required>
            </div>
            <div class="form-group">
              <label for="photo">Photo</label>
              <input type="file" class="form-control" id="Photo" name="photo" accept="image/*></input>
            </div>
            <div class="form-group">
              <label for="price">Price</label>
              <input type="text" class="form-control" id="Price" name="price" placeholder="200,000" min="0" autofocus required>
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <textarea class="form-control" id="Description" name="description" placeholder="Enter your description" autofocus required></textarea>
            </div>
            <div class="form-group m-1 mb-2"> </div>
            <label for="description">Category</label>
            <select class="form-select" aria-label="category" name="category_id" required>
              <option selected>Open this select menu</option>
              @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->id}} - {{$category->name}}</option>
              @endforeach
            </select>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection
</body>
</html>@extends('layouts.master')


