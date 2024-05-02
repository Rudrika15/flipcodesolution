@extends('admin.layouts.app')



@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb mt-3">

        <div class="d-flex justify-content-between align-items-center">

            <h2>Add New About</h2>

            <a class="btn btn-primary" href="{{ route('abouts.index') }}"> Back</a>

        </div>

    </div>

</div>



<form action="{{ route('abouts.store') }}" method="POST">

    @csrf


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

                    <strong>About:</strong>

                    <textarea class="ckeditor form-control" style="height:150px" id="editor" name="about"
                        placeholder="About"></textarea>



                    @if ($errors->has('about'))

                    <span class="text-danger">{{ $errors->first('about') }}</span>

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
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        // Initialize CKEditor on the textarea with ID 'editor'
        CKEDITOR.replace('editor');
    });
</script>

@endsection