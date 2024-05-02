@extends('admin.layouts.app')

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb d-flex justify-content-between align-items-center">

        <div class="pull-left">

            <h2>Contact View</h2>

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
            <th>Subject</th>
            <th>Message</th>
        </tr>

        @foreach ($contacts as $contact)

        <tr>
            <td>{{ $contact->name }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->subject }}</td>
            <td>{{ $contact->message }}</td>
        </tr>

        @endforeach

    </table>

</div>

{!! $contacts->links() !!}



@endsection