@extends('layouts.master')

@section('main-content')
  <section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
      <div class="row gx-4 gx-lg-5 align-items-center">
        <div class="col-md-6">
          <img class="card-img-top mb-5 mb-md-0" src="{{ asset('storage/' . $item->photo) }}"
          alt="..."/>
        </div>
        <div class="col-md-6">
          <div class="small mb-1">Original</div>
          <h1 class="display-5 fw-bolder">{{ $item->name }}</h1>
          <div class="fs-5 mb-5">
            <span>Rp {{ $item->price }}</span>
          </div>
          <p class="lead">{{ $item->description }}</p>
          <div class="d-flex">
            <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1"
                   style="max-width: 3rem"/>
            <button class="btn btn-outline-dark flex-shrink-0" type="button">
              <i class="bi-cart-fill me-1"></i>
              <a href="{{ url('')}}">Add to cart</a>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection