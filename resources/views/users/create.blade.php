@extends('layouts.app')

@section('content')
   {{-- <div class="container-fluid  py-3"> --}}
    <div class="row">
        @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif



     <div class="col-md-6 offset-md-2">

    <div class="card p-2 m-3 md-shadow">
        <h6>  Register User </h6>
        <form method="POST" action="{{ route('user.store') }}" class="border py-3 px-3 rounded" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                @csrf
                <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror" id="name" placeholder="Name" value="">
                @error('name')
                    <small class="text-danger"> {{ $message }}</small>
                @enderror
            </div>
            <hr>
            <div class="mb-3">

                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"  id="email" placeholder="Email" value="">
                @error('email')
                    <small class="text-danger"> {{ $message }}</small>
                @enderror
            </div>
            <hr>
             <div class="mb-3">

                <input class="form-control @error('phone number') is-invalid @enderror" name="phone number"  id="phone number"placeholder="Phone number">

                @error('phone number')
                    <small class="text-danger"> {{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">

                <input  type="password" class="form-control @error('password') is-invalid @enderror" name="password"  id="password"placeholder="Password">

                @error('password')
                    <small class="text-danger"> {{ $message }}</small>
                @enderror
            </div>



            <hr>
            <div class="mb-3">
                <label for="image" class="form-label">Upload a Passport  </label><br>
                <input type="file" name="fileToUpload" id="image">
            </div>


            <hr>
            <button type="submit" class="btn btn-outline-success w-30 btn-lg">Register</button><br><br>

        </form>
    </div>
   </div>
   </div>
@endsection

