@extends('layouts.master')

@section('main-content')
  <section class="py-5">
    <div class="card">
      <div class="card-header">
        <a href="{{route("buat")}}" role="button" class="btn btn-success">Add New Category </a>
      </div>
      <div class="card-body p-4">
        <table class="table table-striped" id="tbl-adm-category">
          <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
          @foreach($categories as $category)
            <tr>
              <td>{{$category->id}}</td>
              <td>{{$category->name}}</td>
              <td>
                <a href ="{{route('cat-edit', ['category'=> $category->id])}}" class="btn btn-info" role="button">Edit</a>
              </form>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
    </div>
    </div>
  </section>
@endsection
