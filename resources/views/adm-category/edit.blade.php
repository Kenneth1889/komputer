@extends('layouts.master')

@section('main-content')
  <section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
      <div class="card">
        <div class="card-body p-4">
          <form method="post" action="{{route('cat-update', ['category'=> $category->id])}}">
            @csrf
            <div class="form-group">
              <label for="name">Category Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter new category name" autofocus required value="{{$category->name}}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection
