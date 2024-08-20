@extends('visitor.layouts.app')
@section('title')
    <title>Flipcode solutions | Career</title>
@endsection
@section('content')
    <div class="container-fluid ">
        <div class="image-fluid header-career">
            <div class="headercontent">
                <h1 class="display-4 fw-light">Do What You Love Everyday</h1>
                <p class="lead">Want to join the Flipcode team? If you have a passion & want to work for a rapidly growing
                    IT company, check out the listings below or send your resume to
                    <span>career@flipcodesolutions.com</span>
                </p>
                <a href="#joblistings" class="btn btn-success btn-lg">View Job Openings</a>
            </div>
        </div>

        <!-- Benefits Section -->
        <div class="benefitscontainer container-fluid my-5 text-center">
            <h2 class="display-3">Benefits Joining Us</h2>
            <ul class="list-unstyled row ">
                <li class="col-md-3">
                    <i class="bi bi-cup-hot" style="font-size:3rem; color: #ff6600;"></i>
                    <h3 class="h5 text-uppercase">Coffee & Tea </h3>
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
            <h2 class="display-3 text-center" style="color:#ff6600">Current Openings</h2>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Web Developer Job Card -->
                        <div class="job-card">
                            <div class="row">
                                <div class="col-md-8">
                                    <h3>Web Developer</h3>
                                    <p><strong>Experience:</strong> 3+ years</p>
                                    <p><strong>Available Position:</strong> 5</p>
                                </div>
                                <div class="col-md-4 text-end">
                                    <button class="btn btn-danger rounded-pill"
                                        onclick="toggleDescription('web-developer-description')">View More</button>
                                    <a href="#" class="btn btn-dark rounded-pill" data-bs-toggle="modal"
                                        data-bs-target="#applyModal" data-position="Web Developer">Apply Now</a>
                                </div>
                            </div>
                            <div id="web-developer-description" class="job-description mt-3">
                                <p><strong>Roles and Responsibilities:</strong></p>
                                <ul>
                                    <li>Develop and maintain web applications.</li>
                                    <li>Collaborate with design and development teams.</li>
                                    <li>Write clean, scalable code.</li>
                                    <li>Test and debug web applications.</li>
                                </ul>
                                <p><strong>Requirements:</strong></p>
                                <ul>
                                    <li>Proficiency in Java and Springboot.</li>
                                    <li>Strong Understanding of Software Development..</li>
                                </ul>
                                <p><strong>Qualifications:</strong></p>
                                <ul>
                                    <li>Master degree in computer field</li>
                                </ul>
                                <p><strong>Job Type:</strong></p>
                                <ul>
                                    <li>Full-Time , Permenant</li>
                                </ul>
                                <p><strong>Timing:</strong></p>
                                <ul>
                                    <li>Flexible timing.</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Graphic Designer Job Card -->
                        <div class="job-card mt-4">
                            <div class="row">
                                <div class="col-md-8">
                                    <h3>Graphic Designer</h3>
                                    <p><strong>Experience:</strong> Interns</p>
                                    <p><strong>Available Position:</strong> 2</p>
                                </div>
                                <div class="col-md-4 text-end">
                                    <button class="btn btn-danger rounded-pill"
                                        onclick="toggleDescription('graphic-designer-description')">View More</button>
                                    <a href="#" class="btn btn-dark rounded-pill" data-bs-toggle="modal"
                                        data-bs-target="#applyModal" data-position="Graphic Designer">Apply Now</a>
                                </div>
                            </div>
                            <div id="graphic-designer-description" class="job-description mt-3">
                                <p><strong>Roles and Responsibilities:</strong></p>
                                <ul>
                                    <li>Create visual concepts and designs.</li>
                                    <li>Work with clients to determine design requirements.</li>
                                    <li>Develop graphics for websites, advertisements, and other media.</li>
                                    <li>Ensure all designs meet brand guidelines.</li>
                                </ul>
                                <p><strong>Requirements:</strong></p>
                                <ul>
                                    <li>Proficiency in Java and Springboot.</li>
                                    <li>Strong Understanding of Software Development..</li>
                                </ul>
                                <p><strong>Qualifications:</strong></p>
                                <ul>
                                    <li>Master degree in computer field</li>
                                </ul>
                                <p><strong>Job Type:</strong></p>
                                <ul>
                                    <li>Full-Time , Permenant</li>
                                </ul>
                                <p><strong>Timing:</strong></p>
                                <ul>
                                    <li>Flexible timing.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="job-card mt-4">
                            <div class="row">
                                <div class="col-md-8">
                                    <h3>Software Tester</h3>
                                    <p><strong>Experience:</strong> 1+ years</p>
                                    <p><strong>Available Position:</strong> 1</p>
                                </div>
                                <div class="col-md-4 text-end">
                                    <button class="btn btn-danger rounded-pill"
                                        onclick="toggleDescription('software-tester-description')">View More</button>
                                    <a href="#" class="btn btn-dark rounded-pill" data-bs-toggle="modal"
                                        data-bs-target="#applyModal" data-position="Software Tester">Apply Now</a>
                                </div>
                            </div>
                            <div id="software-tester-description" class="job-description mt-3">
                                <p><strong>Roles and Responsibilities:</strong></p>
                                <ul>
                                    <li>Conduct manual and automated testing.</li>
                                    <li>Identify, record, and track bugs.</li>
                                    <li>Collaborate with developers to ensure quality standards.</li>
                                    <li>Prepare and present test reports.</li>
                                </ul>
                                <p><strong>Requirements:</strong></p>
                                <ul>
                                    <li>Proficiency in Java and Springboot.</li>
                                    <li>Strong Understanding of Software Development..</li>
                                </ul>
                                <p><strong>Qualifications:</strong></p>
                                <ul>
                                    <li>Master degree in computer field</li>
                                </ul>
                                <p><strong>Job Type:</strong></p>
                                <ul>
                                    <li>Full-Time , Permenant</li>
                                </ul>
                                <p><strong>Timing:</strong></p>
                                <ul>
                                    <li>Flexible timing.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="job-card mt-4">
                            <div class="row">
                                <div class="col-md-8">
                                    <h3>Java Developer</h3>
                                    <p><strong>Experience:</strong> 4+ years</p>
                                    <p><strong>Available Position:</strong> 2</p>
                                </div>
                                <div class="col-md-4 text-end">
                                    <button class="btn btn-danger rounded-pill"
                                        onclick="toggleDescription('java-developer-description')">View More</button>
                                    <a href="#" class="btn btn-dark rounded-pill" data-bs-toggle="modal"
                                        data-bs-target="#applyModal" data-position="Java Developer">Apply Now</a>
                                </div>
                            </div>
                            <div id="java-developer-description" class="job-description ">
                                <p><strong>Roles and Responsibilities:</strong></p>
                                <ul>
                                    <li>Design and implement Java applications.</li>
                                    <li>Write reusable, testable, and efficient code.</li>
                                    <li>Participate in code reviews and maintain code quality.</li>
                                    <li>Collaborate with cross-functional teams to define and achieve project goals.
                                    </li>
                                </ul>
                                <p><strong>Requirements:</strong></p>
                                <ul>
                                    <li>Proficiency in Java and Springboot.</li>
                                    <li>Strong Understanding of Software Development..</li>
                                </ul>
                                <p><strong>Qualifications:</strong></p>
                                <ul>
                                    <li>Master degree in computer field</li>
                                </ul>
                                <p><strong>Job Type:</strong></p>
                                <ul>
                                    <li>Full-Time , Permenant</li>
                                </ul>
                                <p><strong>Timing:</strong></p>
                                <ul>
                                    <li>Flexible timing.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- Modal -->
        <div class="modal fade" id="applyModal" tabindex="-1" aria-labelledby="applyModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="applyModalLabel">Apply for Position</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="fullName" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="fullName">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phone">
                            </div>
                            <div class="mb-3">
                                <label for="position" class="form-label">Position Applied For</label>
                                <select class="form-select" id="position">
                                    <option value="">Select Position</option>
                                    <option value="Web Developer">Web Developer</option>
                                    <option value="Graphic Designer">Graphic Designer</option>
                                    <option value="Software Tester">Software Tester</option>
                                    <option value="Java Developer">Java Developer</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="resume" class="form-label">Upload Resume</label>
                                <input type="file" class="form-control" id="resume">
                            </div>
                            <div class="mb-3">
                                <label for="coverLetter" class="form-label">Cover Letter</label>
                                <textarea class="form-control" id="coverLetter" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-dark">Submit Application</button>
                        </form>
                        <div id="successMessage" class="alert alert-success d-none mt-3">
                            Thanks for applying! We will contact you soon...
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- portfolio design  -->
    @endsection
