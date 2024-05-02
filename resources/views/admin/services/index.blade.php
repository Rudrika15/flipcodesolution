@extends('admin.layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="row justify-content-between align-items-center w-100">
            <div class="col">
                <h2>Service Management</h2>
            </div>
            <div class="col-auto">
                <a class="btn btn-success" href="{{ route('services.create') }}">Create New Service</a>
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

            <th>Title</th>

            <th>Photo</th>

            <th>Detail</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($services as $service)

        <tr>

            <td>{{ ++$i }}</td>
            <td>{{ $service->title }}</td>
            <td><img src="{{asset('serviceImages')}}/{{ $service->photo }}" class="img-thumbnail" height="150px"
                    width="150px" alt="">
            <td>{!! $service->detail !!}</td>
            </td>

            <td>

                <form action="{{ route('services.destroy',$service->id) }}" enctype="multipart/form-data" method="POST">

                    <a class="btn btn-info" href="{{ route('services.show',$service->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('services.edit',$service->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>
            </td>
        </tr>

        @endforeach

    </table>

</div>



{!! $services->links() !!}



@endsection