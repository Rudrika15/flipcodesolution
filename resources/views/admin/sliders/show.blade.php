@extends('admin.layouts.app')

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb d-flex justify-content-between align-items-center">

        <div class="pull-left">

            <h2> Show Sliders </h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('sliders.index') }}"> Back</a>

        </div>

    </div>

</div>



<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Type:</strong>

            {{ $sliders->type }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group">

            <strong>Photo:</strong>

            {{ $sliders->photo }}

        </div>

    </div>

</div>

@endsection