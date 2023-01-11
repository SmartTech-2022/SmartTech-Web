
@section('content')

   <div class="container my-5 py-5">
    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif


    <h5>   Please Create a Voter Account  </h5>

        <form method="POST" action="{{ route('voter.store') }}" class="border py-3 px-3 rounded" enctype="multipart/form-data">

            <div class="mb-3">
                @csrf
                <input type="text" name="name" class="form-control  @error('slug') is-invalid @enderror" id="name" placeholder="name" value="">
                @error('name')
                    <small class="text-danger"> {{ $message }}</small>
                @enderror
            </div>
            <hr>
            <div class="mb-3">

                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"  id="email" placeholder="email" value="">
                @error('email')
                    <small class="text-danger"> {{ $message }}</small>
                @enderror
            </div>
            <hr>
            <div class="mb-3">

                <input class="form-control @error('voterId') is-invalid @enderror" name="voterId"  id="voterId"placeholder="voterId">

                @error('voterId')
                    <small class="text-danger"> {{ $message }}</small>
                @enderror
            </div>


            <hr>
            <button type="submit" class="btn btn-outline-info w-30 btn-lg">Submit</button><br><br>

        </form>
    </div>
@endsection

