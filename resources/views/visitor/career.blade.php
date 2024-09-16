@extends('visitor.layouts.app')
@section('title')
    <title>Flipcode solutions | Career</title>
@endsection
@php
    $jsonData = [
        [
            'title' => 'React.js ',
            'detail' =>
                'We are looking for a passionate intern to join our front-end development team. The ideal candidate should have a strong interest in building responsive and dynamic web applications.',
            'role' => 'Frontend Developer',
            'mode' => 'Full Time',
            'responsibility' =>
                'Develop and maintain user-facing features using React.js, Collaborate with back-end developers and designers to implement user interfaces, Write reusable and efficient code, Troubleshoot and debug issues, Stay updated with the latest trends in front-end development.',
            'experience' =>
                'Basic understanding of JavaScript, HTML, and CSS. Experience with React.js is a plus but not required. Eagerness to learn and grow in a fast-paced environment.',
            'qualification' =>
                'Pursuing or recently completed a degree in Computer Science, Software Engineering, or a related field. Strong analytical and problem-solving skills. Excellent communication and teamwork abilities.',
            'status' => 'Open',
        ],
        [
            'title' => 'Laravel ',
            'detail' =>
                'We are seeking a motivated intern to join our back-end development team. The ideal candidate should have a strong interest in building scalable and robust web applications using the Laravel framework.',
            'role' => 'Backend Developer',
            'mode' => 'Full Time',
            'responsibility' =>
                'Assist in developing and maintaining back-end components of web applications using Laravel, Collaborate with front-end developers to integrate user-facing elements, Write clean, secure, and well-documented code, Debug and resolve technical issues, Participate in code reviews and team meetings.',
            'experience' =>
                'Basic understanding of PHP, MySQL, and RESTful APIs. Experience with Laravel is a plus but not required. Willingness to learn and take on challenges in a dynamic work environment.',
            'qualification' =>
                'Currently pursuing or recently completed a degree in Computer Science, Software Engineering, or a related field. Strong logical thinking and problem-solving skills. Good communication and collaboration abilities.',
            'status' => 'Open',
        ],
        [
            'title' => 'Flutter ',
            'detail' =>
                'We are looking for a passionate intern to join our mobile development team. The ideal candidate should have a strong interest in building high-performance mobile applications using the Flutter framework.',
            'role' => 'Mobile Developer',
            'mode' => 'Full Time',
            'responsibility' =>
                'Assist in the development and maintenance of mobile applications using Flutter, Collaborate with designers and backend developers to create seamless user experiences, Write clean and efficient code, Troubleshoot and debug issues across different devices and platforms, Stay updated with the latest trends in mobile app development.',
            'experience' =>
                'Basic understanding of Dart programming language and Flutter framework. Experience with mobile development (iOS/Android) is a plus but not required. Eagerness to learn and adapt in a fast-paced environment.',
            'qualification' =>
                'Currently pursuing or recently completed a degree in Computer Science, Software Engineering, or a related field. Strong analytical and problem-solving skills. Excellent communication and teamwork abilities.',
            'status' => 'Open',
        ],
        [
            'title' => 'Node.js Backend ',
            'detail' =>
                'We are looking for a passionate intern to join our backend development team. The ideal candidate should have a strong interest in building scalable and efficient server-side applications using Node.js.',
            'role' => 'Backend Developer',
            'mode' => 'Full Time',
            'responsibility' =>
                'Assist in the development and maintenance of server-side logic using Node.js, Collaborate with front-end developers to integrate user-facing elements with server-side logic, Write clean, efficient, and reusable code, Implement security and data protection measures, Troubleshoot and debug server-side issues, Stay updated with the latest trends in backend development.',
            'experience' =>
                'Basic understanding of JavaScript, Node.js, and RESTful APIs. Experience with databases such as MongoDB or MySQL is a plus but not required. Willingness to learn and grow in a fast-paced environment.',
            'qualification' =>
                'Currently pursuing or recently completed a degree in Computer Science, Software Engineering, or a related field. Strong problem-solving and analytical skills. Good communication and collaboration abilities.',
            'status' => 'Open',
        ],
        [
            'title' => 'React Native ',
            'detail' =>
                'We are seeking a motivated intern to join our mobile app development team. The ideal candidate should have a strong interest in building responsive and dynamic mobile applications using React Native.',
            'role' => 'Mobile Developer',
            'mode' => 'Full Time',
            'responsibility' =>
                'Assist in the development and maintenance of mobile applications using React Native, Collaborate with designers and backend developers to create seamless user experiences, Write clean, efficient, and reusable code, Debug and troubleshoot issues on different mobile platforms (iOS/Android), Stay updated with the latest trends in mobile development.',
            'experience' =>
                'Basic understanding of JavaScript, React, and React Native. Familiarity with mobile development is a plus but not required. Eagerness to learn and adapt in a fast-paced environment.',
            'qualification' =>
                'Currently pursuing or recently completed a degree in Computer Science, Software Engineering, or a related field. Strong problem-solving and analytical skills. Good communication and teamwork abilities.',
            'status' => 'Open',
        ],
    ];
@endphp

@section('content')
    <div class="container-fluid">
        <div class="image-fluid header-career">
            <div class="headercontent">
                <h1 class="display-4 fw-light">Do What inspires you everyday</h1>
                <p class="lead">
                    Want to join the Flipcode team? If you have a passion & want to work for a rapidly growing IT company,
                    check out the listings below or send your resume to <span>career@flipcodesolutions.com</span>
                </p>
                <a href="#joblistings" class="btn btn-dark btn-lg">View Job Openings</a>
            </div>
        </div>

        <!-- Benefits Section -->
        <div class="benefitscontainer container my-5 text-center" data-aos="flip-up" data-aos-duration="1000">
            <div class="section-head col-sm-12">
                <h4><span>Perks Of</span> Joining </h4>
            </div>

            <ul class="list-unstyled row">
                <li class="col-md-3">
                    <i class="bi bi-cup-hot" style="font-size:3rem; color: #ff6600;"></i>
                    <h3 class="h5 text-uppercase">Coffee & Tea</h3>
                    <p>Get the juices flowing every morning with complimentary coffee and tea.</p>
                </li>
                <li class="col-md-3">
                    <i class="bi bi-calendar-heart" style="font-size:3rem; color: #ff6600;"></i>
                    <h3 class="h5 text-uppercase">Paid Time Off</h3>
                    <p>We believe that if you work hard, you get to play hard too. Enjoy paid time off in addition to all
                        main holidays.</p>
                </li>
                <li class="col-md-3">
                    <i class="bi bi-clipboard" style="font-size:3rem; color: #ff6600;"></i>
                    <h3 class="h5 text-uppercase">Casual Attire</h3>
                    <p>We keep it classy yet casual, so feel free to wear what you feel comfortable in!</p>
                </li>
                <li class="col-md-3">
                    <i class="bi bi-people" style="font-size:3rem; color: #ff6600;"></i>
                    <h3 class="h5 text-uppercase">Community</h3>
                    <p>We host happy hours, employee appreciation events, and some awesome team building events.</p>
                </li>
            </ul>
        </div>

        <!-- Job Openings Section -->
        <div class="current-openings my-5" id="joblistings">
            <div class="section-head col-sm-12">
                <h4><span>Open Positions</h4>
            </div>
            <div class="container">
                <div class="row">
                    @foreach ($jsonData as $index => $data)
                        @if ($data['status'] === 'Open')
                            <div class="col-md-12" data-aos="zoom-in" data-aos-duration="1000">
                                <div class="job-card">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h4>{{ $data['title'] }}</h4>
                                        </div>
                                        <div class="col-md-4 text-end">
                                            <button class="btn btn-danger rounded-pill" data-title="{{ $data['title'] }}"
                                                onclick="toggleDescription('job-description-{{ $index }}')">View
                                                More</button>
                                            <a href="#" class="btn btn-dark rounded-pill" data-bs-toggle="modal"
                                                data-bs-target="#applyModal" data-position="{{ $data['title'] }}">Apply
                                                Now</a>
                                        </div>
                                    </div>
                                    <div id="job-description-{{ $index }}" class="job-description mt-3"
                                        style="display: none;">
                                        <div class="row">
                                            <div class="col-md-10">
                                                <ul>
                                                    <li>
                                                        <p><strong>Experience:</strong> 0-1 years</p>
                                                    </li>
                                                    <li>
                                                        <p><strong>Skills:</strong> {{ $data['experience'] }}</p>
                                                    </li>
                                                    <li>
                                                        <p><strong>Qualification:</strong> {{ $data['qualification'] }}</p>
                                                    </li>
                                                    <li>
                                                        <p><strong>Responsibility:</strong> {{ $data['responsibility'] }}
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p><strong>Mode:</strong> {{ $data['mode'] }}</p>
                                                    </li>
                                                    <li>
                                                        <p><strong>Status:</strong> {{ $data['status'] }}</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="applyModal" tabindex="-1" aria-labelledby="applyModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="applyModalLabel">Apply for Position</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="applicationForm" enctype="multipart/form-data" method="POST"
                            action="{{ route('career_send_mail') }}">
                            @csrf
                            <!-- Full Name -->
                            <div class="mb-1">
                                <label for="fullName" class="form-label">Full Name</label>
                                <input type="text" name="fullname"
                                    class="form-control @error('fullname') is-invalid @enderror" id="fullName"
                                    value="{{ old('fullname') }}">
                                <span class="text-danger" id="fullnameError">
                                    @error('fullname')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <!-- Email -->
                            <div class="mb-1">
                                <label for="email" class="form-label">Email address</label>
                                <input type="text" name="email"
                                    class="form-control @error('email') is-invalid @enderror" id="email"
                                    value="{{ old('email') }}">
                                <span class="text-danger" id="emailError">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <!-- Phone Number -->
                            <div class="mb-1">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" name="phoneNo"
                                    class="form-control @error('phoneNo') is-invalid @enderror" id="phoneNo"
                                    value="{{ old('phoneNo') }}">
                                <span class="text-danger" id="phoneNoError">
                                    @error('phoneNo')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <!-- City -->
                            <div class="mb-1">
                                <label for="city" class="form-label">City</label>
                                <input type="text" name="city"
                                    class="form-control @error('city') is-invalid @enderror" id="city"
                                    value="{{ old('city') }}">
                                <span class="text-danger" id="cityError">
                                    @error('city')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <!-- Position Applied For -->
                            <div class="mb-1">
                                <label for="position" class="form-label">Position Applied For</label>
                                <select class="form-select @error('position') is-invalid @enderror" id="position"
                                    name="position">
                                    <option value="">Select Position</option>
                                    @foreach ($jsonData as $data)
                                        @if ($data['status'] === 'Open')
                                            <option value="{{ $data['title'] }}"
                                                {{ old('position') == $data['title'] ? 'selected' : '' }}>
                                                {{ $data['title'] }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                <span class="text-danger" id="positionError">
                                    @error('position')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <!-- Upload Resume -->
                            <div class="mb-1">
                                <label for="resume" class="form-label">Upload Resume</label>
                                <input type="file" name="file"
                                    class="form-control @error('file') is-invalid @enderror" id="file">
                                <span class="text-danger" id="fileError">
                                    @error('file')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <button type="submit" class="btn btn-dark">Submit Application</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Toggle job description visibility with smooth animation
            function toggleDescription(descriptionId) {
                var description = $('#' + descriptionId);
    
                // Slide toggle with animation
                description.slideToggle('slow', function() {
                    // Optionally, you can change the button text when the description is toggled
                    var buttonText = description.is(':visible') ? 'View Less' : 'View More';
                    $('button[data-title="' + descriptionId.replace('job-description-', '') + '"]').text(buttonText);
                });
            }
    
            // Attach click event to dynamically created elements
            $('.btn-danger').click(function() {
                var descriptionId = $(this).attr('onclick').match(/'([^']+)'/)[1]; // Extracting the ID from onclick attribute
                toggleDescription(descriptionId);
            });
        });
    </script>
    
    <script>
        $(document).ready(function () {
            // On form submit
            $('#applicationForm').on('submit', function (event) {
                event.preventDefault();
    
                // Clear previous errors
                $('.text-danger').text('');
    
                var submitButton = $(this).find('button[type="submit"]');
                var originalButtonText = submitButton.html(); // Store the original button text
                submitButton.prop('disabled', true).html('Sending...');
    
                var formData = new FormData(this);
    
                $.ajax({
                    url: $(this).attr('action'),
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        Swal.fire({
                            title: 'Thank You!',
                            text: 'Thanks for Applying! We will contact you soon...',
                            icon: 'success',
                            confirmButtonText: 'OK'
                        }).then(() => {
                            $('#applicationForm')[0].reset();
                        });
                    },
                    error: function (xhr) {
                        if (xhr.status === 422) { // Laravel validation error
                            var errors = xhr.responseJSON.errors;
                            
                            // Loop through errors and display them below respective input fields
                            $.each(errors, function (key, value) {
                                $('#' + key + 'Error').text(value[0]);
                            });
                        } else {
                            Swal.fire({
                                title: 'Error!',
                                text: 'An error occurred while submitting the form. Please try again.',
                                icon: 'error',
                                confirmButtonText: 'OK'
                            });
                        }
                    },
                    complete: function () {
                        submitButton.prop('disabled', false).html(originalButtonText);
                    }
                });
            });
        });
    </script>
    
@endsection
