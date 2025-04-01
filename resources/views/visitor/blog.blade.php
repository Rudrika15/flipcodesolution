@extends('visitor.layouts.app')
@section('title')
    <title>Flipcode solutions | Blog</title>
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
                    <?php
                    // Extract only the first two paragraphs
                    $paragraphs = explode('</p>', $blog->detail);
                    $limitedContent = implode('</p>', array_slice($paragraphs, 0, 1)) . '</p>';
                    ?>

                    <p>{!! $limitedContent !!}</p>

                    @if (count($paragraphs) > 1)
                        <div class="pill-nav my-2">
                            <a href="/blog-detail/{{ $blog->slug }}">Read More</a>
                        </div>
                    @endif


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

                    <?php
                    // Extract only the first two paragraphs
                    $paragraphs = explode('</p>', $blog->detail);
                    $limitedContent = implode('</p>', array_slice($paragraphs, 0, 1)) . '</p>';
                    ?>

                    <p>{!! $limitedContent !!}</p>

                    @if (count($paragraphs) > 1)
                        <div class="pill-nav my-2">
                            <a href="/blog-detail/{{ $blog->slug }}">Read More</a>
                        </div>
                    @endif
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('blogImages') }}/{{ $blog->photo }}" class="card-img-top" alt={{ $blog->title }}>
                </div>
                <?php } ?>
            </div>
        @endforeach
    </div>
@endsection
