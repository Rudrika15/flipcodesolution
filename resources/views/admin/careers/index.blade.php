@extends('admin.layouts.app')

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb d-flex justify-content-between align-items-center">

        <div class="pull-left">

            <h2>Career View</h2>

        </div>

      

    </div>

</div>



@if ($message = Session::get('success'))

<div class="alert alert-success">

    <p>{{ $message }}</p>

</div>

@endif

<div class="mt-3">

    <table class="table table-bordered">

        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>City</th>
            <th>Pin Code</th>
            <th>Contact No</th>
            <th>Uploaded CV</th>
        </tr>

        @foreach ($careers as $career)

        <tr>
            <td>{{ $career->fullname }}</td> 
            <td>{{ $career->email }}</td>
            <td>{{ $career->address }}</td>
            <td>{{ $career->city }}</td>
            <td>{{ $career->zip }}</td>
            <td>{{ $career->phoneNo }}</td>
            <td>{{ $career->file }}</td>
          
        </tr>

        @endforeach

    </table>

</div>

{!! $careers->links() !!}



@endsection