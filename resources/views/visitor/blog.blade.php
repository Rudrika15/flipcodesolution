@extends('visitor.layouts.app')
@section('title')
    <title>Flipcode solutions | Blog</title>
@endsection
@section('meta')
    <meta name="description"
        content="At Flipcode Solutions, we provide a wide range of services such as web development, software development, e-commerce solutions, digital marketing, and IT consulting.">
@endsection
@section('content')
    <div class="bg-image"
        style="background: url({{ asset('img/banner3.jpg') }}) no-repeat center;
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
                <h1>Our Awesome Blog Page</h1>


            </div>
        </div>
        <?php
        $count = 0;
        ?>
        @foreach ($blogs as $blog)
            <?php
            $count = $count + 1;
            
            ?>
            <div class="row py-5">
                <?php
                if($count%2 == 0){
                ?>
                <div class="col-md-4">
                    <img src="{{ asset('blogImages') }}/{{ $blog->photo }}" class="card-img-top" alt={{ $blog->title }}>
                </div>
                <div class="col-md-8">
                    <h2>{{ $blog->title }} </h2>
                    {{-- <p>{{$blog->details}}</p> --}}
                    <?php
                    $inputTime = \Carbon\Carbon::parse($blog->created_at);
                    $time = $inputTime->diffForHumans($currentTime);
                    ?>
                    <p>
                        <i class="bi bi-calendar3"></i><span class="px-3">{{ $time }}</span>
                        {{-- <i class="bi bi-calendar3"></i><span class="px-3">{{$blog->created_at}}</span> --}}
                    </p>

                    <a href="/blog-detail/{{ $blog->slug }}" class="btn btn-primary">Read More</a>


                </div>
                <?php } else {?>

                <div class="col-md-8">
                    <h2>{{ $blog->title }} </h2>
                    {{-- <p>{{$blog->details}}</p> --}}
                    <?php
                    $inputTime = \Carbon\Carbon::parse($blog->created_at);
                    $time = $inputTime->diffForHumans($currentTime);
                    ?>
                    <p>
                        <i class="bi bi-calendar3"></i><span class="px-3">{{ $time }}</span>
                        {{-- <i class="bi bi-calendar3"></i><span class="px-3">{{$blog->created_at}}</span> --}}
                    </p>

                    <a href="/blog-detail/{{ $blog->slug }}" class="btn btn-primary">Read More</a>

                </div>
                <div class="col-md-4">
                    <img src="{{ asset('blogImages') }}/{{ $blog->photo }}" class="card-img-top"
                        alt={{ $blog->title }}>
                </div>
                <?php } ?>
            </div>
        @endforeach
    </div>
@endsection
