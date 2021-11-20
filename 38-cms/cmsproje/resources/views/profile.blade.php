@extends('layout')

@section('form')
<section class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Update your Profile</h2>
        </div>

        <div class="row mt-1 d-flex justify-content-center" data-aos="fade-right" data-aos-delay="100">

            <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">

                <form action="{{ route('shout.saveprofile') }}" method="POST" role="form" class="php-email-form" enctype="multipart/form-data" >
                    @csrf

                    <div class="form-group mt-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" value="{{ Auth::user()->name }}" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" value="{{ Auth::user()->email }}" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="nickname">Nick Name</label>
                        <input type="text" name="nickname" id="nickname" value="{{ Auth::user()->nickname }}" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="image">Nick Name</label>
                        <input type="file" name="image" id="image" value="{{ Auth::user()->image }}" class="form-control">
                    </div>

                     <!-- End About info-->
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Post Message</button></div>
                </form>

            </div>

        </div>

    </div>
</section><!-- End Contact Section -->

@endsection

@section('status')
<!-- ======= My Profile Status Section Start Now ======= -->
<div class="container">
    <div class="resume-inner">
        <div class="row">
            <div class="col-lg-4 col-12">
                <div class="dashbord-sidebar">
                    <h3>Manage Account</h3>
                    <ul>

                        <li><a class="active" href="resume.html"><i class="bi bi-arrow-down-up"></i> My Resume</a>
                        </li>
                        <li><a href="bookmarked.html"><i class="bi bi-bookmark"></i>Bookmarked Jobs</a></li>
                        <li><a href="notifications.html"><i class="bi bi-bell"></i> Notifications <span
                                    class="notifi">5</span></a></li>
                        <li><a href="manage-applications.html"><i class="bi bi-envelope"></i> Manage
                                Applications</a></li>
                        <li><a href="manage-resumes.html"><i class="bi bi-bookmarks"></i> Manage Resumes</a></li>
                        <li><a href="job-alerts.html"><i class="bi bi-briefcase"></i> Job Alerts</a></li>
                        <li><a href="change-password.html"><i class="bi bi-key"></i> Change Password</a></li>
                        <li><a href="index.html"><i class="bi bi-arrow-bar-up"></i> Sign Out</a></li>
                    </ul>
                </div>
            </div>


            <div class="col-lg-8 col-12">
                <div class="inner-content">

                    <div class="profile-top personal-top-content">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-12">
                                <div class="name-head">
                                    <a class="mb-2" href="#"><img class="circle-54" src="{{ Auth::user()->avatar }} "
                                            alt=""></a>
                                    <h4><a class="name" href="#">{{ Auth::user()->name }}</a></h4>
                                    <p><a class="deg" href="#">Designer & Developer</a></p>
                                    <ul class="social  d-flex align-items-center flex-wrap">
                                        <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                                        <li><a href="#"> <i class="bi bi-twitter"></i> </a></li>
                                        <li><a href="#"> <i class="bi bi-linkedin"></i> </a></li>
                                        <li><a href="#"> <i class="bi bi-twitter"></i> </a></li>
                                        <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-12">
                                <div class="content-right">
                                    <h5 class="title-main ">Contact Info</h5>
                                    <div class="list-right">
                                        <div class="single-list">
                                            <h5 class="title">Location</h5>
                                            <p>New York , USA</p>
                                        </div>

                                        <div class="single-list">
                                            <h5 class="title">E-mail</h5>
                                            <p>{{ Auth::user()->email }}</p>
                                        </div>

                                        <div class="single-list">
                                            <h5 class="title">Phone</h5>
                                            <p>+999 565 562</p>
                                        </div>

                                        <div class="single-list">
                                            <h5 class="title">Website Linked</h5>
                                            <p><a href="#">{{ Auth::user()->nickname }}</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="single-section border-botom">
                        <h4>About</h4>
                        <p class="font-size-4 mb-8">A talented professional with an academic background
                            in IT and proven
                            commercial development experience as C++ developer since 1999. Has a sound
                            knowledge of the software
                            development life cycle. Was involved in more than 140 software development
                            outsourcing projects.</p>
                        <p class="font-size-4 mb-8">Programming Languages: C/C++, .NET C++, Python,
                            Bash, Shell, PERL, Regular
                            expressions, Python, Active-script.</p>
                    </div>


                    <div class="single-section skill border-botom">
                        <h4>Skills</h4>
                        <ul class="list-unstyled d-flex align-items-center flex-wrap">
                            <li>
                                <a href="#">Agile</a>
                            </li>
                            <li>
                                <a href="#">Wireframing</a>
                            </li>
                            <li>
                                <a href="#">Prototyping</a>
                            </li>
                            <li>
                                <a href="#">Information</a>
                            </li>
                            <li>
                                <a href="#">Waterfall Model</a>
                            </li>
                            <li>
                                <a href="#">New Layout</a>
                            </li>
                            <li>
                                <a href="#">Ui/Ux Design</a>
                            </li>
                            <li>
                                <a href="#">Web Design</a>
                            </li>
                            <li>
                                <a href="#">Graphics Design</a>
                            </li>
                        </ul>
                    </div>


                    <div class="single-section exprerience border-botom">
                        <h4>Work Exprerience</h4>

                        <div class="single-exp mb-30">
                            <div class="d-flex align-items-center pr-11 mb-9 flex-wrap flex-sm-nowrap">
                                <div class="image">
                                    <img src="assets/img/logo.png " alt="#">
                                </div>
                                <div class="w-100 mt-n2">
                                    <h3 class="mb-0">
                                        <a href="#">Lead Product Designer</a>
                                    </h3>
                                    <a href="#">Airabnb</a>
                                    <div class="d-flex align-items-center justify-content-md-between flex-wrap">
                                        <a href="#">Jun 2020 - April 2023- 3 years</a>
                                        <a href="#" class="font-size-3 text-gray">
                                            <span class="mr-2" style="margin-top: -2px"><i class="bi bi-geo-alt"></i>
                                            </span>New York, USA</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="single-exp mb-30 ">
                            <div class="d-flex align-items-center pr-11 mb-9 flex-wrap flex-sm-nowrap">
                                <div class="image">
                                    <img src="assets/img/logo.png" alt="#">
                                </div>
                                <div class="w-100 mt-n2">
                                    <h3 class="mb-0">
                                        <a href="#">Senior UI/UX Designer</a>
                                    </h3>
                                    <a href="#">Google Inc</a>
                                    <div class="d-flex align-items-center justify-content-md-between flex-wrap">
                                        <a href="#">Jun 2020 - April 2023- 3 years</a>
                                        <a href="#" class="font-size-3 text-gray">
                                            <span class="mr-2" style="margin-top: -2px"><i class="bi bi-geo-alt"></i>
                                            </span>New York, USA</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="single-section education border-botom last-border-none">
                        <h4>Education</h4>

                        <div class="single-edu mb-30">
                            <div class="d-flex align-items-center pr-11 mb-9 flex-wrap flex-sm-nowrap">
                                <div class="image">
                                    <img src="assets/img/logo.png " alt="#">
                                </div>
                                <div class="w-100 mt-n2">
                                    <h3 class="mb-0">
                                        <a href="#">Masters in Art Design</a>
                                    </h3>
                                    <a href="#">Harvard University</a>
                                    <div class="d-flex align-items-center justify-content-md-between flex-wrap">
                                        <a href="#">Jun 2020 - April 2023- 3 years</a>
                                        <a href="#" class="font-size-3 text-gray">
                                            <span class="mr-2" style="margin-top: -2px"><i
                                                    class="bi bi-geo-alt-fill"></i> </span>Brylin, USA</a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="single-edu mb-30 ">
                            <div class="d-flex align-items-center pr-11 mb-9 flex-wrap flex-sm-nowrap">
                                <div class="image">
                                    <img src="assets/img/logo.png" alt="#">
                                </div>
                                <div class="w-100 mt-n2">
                                    <h3 class="mb-0">
                                        <a href="#">Bachelor in Software Engineering</a>
                                    </h3>
                                    <a href="#">Manipal Institute of Technology</a>
                                    <div class="d-flex align-items-center justify-content-md-between flex-wrap">
                                        <a href="#">Fed 2019 - April 2023 - 4 years </a>
                                        <a href="#" class="font-size-3 text-gray">
                                            <span class="mr-2" style="margin-top: -2px"><i
                                                    class="bi bi-geo-alt-fill"></i> </span>New York, USA</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- ======= My Profile Status Section The End ======= -->

@endsection



