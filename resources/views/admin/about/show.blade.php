@extends('admin.layouts.app')

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb d-flex justify-content-between align-items-center">

        <div>

            <h2>Show About</h2>

        </div>

        <div>

            <a class="btn btn-primary" href="{{ route('abouts.index') }}"> Back</a>

        </div>

    </div>

</div>



<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Type:</strong>

            {{ $abouts->type }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>About:</strong>

            {!! $abouts->about !!}

        </div>

    </div>

</div>

@endsection