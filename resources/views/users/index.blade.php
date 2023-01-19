@extends('layouts.app')

@section('content')


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
                                <option value="100">100</option>
                            </select>
                        </div>


                        <table class="table table-hover table-listing">
                            <thead>
                                <tr>
                                    <th is='sortable' :column="'id'"></th>
                                    <th is='sortable' :column="'Name'"></th>
                                    <th is='sortable' :column="'Email'"></th>
                                    <th is='sortable' :column="'Voter_id'"></th>
                                    <th is='sortable' :column="'Phone number'"></th>


                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ users.id }}</td>
                                    <td>{{ users.Name }}</td>
                                    <td>{{ users.Email }}</td>
                                    <td>{{ users.Voter_id }}</td>
                                    <td>{{ users.Phone_number }}</td>

                                </tr>
                            </tbody>
                        </table>


	                    </div>
                    </div>
                </div>
            </div>
        </div>


@endsection
