@extends('admin.layouts.app')

@section('content')
    <div class="row">

        <div class="col-lg-12 margin-tb mt-3">

            <div class="d-flex justify-content-between align-items-center">

                <h2>Blog Management</h2>

                <a class="btn btn-success" href="{{ route('blogs.create') }}"> Create New Blog</a>

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

                <th>Title</th>

                <th>Photo</th>

                <th>Details</th>


                <th>Tech ID</th>

                <th width="280px">Action</th>

            </tr>

            @foreach ($blogs as $blog)
                <tr>

                    <td>{{ $blog->title }}</td>
                    <td><img src="{{ asset('blogImages') }}/{{ $blog->photo }}" class="img-thumbnail" height="150px"
                            width="150px" alt="blogImage"></td>
                    <td>{!! $blog->detail !!}</td>

                    <td>{{ $blog->tech->techname }}</td>

                    <td>

                        <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST">

                            <a class="btn btn-info" href="{{ route('blogs.show', $blog->id) }}">Show</a>

                            <a class="btn btn-primary" href="{{ route('blogs.edit', $blog->id) }}">Edit</a>

                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>

                        </form>
                    </td>
                </tr>
            @endforeach

        </table>

    </div>



    {!! $blogs->links() !!}
@endsection
