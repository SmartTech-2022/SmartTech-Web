@extends('layouts.app')
@section('content')

    <div class="row">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif





        <div class="col-md-6 offset-md-3">
            <div class="card p-2 m-3 md-shadow">
                <h6> Login Admin</h6>

                <form method="post" action="{{ route('user.store') }}" class="border py-3 px-3 rounded" enctype="multipart/form-data">
                    @csrf
                      <div class="mb-3">

                    {{-- <label for="VoterId" class="form-label">VoterId</label> --}}
                    <input type="email" id="email" name="email" class="form-control " value=""
                        placeholder="Email">
                        @error('email')
                        <small class="text-danger"> {{ $message }}</small>
                    @enderror
                </div>
                <hr>
                <div class="mb-3">
                    {{-- <label for="password" class="form-label">Password</label> --}}
                    <input type="password" id="password" name="password" class="form-control " value=""
                        placeholder="Password">
                    @error('password')
                        <small class="alert alert-danger">{{ $message }}</small>
                    @enderror







                    <hr>
                    <button type="submit" class="btn btn-outline-success w-30 btn-lg">Login</button><br><br>


                </form>
            </div>
        </div>
    </div>



    @endsection
