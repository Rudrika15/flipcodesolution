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
                    <li class="breadcrumb-item active" style="color: #606060" aria-current="page">Blog</li>
                </ol>
            </nav>

        </div>
    </div>
</div>
<!-- breadcrumb end -->
<div class="container py-5">
    <div class="row py-5">
        <div class="col-md-12 py-2">

        </div>
    </div>
    <div class="row py-5">
        <div class="col-md-12 ">
            <div class="card p-3">
                <img src="{{ asset('blogImages') }}/{{ $blogs->photo }}" class="card-img-top" alt="{{$blogs->title}}">
                <div class="card-body">
                    <h1>{{$blogs->title}}</h1>
                    <hr>
                    <p>{!!$blogs->detail!!}
                    </p>

                    {{-- <p>{{$blog->details}}</p> --}}
                    <?php
                                    $inputTime = \Carbon\Carbon::parse($blogs->created_at);
                                    $time = $inputTime->diffForHumans($currentTime);
                                ?>
                    <p>
                        <i class="bi bi-calendar3"></i><span class="px-3">{{$time}}</span>
                        {{-- <i class="bi bi-calendar3"></i><span class="px-3">{{$blog->created_at}}</span> --}}
                    </p>

                </div>
            </div>
        </div>
    </div>
    <div class="row py-2">
        <h3 class="py-3">Leave A Message</h3>
        <form>
            <div class="mb-3">
                <label class="form-label">Name </label>
                <input type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Email </label>
                <input type="email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Message</label>
                <textarea class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>



@endsection