@extends('layouts.admin')
@section('content')

   <div class="container my-5 py-5">
    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif


    <h5>   Add Elections  </h5>

        <form method="POST" action="{{ route('election.store') }}" class="border py-3 px-3 rounded" enctype="multipart/form-data">



            <div class="mb-3">

                <input class="form-control @error('election_name') is-invalid @enderror" name="election_name"  id="election_name"placeholder="election_name">

                @error('election_name')
                    <small class="text-danger"> {{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">

                <input type="text" name="status" class="form-control @error('status') is-invalid @enderror"  id="status" placeholder="status" value="">
                @error('status')
                    <small class="text-danger"> {{ $message }}</small>
                @enderror
            </div>
            <hr>



            <hr>
            <button type="submit" class="btn btn-outline-info w-30 btn-lg">Submit</button><br><br>

        </form>
    </div>
@endsection

