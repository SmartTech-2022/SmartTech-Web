@extends('layouts.admin')
@section('content')

<div class="container my-5 py-5">
 @if (session()->has('message'))
 <div class="alert alert-success">
     {{ session()->get('message') }}
 </div>
 @endif


 <h5>   Add a Contestant   </h5>

     <form method="POST" action="{{ route('contestant.store') }}" class="border py-3 px-3 rounded" enctype="multipart/form-data">

         <div class="mb-3">
             @csrf
             <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror" id="name" placeholder="name" value="">
             @error('name')
                 <small class="text-danger"> {{ $message }}</small>
             @enderror
         </div>
         <hr>
         <div class="mb-3">

             <textarea type="text" name="about" class="form-control @error('about') is-invalid @enderror"  id="about" placeholder="about" value="">About Contestant</textarea>
             @error('about')
                 <small class="text-danger"> {{ $message }}</small>
             @enderror
         </div>
         <hr>
         <div class="mb-3">

             <input class="form-control @error('election_name') is-invalid @enderror" name="election_name"  id="election_name"placeholder="election_name">

             @error('election_name')
                 <small class="text-danger"> {{ $message }}</small>
             @enderror
         </div>


         <hr>
         <button type="submit" class="btn btn-outline-info w-30 btn-lg">Submit</button><br><br>

     </form>
 </div>
@endsection

