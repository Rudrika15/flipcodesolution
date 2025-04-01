@extends('admin.layouts.app')

@section('content')
    <div class="row">

        <div class="col-lg-12 margin-tb d-flex justify-content-between align-items-center">

            <div>

                <h2>Show Blog</h2>

            </div>

            <div>

                <a class="btn btn-primary" href="{{ route('blogs.index') }}"> Back</a>

            </div>

        </div>

    </div>



    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Title:</strong>

                {{ $blogs->title }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Photo:</strong>

                {{ $blogs->photo }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Detail:</strong>

                {!! $blogs->detail !!}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Slug:</strong>

                {{ $blogs->slug }}

            </div>

        </div>

        {{-- <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Tech ID:</strong>

            {{ $blogs->techid }}

        </div>

    </div> --}}

    </div>
@endsection
