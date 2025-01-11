@extends('layouts.master2')

@section('main-content')
  <section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
      <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
        @foreach($items as $item)
        <div class="col mb-5">
          <div class="card h-100">
            <!-- Product image-->
            <img class="card-img-top" src="{{ asset('storage/'.$item->photo) }}" 
                 alt="..."/>
            <!-- Product details-->
            <div class="card-body p-2">
              <div class="text-center">
                <!-- Product name-->
                <h5 class="fw-bolder">{{ $item->name}}</h5>
                <!-- Product price-->
                Rp {{$item->price}}</p>
              </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
              <div class="text-center"><a href ="{{route('showitem', ['item'=> $item->id])}}" class="btn btn-info" role="button">View Details</a>
              </div>
            </div>
          </div>
        </div>
      </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection
