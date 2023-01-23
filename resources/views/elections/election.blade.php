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
                </div class="mb-2">


                <table class="table table-bordered">
                    <thead>
                        <tr>

                            <th> Contestant Name </th>
                            <th>Votes</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($elections->contestants as $election)
                        <tr>
                            <td>
                                {{$election->name}}</td>
                            <td> {{$election->contestant_vote}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>


                </div>
            </div>
        </div>
    </div>

@endsection
