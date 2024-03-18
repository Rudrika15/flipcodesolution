@extends('admin.layouts.app')

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb mt-3">

        <div class="d-flex justify-content-between align-items-center">

            <h2>About Management</h2>

            <a class="btn btn-success" href="{{ route('abouts.create') }}"> Create New About</a>

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

            <th>Type</th>

            <th>About</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($abouts as $about)

        <tr>

            <td>{{ $about->type }}</td>
            <td>{!! $about->about !!}</td>

            <td>

                <form action="{{ route('abouts.destroy',$about->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('abouts.show',$about->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('abouts.edit',$about->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>
            </td>
        </tr>

        @endforeach

    </table>

</div>



{!! $abouts->links() !!}



@endsection