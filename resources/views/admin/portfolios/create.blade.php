@extends('admin.layouts.app')



@section('content')
    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="d-flex justify-content-between align-items-center">

                <h2>Add New Portfolio</h2>

            </div>

            <div class="d-flex justify-content-end mb-3">

                <a class="btn btn-primary" href="{{ route('portfolios.index') }}"> Back</a>

            </div>

        </div>

    </div>



    <form action="{{ route('portfolios.store') }}" enctype="multipart/form-data" method="POST">

        @csrf

        <div class="card">

            <div class="card-body">

                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-12">

                        <div class="form-group">

                            <strong>Tech ID:</strong>

                            <input type="text" name="techid" class="form-control" placeholder="Tech ID">

                            @if ($errors->has('techid'))
                                <span class="text-danger">{{ $errors->first('techid') }}</span>
                            @endif

                        </div>

                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">

                        <div class="form-group">

                            <strong>Name:</strong>

                            <input type="text" name="name" class="form-control" placeholder="Name">

                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif

                        </div>

                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">

                        <div class="form-group">

                            <strong>Photo:</strong>

                            <input type="file" name="photo" class="form-control" enctype="multipart/form-data"
                                placeholder="Photo">

                            @if ($errors->has('photo'))
                                <span class="text-danger">{{ $errors->first('photo') }}</span>
                            @endif

                        </div>

                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">

                        <div class="form-group">

                            <strong>Link:</strong>

                            <input type="text" name="link" class="form-control" placeholder="Link">

                            @if ($errors->has('link'))
                                <span class="text-danger">{{ $errors->first('link') }}</span>
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
