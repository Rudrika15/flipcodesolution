@extends('admin.layouts.app')



@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="row justify-content-between align-items-center w-100">
            <div class="col">
                <h2>Edit Slider</h2>
            </div>
            <div class="col-auto">
                <a class="btn btn-primary" href="{{ route('sliders.index') }}">Back</a>
            </div>
        </div>
    </div>
</div>

<form action="{{ route('sliders.update',$sliders->id) }}" enctype="multipart/form-data" method="POST">

    @csrf

    @method('PUT')

    <div class="card">

        <div class="card-body">

            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="form-group">

                        <strong>Type:</strong>

                        <select name="type" class="form-control">

                            <option value="home">Home Page</option>
                            <option value="inner">Inner Page</option>

                        </select>


                        @if ($errors->has('type'))

                        <span class="text-danger">{{ $errors->first('type') }}</span>

                        @endif

                    </div>

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Photo:</strong>

                    <input type="file" name="photo" class="form-control" placeholder="Photo">

                    @if ($errors->has('photo'))

                    <span class="text-danger">{{ $errors->first('photo') }}</span>

                    @endif

                </div>

            </div>

            <div class="col-md-12 text-center mt-3">

                <button type="submit" class="btn btn-primary">Submit</button>

            </div>

        </div>

    </div>

</form>

@endsection