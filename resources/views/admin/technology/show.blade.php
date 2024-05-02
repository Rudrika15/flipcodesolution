@extends('admin.layouts.app')

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb d-flex justify-content-between align-items-center">

        <div class="pull-left">

            <h2> Show Technology </h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('technology.index') }}"> Back</a>

        </div>

    </div>

</div>



<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Title:</strong>

            {{ $technology->techname }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Photo:</strong>

            {{ $technology->photo }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Detail:</strong>

            {!! $technology->detail !!}

        </div>

    </div>

</div>

@endsection