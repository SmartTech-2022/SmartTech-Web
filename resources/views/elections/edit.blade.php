@extends('layouts.admin')


@section('content')

    <div class="container-fluid">
        <div class="card">
        <div class="row">
            <div class="col-6 mx-auto my-5 border border-dark p-5 bg-dark text-light">

                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('election.update', $election->id) }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <h1 class="text-center">Edit Election</h1>
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-lable">name</label>
                        <input type="text" placeholder="enter name" class="form-control" name="name" value="{{ $election->name }}">
                    </div>

                    <div class="mb-3">
                        <label for="active" class="form-label">active</label>
                        <select name="active" id="" class="form-control" value="{{ $election->active }}">
                            <option value="">is the election currently active?</option>
                            <option value="0">NO</option>
                            <option value="1">YES</option>
                        </select>
                    </div>

                    <div class="mb-3 mt-4">
                        <button type='submit' class="btn btn-success w-100">update election</button>
                    </div>


            </div>

            </form>
        </div>
        </div>

    </div>
    </div>

@endsection
