@extends('admin.layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="row justify-content-between align-items-center w-100">
            <div class="col">
                <h2>Technology Management</h2>
            </div>
            <div class="col-auto">
                <a class="btn btn-success" href="{{ route('technology.create') }}">Create New Technology</a>
            </div>
        </div>
    </div>
</div>



@if ($message = Session::get('success'))

<div class="alert alert-success">

    <p>{{ $message }}</p>

</div>

@endif

<div class="mt-3">

    <table class="table table-bordered">

        <tr>
            <th>ID</th>

            <th>Tech Name</th>

            <th>Photo</th>

            <th>Details</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($technology as $technology)

        <tr>

            <td>{{ ++$i }}</td>
            <td>{{ $technology->techname }}</td>
            <td><img src="{{asset('technologyImages')}}/{{ $technology->photo }}" class="img-thumbnail" height="150px"
                    width="150px" alt=""></td>
            <td>{!! $technology->detail !!}</td>
            <td>

                <form action="{{ route('technology.destroy',$technology->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('technology.show',$technology->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('technology.edit',$technology->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>
            </td>
        </tr>

        @endforeach

    </table>

</div>



{{-- {!! $technology->links() !!} --}}



@endsection