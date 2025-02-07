@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="row justify-content-between align-items-center w-100">
                <div class="col">
                    <h2>Slider Management</h2>
                </div>
                <div class="col-auto">
                    <a class="btn btn-success" href="{{ route('sliders.create') }}">Create New Slider</a>
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

                <th>Type</th>

                <th>Photo</th>

                <th width="280px">Action</th>

            </tr>

            @foreach ($sliders as $slider)
                <tr>

                    <td>{{ ++$i }}</td>
                    <td>{{ $slider->type }}</td>
                    <td><img src="{{ asset('sliderImages') }}/{{ $slider->photo }}" class="img-thumbnail" height="150px"
                            width="150px" alt="sliderImage">
                    </td>

                    <td>

                        <form action="{{ route('sliders.destroy', $slider->id) }}" method="POST">

                            <a class="btn btn-info" href="{{ route('sliders.show', $slider->id) }}">Show</a>

                            <a class="btn btn-primary" href="{{ route('sliders.edit', $slider->id) }}">Edit</a>

                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>

                        </form>
                    </td>
                </tr>
            @endforeach

        </table>

    </div>



    {!! $sliders->links() !!}
@endsection
