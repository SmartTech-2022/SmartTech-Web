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
    <h6>   Add Elections  </h6>

        <form method="POST" action="{{ route('election.store') }}" class="border py-3 px-3 rounded" enctype="multipart/form-data">

            @csrf

            <div class="mb-3">

                <input class="form-control @error('election_name') is-invalid @enderror" name="election_name"  id="election_name"placeholder="Election_name">

                @error('election_name')
                    <small class="text-danger"> {{ $message }}</small>
                @enderror
            </div>
            <div class="mt-3">
                <label for="active" class="form-label">Active</label>
                <select name="active" id="" class="form-control">
                    <option value="">Is the election  active?</option>
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>
            <hr>



            <hr>
            <button type="submit" class="btn btn-outline-success w-30 btn-lg">Add</button><br><br>

        </form>
    </div>
   </div></div>
@endsection

