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
 <h6>   Add a Contestant   </h6>

     <form method="POST" action="{{ route('contestant.store') }}" class="border py-3 px-3 rounded" enctype="multipart/form-data">

         <div class="mb-3">
             @csrf
             <input type="text" name="contestant_name" class="form-control  @error('contestant_name') is-invalid @enderror" id="contestant_name" placeholder="Contestant_name" value="">
             @error('contestant_name')
                 <small class="text-danger"> {{ $message }}</small>
             @enderror
         </div>
         <hr>
         <div class="mb-3">

             <textarea type="text" name="about" class="form-control @error('about') is-invalid @enderror"  id="about" placeholder="About Contestant" value="">About Contestant</textarea>
             @error('about')
                 <small class="text-danger"> {{ $message }}</small>
             @enderror
         </div>
         <hr>
         <div class="mb-3">
            {{-- <label for="elections" class="form-label">Select Election</label> --}}

            <select name="election_name" id="" class="form-control">
                <option value="">Select  Election</option>
                {{-- <option value="">{{['election' => $election]}}</option> --}}


            </select>

             @error('election_name')
                 <small class="text-danger"> {{ $message }}</small>
             @enderror
         </div>


         <hr>
         <button type="submit" class="btn btn-outline-success w-30 btn-lg">Add</button><br><br>

     </form>
 </div>
</div>
</div>
@endsection
