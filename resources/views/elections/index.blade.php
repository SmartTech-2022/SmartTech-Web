@extends('layout.admin')


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
@endsection
