<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Items Admin</title>
</head>
<body>
  @section('main-content')
  <section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
    </div>
    <div class="card">
      <div class="card-header">
        <a href="{{route("create")}}" role="button" class="btn btn-success">Add New Items</a>
      </div>
      <div class="card-body p-4">
        <table class="table table-striped" id="tbl-adm-category">
          <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Photo</th>
            <th>Price</th>
            <th>Description</th>
            <th>Category</th>
          </tr>
          </thead>
          <tbody>
          @foreach($items as $item)
            <tr>
              <td>{{$item->id}}</td>
              <td>{{$item->name}}</td>
              <td>
                <img src="{{ asset('storage/'.$item->photo) }}" width="200px">
              </td>
              <td>{{$item->price}}</td>
              <td>{{$item->description}}</td>
              <td>{{ $item->category->name }}</td>
              {{-- {{$item->category->id}}  --}}
            </tr>
          @endforeach
          </tbody>
        </table>
    </div>
    </div>
  </section>
@endsection
</body>
</html>@extends('layouts.master')


