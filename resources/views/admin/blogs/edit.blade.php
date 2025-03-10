@extends('admin.layouts.app')



@section('content')
    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="d-flex justify-content-between align-items-center">

                <h2>Edit Blog</h2>

                <a class="btn btn-primary" href="{{ route('blogs.index') }}"> Back</a>

            </div>

        </div>

    </div>




    <form action="{{ route('blogs.update', $blogs->id) }}" enctype="multipart/form-data" method="POST">

        @csrf

        @method('PUT')

        <div class="card">

            <div class="card-body">

                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-12">

                        <div class="form-group">

                            <strong>Title:</strong>

                            <input type="text" name="title" value="{{ $blogs->title }}" class="form-control"
                                placeholder="Title">

                            @if ($errors->has('title'))
                                <span class="text-danger">{{ $errors->first('title') }}</span>
                            @endif

                        </div>

                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">

                        <div class="form-group">

                            <strong>Photo:</strong>

                            <input type="file" value="{{ $blogs->photo }}" accept="image/*" name="photo"
                                class="form-control" placeholder="Photo">

                            @if ($errors->has('photo'))
                                <span class="text-danger">{{ $errors->first('photo') }}</span>
                            @endif

                        </div>

                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">

                        <div class="form-group">

                            <strong>Detail:</strong>

                            <textarea class="ckeditor form-control" style="height:150px" name="detail" placeholder="Detail">{{ $blogs->detail }}</textarea>

                            @if ($errors->has('detail'))
                                <span class="text-danger">{{ $errors->first('detail') }}</span>
                            @endif

                        </div>

                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">

                        <div class="form-group">

                            {{-- <strong>Slug:</strong> --}}

                            {{-- <input type="text" value="{{$blogs->slug}}" name="slug" class="form-control"
                            placeholder="Slug"> --}}

                            @if ($errors->has('slug'))
                                <span class="text-danger">{{ $errors->first('slug') }}</span>
                            @endif

                        </div>

                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">

                        <div class="form-group">

                            <strong>Technology:</strong>

                            {{-- <input type="text" name="techid" class="form-control" placeholder="Tech ID"> --}}

                            <select class="form-control" name="techid">
                                @foreach ($technology as $tec)
                                    <option value="{{ $tec->id }}"> {{ $tec->techname }}</option>
                                @endforeach
                            </select>

                            @if ($errors->has('techid'))
                                <span class="text-danger">{{ $errors->first('techid') }}</span>
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
