@extends('admin.layouts.app')



@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="row justify-content-between align-items-center w-100">
                <div class="col">
                    <h2>Add New Technology</h2>
                </div>
                <div class="col-auto">
                    <a class="btn btn-primary" href="{{ route('technology.index') }}">Back</a>
                </div>
            </div>
        </div>
    </div>



    <form action="{{ route('technology.store') }}" enctype="multipart/form-data" method="POST">

        @csrf

        <div class="card">

            <div class="card-body">

                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-12">

                        <div class="form-group">

                            <strong>Tech Name:</strong>

                            <input type="text" name="techname" class="form-control" placeholder="Technology Name">

                            @if ($errors->has('techname'))
                                <span class="text-danger">{{ $errors->first('techname') }}</span>
                            @endif

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

                    <div class="col-xs-12 col-sm-12 col-md-12">

                        <div class="form-group">

                            <strong>Detail:</strong>

                            <textarea class="ckeditor form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>

                            @if ($errors->has('detail'))
                                <span class="text-danger">{{ $errors->first('detail') }}</span>
                            @endif

                        </div>

                    </div>

                    <div class="col-md-12 text-center mt-3">

                        <button type="submit" class="btn btn-primary">Submit</button>

                    </div>

                </div>

            </div>

        </div>


    </form>

    <!-- Include CKEditor library -->
    {{-- <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        // Initialize CKEditor on the textarea with ID 'editor'
        CKEDITOR.replace('editor');
    });
</script> --}}
@endsection
