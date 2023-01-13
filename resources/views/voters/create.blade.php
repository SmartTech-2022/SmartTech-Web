@extends('layouts.admin')

@section('content')

   {{-- <div class="container my-5 py-5"> --}}
    <div class="row">
        @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif

    <div class="col-md-6 offset-md-2">

        <div class="card p-2 m-3 md-shadow">
    <h6>   Please Create a Voter Account  </h6>
           <form method="POST" action="{{ route('voter.store') }}" class="border py-3 px-3 rounded" enctype="multipart/form-data">

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
            {{-- <div class="mb-3">

                <input class="form-control @error('voterId') is-invalid @enderror" name="voterId"  id="voterId"placeholder="voterId">

                @error('voterId')
                    <small class="text-danger"> {{ $message }}</small>
                @enderror
            </div> --}}


            <hr>
            <button type="submit" class="btn btn-outline-success w-30 btn-lg">Submit</button><br><br>

        </form>
    </div>
   </div>
   </div>
@endsection

