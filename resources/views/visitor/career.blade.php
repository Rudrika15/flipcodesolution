@extends('visitor.layouts.app')
@section('title')
    <title>Flipcode solutions | Career</title>
@endsection
@section('content')
<div class="bg-image parallax">
    
        <div class="container">

            <div style="display: flex;justify-content: center;font-size:larger;">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/" style="color: #606060">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Career</li>
                    </ol>
                </nav>

            </div>
        </div>
    </div>
    <!-- breadcrumb end -->



    <!-- portfolio design  -->
    <div class="container-fluid py-3 bg-light">
        <div class="container py-3">
            <div class="row py-2 bg-light">
                <div class="col-md-12">
                    <!-- careers form -->
                    <div class="bg-light">
                        <div class="col-md-6 offset-md-3 mt-5">
                            <div class="section-head col-sm-12">
                                <h4><span>Open Position for Intern</span></h4>
                            </div>

                            <form accept-charset="UTF-8" action="{{ route('career_send_mail') }}" method="POST"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}
                                
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <div class="form-group mt-2">
                                    <label for="exampleInputName">Full Name</label>
                                    <input type="text" name="fullname" class="form-control" id="exampleInputName"
                                        placeholder="Enter your name and surname">
                                    <span class="text-danger">
                                        @error('fullname')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="exampleInputEmail1" required="required">Email address</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter your email address">
                                    <span class="text-danger">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="inputAddress">Address</label>
                                    <textarea name="address" placeholder="address" class="form-control"></textarea>
                                    <span class="text-danger">
                                        @error('address')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <div>

                                    <div class="form-row mt-2">
                                        <div class="d-flex gap-3">
                                            <div class="form-group  col-sm-12 col-lg-6">
                                                <label for="inputCity">City</label>
                                                <input type="text" name="city" class="form-control" id="inputCity"
                                                    placeholder="City">
                                                <span class="text-danger">
                                                    @error('city')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                            <div class="form-group  col-sm-12 col-lg-6">
                                                <label for="inputZip">Zip</label>
                                                <input type="text" name="zip" class="form-control"
                                                    id="inputZip" placeholder="Enter Pincode">
                                                <span class="text-danger">
                                                    @error('zip')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="example-phoneNo-input" class="col-md-2 col-form-label">Telephone</label>
                                        <div class="col-md-10 d-flex" style="width:100%">    
                                            <input class="rounded-start border border-1 text-primary" style="width: 50px" name="code" type="text" value="+91"
                                                id="example-phoneNo-input">
                                            <input class="form-control" name="phoneNo" type="tel" 
                                                id="example-tel-input">  
                                        </div>
                                        <span class="text-danger">
                                            @error('phoneNo')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                    <div class="form-group mt-2">
                                        <label class="mr-4">Upload your CV:</label>
                                        <input type="file" name="file">
                                        <span class="text-danger">
                                            @error('file')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>

                                    <button type="submit" class="btn mt-3 submit-org-btn">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- portfolio design  -->
@endsection
