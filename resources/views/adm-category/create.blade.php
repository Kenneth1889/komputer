<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Create Category</title>
</head>
<body>
  @extends('layouts.master2')

@section('main-content')
  <section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
      <div class="card">
        <div class="card-body p-4">
          <form method="post" action="{{route('toko')}}">
            @csrf
            <div class="form-group">
              <label for="name">Category Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter new category name" autofocus required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection

</body>
</html>
