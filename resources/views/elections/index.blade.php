@extends('layouts.admin')


@section('content')

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-align-justify"></i>
                <a class="btn btn-success btn-spinner btn-sm pull-right m-b-0" href="" role="button"><i class="fa fa-plus"></i></a>
            </div>
            <div class="card-body" >
                <span>
                    <button type="button" class="btn btn-success"><i class="fa fa-search"></i></button>
                </span>

                <div class="col-sm-auto pull-right form-group ">
                    <select class="form-control" >

                        <option value="10">10</option>
                        <option value="25">25</option>

                    </select>
                </div>


                <table class="table table-bordered">
                    <thead>
                        <tr>

                            <th> Election_name</th>
                            <th>Active</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($elections as $election)
                        <tr>
                            <td> <a href="{{route('election.show',$election->id)}}">
                                {{$election->name}}</a></td>
                            <td> {{$election->active ? 'Yes' : 'No'}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>


                </div>
            </div>
        </div>
    </div>

@endsection
