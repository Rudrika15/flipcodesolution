@extends('admin.layouts.app')



@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb d-flex justify-content-between align-items-center">

        <div class="d-flex justify-content-between align-items-center">

            <h2>Edit Contact</h2>

        </div>

        <div class="d-flex justify-content-end mb-3">

            <a class="btn btn-primary" href="{{ route('contacts.index') }}"> Back</a>

        </div>

    </div>

</div>


<form action="{{ route('contacts.update',$contacts->id) }}" method="POST">

    @csrf

    @method('PUT')

    <div class="card">

        <div class="card-body">

            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="form-group">

                        <strong>Key:</strong>

                        <input type="text" value="{{$contacts->key}}" name="key" class="form-control" placeholder="Key">

                        @if ($errors->has('key'))

                        <span class="text-danger">{{ $errors->first('key') }}</span>

                        @endif

                    </div>

                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="form-group">

                        <strong>Value:</strong>

                        <input type="text" name="value" value="{{$contacts->value}}" class="form-control"
                            placeholder="Value">

                        @if ($errors->has('value'))

                        <span class="text-danger">{{ $errors->first('value') }}</span>

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

@endsection