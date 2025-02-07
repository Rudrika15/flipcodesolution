@extends('admin.layouts.app')

@section('content')
    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Portfolio Management</h2>

            </div>

            <div class="d-flex justify-content-end">

                <a class="btn btn-success" href="{{ route('portfolios.create') }}"> Create New Portfolio </a>

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

                <th>Tech ID</th>

                <th>Name</th>

                <th>Photo</th>

                <th>Link</th>

                <th>Detail</th>

                <th width="280px">Action</th>

            </tr>

            @foreach ($portfolios as $portfolio)
                <tr>

                    <td>{{ ++$i }}</td>
                    <td>{{ $portfolio->techid }}</td>
                    <td>{{ $portfolio->name }}</td>
                    <td><img src="{{ asset('portfolioImages') }}/{{ $portfolio->photo }}" class="img-thumbnail"
                            height="150px" width="150px" alt="portfolioImage"></td>
                    <td>{{ $portfolio->link }}</td>
                    <td>{!! $portfolio->detail !!}</td>

                    <td>

                        <form action="{{ route('portfolios.destroy', $portfolio->id) }}" method="POST">

                            <a class="btn btn-info" href="{{ route('portfolios.show', $portfolio->id) }}">Show</a>

                            <a class="btn btn-primary" href="{{ route('portfolios.edit', $portfolio->id) }}">Edit</a>

                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>

                        </form>
                    </td>
                </tr>
            @endforeach

        </table>

    </div>



    {!! $portfolios->links() !!}
@endsection
