@extends('layouts.app')
@section('content')

    <div class="row">
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif





        <div class="col-md-6 offset-md-3">
            <div class="card p-5 m-3 sm-shadow">
                <form method="post" action="{{ route('login') }}" enctype="multipart/form-data">
                    @csrf



                    <label for="VoterId" class="form-label">VoterId</label>
                    <input type="VoterId" id="VoterId" name="VoterId" class="form-control mb-3" value=""
                        placeholder="VoterId">

                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control mb-3" value=""
                        placeholder="">
                    @error('password')
                        <small class="alert alert-danger">{{ $message }}</small>
                    @enderror







                    <button class=" btn-primary align-center"> Login</button><br>


                </form>
            </div>
        </div>



    @endsection
