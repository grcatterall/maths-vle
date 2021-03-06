
@extends('homelayout')

@section('content')
{{--    <div class="banner">--}}
{{--        <div class="title m-b-md">Tailored Maths</div>--}}
{{--    </div>--}}
    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-1z" data-slide-to="1"></li>
            <li data-target="#carousel-example-1z" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">

            <!--First slide-->
            <div class="carousel-item active">
                <div class="view" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/nature7.jpg'); background-repeat: no-repeat; background-size: cover;">

                    <!-- Mask & flexbox options-->
                    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

                        <!-- Content -->
                        <div class="text-center white-text mx-5 wow fadeIn">
                            <h1 class="mb-4">
                                <strong>Tailored Maths</strong>
                            </h1>

                            <p>
                                <strong>Learn, educate and develop</strong>
                            </p>

                            <p class="mb-4 d-none d-md-block">
                                <strong>Attempt our wide range of tasks designed and tested by teachers, so you know what you're
                                 learning is relevant</strong>
                            </p>

                            <a href="/tasks/task" class="btn btn-outline-white btn-lg">Start
                                looking
                                <i class="fas fa-graduation-cap ml-2"></i>
                            </a>
                        </div>
                        <!-- Content -->

                    </div>
                    <!-- Mask & flexbox options-->

                </div>
            </div>
            <!--/First slide-->

            <!--Second slide-->
            <div class="carousel-item">
                <div class="view" style="background-image: url('{{url('images/1.png')}}'); background-repeat: no-repeat; background-size: cover;">

                    <!-- Mask & flexbox options-->
                    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

                        <!-- Content -->
                        <div class="text-center white-text mx-5 wow fadeIn">
                            <h1 class="mb-4">
                                <strong>Staff Portal</strong>
                            </h1>

                            <p class="mb-4 d-none d-md-block">
                                <strong>Access the staff portal to set and manage work for your students</strong>
                            </p>

                            <a href="/login/teacher" class="btn btn-outline-white btn-lg">Staff Portal
                                <i class="fas fa-users ml-2"></i>
                            </a>
                        </div>
                        <!-- Content -->

                    </div>
                    <!-- Mask & flexbox options-->

                </div>
            </div>
            <!--/Second slide-->

            <!--Third slide-->
            <div class="carousel-item">
                <div class="view" style="background-image: url('{{url('images/image.png')}}'); background-repeat: no-repeat; background-size: cover;">

                    <!-- Mask & flexbox options-->
                    <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

                        <!-- Content -->
                        <div class="text-center white-text mx-5 wow fadeIn">
                            <h1 class="mb-4">
                                <strong>Tailored Maths</strong>
                            </h1>

                            <p>
                                <strong>Lorem ipsum dolor sit amet</strong>
                            </p>

                            <p class="mb-4 d-none d-md-block">
                                <strong>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                    mollit anim id est laborum.</strong>
                            </p>

                            <a href="#" class="btn btn-outline-white btn-lg">Lorem ipsum dolor
                                <i class="fas fa-graduation-cap ml-2"></i>
                            </a>
                        </div>
                        <!-- Content -->

                    </div>
                    <!-- Mask & flexbox options-->

                </div>
            </div>
            <!--/Third slide-->

        </div>
        <!--/.Slides-->

        <!--Controls-->
{{--        <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">--}}
{{--            <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--            <span class="sr-only">Previous</span>--}}
{{--        </a>--}}
{{--        <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">--}}
{{--            <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--            <span class="sr-only">Next</span>--}}
{{--        </a>--}}
        <!--/.Controls-->

    </div>
    <!--/.Carousel Wrapper-->

    </header>

    <!--Main layout-->
    <main>
        <div class="container">

            <!--Section: Main info-->
            <section class="mt-5 wow fadeIn">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6 mb-4">

                        <img src="{{url('/images/header.png')}}" class="img-fluid z-depth-1-half width-100"
                             alt="">

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6 mb-4">

                        <!-- Main heading -->
                        <h3 class="h3 mb-3">Looking for a challenge?</h3>
                        <p>Jump straight in to a large selection of tasks to improve your Maths techniques and abilities:</p>
                        <a href="/tasks/task" class="btn btn-outline-black">Start here!</a>
                        <!-- Main heading -->

                        <hr>

                        <p>
                            <strong>Has your school been registered?</strong> Find out what work has been set for you and complete it online!
                        </p>

                        <!-- CTA -->
                        <a href="/login/student" class="btn btn-blue btn-md"><strong>Login as a student</strong>
                            <i class="far fa-user"></i>
                        </a>

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>
            <!--Section: Main info-->

            <hr class="my-5">

            <!--Section: Main features & Quick Start-->
            <section>

                <h3 class="h3 text-center mb-5">About Tailored Maths</h3>

                <!--Grid row-->
                <div class="row wow fadeIn">

                    <!--Grid column-->
                    <div class="col-lg-6 col-md-12 px-4">

                        <!--First row-->
                        <div class="row">
                            <div class="col-1 mr-3">
                                <i class="fas fa-graduation-cap fa-2x indigo-text"></i>
                            </div>
                            <div class="col-10">
                                <h5 class="feature-title">Online Virtual Learning Environment</h5>
                                <p class="grey-text">Aid learning and productivity online.</p>
                            </div>
                        </div>
                        <!--/First row-->

                        <div style="height:30px"></div>

                        <!--Second row-->
                        <div class="row">
                            <div class="col-1 mr-3">
                                <i class="fas fa-book fa-2x blue-text"></i>
                            </div>
                            <div class="col-10">
                                <h5 class="feature-title">Detailed documentation</h5>
                                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                            </div>
                        </div>
                        <!--/Second row-->

                        <div style="height:30px"></div>

                        <!--Third row-->
                        <div class="row">
                            <div class="col-1 mr-3">
                                <i class="fas fa-graduation-cap fa-2x cyan-text"></i>
                            </div>
                            <div class="col-10">
                                <h5 class="feature-title">Quisque vestibulum</h5>
                                <p class="grey-text">Sed scelerisque, purus non venenatis egestas, turpis magna aliquam
                                    dui, eget sagittis orci velit non ante.</p>
                            </div>
                        </div>
                        <!--/Third row-->

                    </div>
                    <!--/Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-6 col-md-12">

                        <p class="h5 text-center mb-4">Etiam vitae malesuada lorem.</p>
                            <img src="{{url('/images/header.png')}}" class="img-fluid z-depth-1-half width-100"
                                 alt="">
                    </div>
                    <!--/Grid column-->

                </div>
                <!--/Grid row-->

            </section>
            <!--Section: Main features & Quick Start-->

            <hr class="my-5">

            <!--Section: Not enough-->
            <section>

                <h2 class="my-5 h3 text-center">Not enough?</h2>

                <!--First row-->
                <div class="row features-small mb-5 mt-3 wow fadeIn">

                    <!--First column-->
                    <div class="col-md-4">
                        <!--First row-->
                        <div class="row">
                            <div class="col-2">
                                <i class="fas fa-check-circle fa-2x indigo-text"></i>
                            </div>
                            <div class="col-10">
                                <h6 class="feature-title">Free for personal and commercial use</h6>
                                <p class="grey-text">Our license is user-friendly. Feel free to use MDB for both private as well as
                                    commercial projects.
                                </p>
                                <div style="height:15px"></div>
                            </div>
                        </div>
                        <!--/First row-->

                        <!--Second row-->
                        <div class="row">
                            <div class="col-2">
                                <i class="fas fa-check-circle fa-2x indigo-text"></i>
                            </div>
                            <div class="col-10">
                                <h6 class="feature-title">400+ UI elements</h6>
                                <p class="grey-text">An impressive collection of flexible components allows you to develop any project.
                                </p>
                                <div style="height:15px"></div>
                            </div>
                        </div>
                        <!--/Second row-->

                        <!--Third row-->
                        <div class="row">
                            <div class="col-2">
                                <i class="fas fa-check-circle fa-2x indigo-text"></i>
                            </div>
                            <div class="col-10">
                                <h6 class="feature-title">600+ icons</h6>
                                <p class="grey-text">Hundreds of useful, scalable, vector icons at your disposal.</p>
                                <div style="height:15px"></div>
                            </div>
                        </div>
                        <!--/Third row-->

                        <!--Fourth row-->
                        <div class="row">
                            <div class="col-2">
                                <i class="fas fa-check-circle fa-2x indigo-text"></i>
                            </div>
                            <div class="col-10">
                                <h6 class="feature-title">Fully responsive</h6>
                                <p class="grey-text">It doesn't matter whether your project will be displayed on desktop, laptop,
                                    tablet or mobile phone. MDB
                                    looks great on each screen.</p>
                                <div style="height:15px"></div>
                            </div>
                        </div>
                        <!--/Fourth row-->
                    </div>
                    <!--/First column-->

                    <!--Second column-->
                    <div class="col-md-4 flex-center">
                        <img src="https://mdbootstrap.com/img/Others/screens.png" alt="MDB Magazine Template displayed on iPhone"
                             class="z-depth-0 img-fluid">
                    </div>
                    <!--/Second column-->

                    <!--Third column-->
                    <div class="col-md-4 mt-2">
                        <!--First row-->
                        <div class="row">
                            <div class="col-2">
                                <i class="fas fa-check-circle fa-2x indigo-text"></i>
                            </div>
                            <div class="col-10">
                                <h6 class="feature-title">70+ CSS animations</h6>
                                <p class="grey-text">Neat and easy to use animations, which will increase the interactivity of your
                                    project and delight your visitors.
                                </p>
                                <div style="height:15px"></div>
                            </div>
                        </div>
                        <!--/First row-->

                        <!--Second row-->
                        <div class="row">
                            <div class="col-2">
                                <i class="fas fa-check-circle fa-2x indigo-text"></i>
                            </div>
                            <div class="col-10">
                                <h6 class="feature-title">Plenty of useful templates</h6>
                                <p class="grey-text">Need inspiration? Use one of our predefined templates for free.</p>
                                <div style="height:15px"></div>
                            </div>
                        </div>
                        <!--/Second row-->

                        <!--Third row-->
                        <div class="row">
                            <div class="col-2">
                                <i class="fas fa-check-circle fa-2x indigo-text"></i>
                            </div>
                            <div class="col-10">
                                <h6 class="feature-title">Easy installation</h6>
                                <p class="grey-text">5 minutes, a few clicks and... done. You will be surprised at how easy it is.
                                </p>
                                <div style="height:15px"></div>
                            </div>
                        </div>
                        <!--/Third row-->

                        <!--Fourth row-->
                        <div class="row">
                            <div class="col-2">
                                <i class="fas fa-check-circle fa-2x indigo-text"></i>
                            </div>
                            <div class="col-10">
                                <h6 class="feature-title">Easy to use and customize</h6>
                                <p class="grey-text">Using MDB is straightforward and pleasant. Components flexibility allows you deep
                                    customization. You will
                                    easily adjust each component to suit your needs.</p>
                                <div style="height:15px"></div>
                            </div>
                        </div>
                        <!--/Fourth row-->
                    </div>
                    <!--/Third column-->

                </div>
                <!--/First row-->

            </section>
            <!--Section: Not enough-->

            <hr class="mb-5">

            <!--Section: More-->
            <section>

                <h2 class="my-5 h3 text-center">...and even more</h2>

                <!--First row-->
                <div class="row features-small mt-5 wow fadeIn">

                    <!--Grid column-->
                    <div class="col-xl-3 col-lg-6">
                        <!--Grid row-->
                        <div class="row">
                            <div class="col-2">
                                <i class="fab fa-firefox fa-2x mb-1 indigo-text" aria-hidden="true"></i>
                            </div>
                            <div class="col-10 mb-2 pl-3">
                                <h5 class="feature-title font-bold mb-1">Cross-browser compatibility</h5>
                                <p class="grey-text mt-2">Chrome, Firefox, IE, Safari, Opera, Microsoft Edge - MDB loves all browsers;
                                    all browsers love MDB.
                                </p>
                            </div>
                        </div>
                        <!--/Grid row-->
                    </div>
                    <!--/Grid column-->

                    <!--Grid column-->
                    <div class="col-xl-3 col-lg-6">
                        <!--Grid row-->
                        <div class="row">
                            <div class="col-2">
                                <i class="fas fa-level-up-alt fa-2x mb-1 indigo-text" aria-hidden="true"></i>
                            </div>
                            <div class="col-10 mb-2">
                                <h5 class="feature-title font-bold mb-1">Frequent updates</h5>
                                <p class="grey-text mt-2">MDB becomes better every month. We love the project and enhance as much as
                                    possible.
                                </p>
                            </div>
                        </div>
                        <!--/Grid row-->
                    </div>
                    <!--/Grid column-->

                    <!--Grid column-->
                    <div class="col-xl-3 col-lg-6">
                        <!--Grid row-->
                        <div class="row">
                            <div class="col-2">
                                <i class="fas fa-comments fa-2x mb-1 indigo-text" aria-hidden="true"></i>
                            </div>
                            <div class="col-10 mb-2">
                                <h5 class="feature-title font-bold mb-1">Active community</h5>
                                <p class="grey-text mt-2">Our society grows day by day. Visit our forum and check how it is to be a
                                    part of our family.
                                </p>
                            </div>
                        </div>
                        <!--/Grid row-->
                    </div>
                    <!--/Grid column-->

                    <!--Grid column-->
                    <div class="col-xl-3 col-lg-6">
                        <!--Grid row-->
                        <div class="row">
                            <div class="col-2">
                                <i class="fas fa-code fa-2x mb-1 indigo-text" aria-hidden="true"></i>
                            </div>
                            <div class="col-10 mb-2">
                                <h5 class="feature-title font-bold mb-1">jQuery 3.x</h5>
                                <p class="grey-text mt-2">MDB is integrated with newest jQuery. Therefore you can use all the latest
                                    features which come along with
                                    it.
                                </p>
                            </div>
                        </div>
                        <!--/Grid row-->
                    </div>
                    <!--/Grid column-->

                </div>
                <!--/First row-->

                <!--Second row-->
                <div class="row features-small mt-4 wow fadeIn">

                    <!--Grid column-->
                    <div class="col-xl-3 col-lg-6">
                        <!--Grid row-->
                        <div class="row">
                            <div class="col-2">
                                <i class="fas fa-cubes fa-2x mb-1 indigo-text" aria-hidden="true"></i>
                            </div>
                            <div class="col-10 mb-2">
                                <h5 class="feature-title font-bold mb-1">Modularity</h5>
                                <p class="grey-text mt-2">Material Design for Bootstrap comes with both, compiled, ready to use
                                    libraries including all features as
                                    well as modules for CSS (SASS files) and JS.</p>
                            </div>
                        </div>
                        <!--/Grid row-->
                    </div>
                    <!--/Grid column-->

                    <!--Grid column-->
                    <div class="col-xl-3 col-lg-6">
                        <!--Grid row-->
                        <div class="row">
                            <div class="col-2">
                                <i class="fas fa-question fa-2x mb-1 indigo-text" aria-hidden="true"></i>
                            </div>
                            <div class="col-10 mb-2">
                                <h5 class="feature-title font-bold mb-1">Technical support</h5>
                                <p class="grey-text mt-2">We care about reliability. If you have any questions - do not hesitate to
                                    contact us.
                                </p>
                            </div>
                        </div>
                        <!--/Grid row-->
                    </div>
                    <!--/Grid column-->

                    <!--Grid column-->
                    <div class="col-xl-3 col-lg-6">
                        <!--Grid row-->
                        <div class="row">
                            <div class="col-2">
                                <i class="fas fa-th fa-2x mb-1 indigo-text" aria-hidden="true"></i>
                            </div>
                            <div class="col-10 mb-2">
                                <h5 class="feature-title font-bold mb-1">Flexbox</h5>
                                <p class="grey-text mt-2">MDB fully supports Flex Box. You can forget about alignment issues.</p>
                            </div>
                        </div>
                        <!--/Grid row-->
                    </div>
                    <!--/Grid column-->

                    <!--Grid column-->
                    <div class="col-xl-3 col-lg-6">
                        <!--Grid row-->
                        <div class="row">
                            <div class="col-2">
                                <i class="far fa-file-code fa-2x mb-1 indigo-text" aria-hidden="true"></i>
                            </div>
                            <div class="col-10 mb-2">
                                <h5 class="feature-title font-bold mb-1">SASS files</h5>
                                <p class="grey-text mt-2">Arranged and well documented .scss files can't wait until you compile them.</p>
                            </div>
                        </div>
                        <!--/Grid row-->
                    </div>
                    <!--/Grid column-->

                </div>
                <!--/Second row-->

            </section>
            <!--Section: More-->

        </div>
    </main>
    <!--Main layout-->
@endsection
