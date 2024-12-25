@extends('layout.master') <!-- mengambil layout -->

@section('add-css') 
<style>
</style>
@endsection
@section('content')

<section class="py-5 text-center container">
    <div class="row py-lg-5">

    <div class="row p-2">
    <a href="{{route('home')}}" role="button" class="btn btn-link">Back to Student List Album</a>
</div>
    <form method='post' action="{{route('siswa-store')}}">
      @csrf
      <div class="form-group">
    <label for="nisId">NIS</label>
    <input type="text" class="form-control" id="nisId" placeholder="Student ID" name ="nis" maxlength="10">
   </div>
  <div class="form-group">
    <label for="nameId">Name</label>
    <input type="text" class="form-control" id="nameId" placeholder="Student's Name" name="nama" required>
  </div>
  <div class="form-group mb-2">
    <label for="nameId">Gambar Profil</label>
    <input type="file" class="form-control" id="fileId" placeholder="Student's Profile" name="profile_picture" required>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


      </div>
    </div>
@endsection