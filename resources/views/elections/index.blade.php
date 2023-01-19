@extends('layouts.admin')


@section('content')
<div class="container-fluid px-4 px-lg-5 mt-5">
  @if (session()->has('messaged'))
                    <div class="alert alert-danger">
                        {{ session()->get('messaged') }}
                    </div>
                @endif
    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

       @foreach ($elections as $election )
       <div class="col mb-5">
            <div class="card h-100 bg-dark text-light" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{ $election->name }}</h5>
                  <p class="card-text">{{$election->active}}</p>
                  <a href="{{ route('election.edit', $election->id) }}" class="btn btn-primary">edit</a>
                  <a href="{{ route('election.destroy', $election->id) }}" class="btn btn-danger" onclick="confirm('Do you really want to delete?')">delete</a>
                </div>
              </div>
               </div>
            @endforeach
    </div>
    <div class="d-flex justify-content-center">
          {!! $elections->links() !!}
    </div>
</div>




{{-- this --}}
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-align-justify"></i>
                <a class="btn btn-success btn-spinner btn-sm pull-right m-b-0" href="{{ }}" role="button"><i class="fa fa-plus"></i></a>
            </div>
            <div class="card-body" >
                <span>
                    <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
                </span>

                <div class="col-sm-auto pull-right form-group ">
                    <select class="form-control" >

                        <option value="10">10</option>
                        <option value="25">25</option>

                    </select>
                </div>


                <table class="table table-hover table-listing">
                    <thead>
                        <tr>

                            <th is='sortable' :column="'Election_name'"></th>
                            <th is='sortable' :column="'Active'"></th>



                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ elections.Election_name}}</td>
                            <td>{{ election.Active }}</td>


                        </tr>
                    </tbody>
                </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
