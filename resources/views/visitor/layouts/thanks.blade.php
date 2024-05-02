@extends('visitor.layouts.app')
@section('title')
<title>Flipcode solutions | Blog detail</title>
@endsection
@section('content')

<div class="bg-image" style="background: url({{ asset('img/banner3.jpg') }}) no-repeat center;
    padding: 30px 0px 30px;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    position: relative;
    display: grid;
    align-items: center;
    text-align: center;
    z-index: 0;
            height: 20vh">
    <div class="container">

        <div style="display: flex;justify-content: center;">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item" style="color: #606060"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active" style="color: #606060" aria-current="page">Contact</li>
                </ol>
            </nav>

        </div>
    </div>
</div>
<!-- breadcrumb end -->
<div class="container">
<div>
    <h2> thank you </h2>
</div>
</div>



@endsection