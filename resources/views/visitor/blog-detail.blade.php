@extends('visitor.layouts.app')
@section('title')
    <title>Flipcode solutions | Blog detail</title>
@endsection
@section('meta')
    <meta name="description" content="At Flipcode Solutions, we provide a wide range of services such as web development, software development, e-commerce solutions, digital marketing, and IT consulting.">
@endsection
@section('content')
    <div class="image-fluid header-career">
        <div class="headercontent">
            <h1 class="display-4 fw-light">Our Insights</h1>
            <p class="lead">Stay updated with the latest trends, expert opinions, and in-depth analysis from the world of technology, business, and innovation.
                Explore our articles to gain valuable insights and stay ahead in the digital landscape.
                For any inquiries, reach out to us at <span>contact@flipcodesolutions.com</span>.
            </p>
            <a href="#blog" class="btn btn-dark btn-lg">Read Our Blogs</a>
        </div>
    </div>
    <!-- breadcrumb end -->
    <div class="container py-5">

        <div class="row pb-5">
            <div class="col-md-12 ">
                <h1 class="fs-1 fw-bold">{{ $blogs->title }}</h1>
                <div class="card p-3">
                    <img src="{{ asset('blogImages') }}/{{ $blogs->photo }}" class="card-img-top h-50 " alt="{{ $blogs->title }}">
                    <div class="card-body">

                        <hr>
                        <p>{!! $blogs->detail !!}
                        </p>

                        {{-- <p>{{$blog->details}}</p> --}}
                        <?php
                        $inputTime = \Carbon\Carbon::parse($blogs->created_at);
                        $time = $inputTime->diffForHumans($currentTime);
                        ?>
                        <p>
                            <i class="bi bi-calendar3"></i><span class="px-3">{{ $time }}</span>
                            {{-- <i class="bi bi-calendar3"></i><span class="px-3">{{$blog->created_at}}</span> --}}
                        </p>

                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="row py-2">
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
        </div> --}}
    </div>
@endsection
