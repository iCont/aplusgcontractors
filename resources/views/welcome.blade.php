@extends('layouts.web')
@section('content')
    <!-- main -->
    <div class="container mb-5" id="container-ban">
        {{-- carrousel --}}
        <div id="carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/logan_new_construction.JPG') }}" class="d-block w-100"
                        alt="Logan new construction">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/Hyrum.jpg') }}" class="d-block w-100" alt="Hyrum new construction">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/Hyrum-kitchen.jpg') }}" class="d-block w-100" alt="Hyrum kitchen">
                </div>
            </div>
            <div class="overlay">
                <div class="container">
                    <div class="row align-item-left ">
                        <div class="col-12  questions_text hero_text">
                            <div class="questions_wrap">
                                <div class="col-12 text-center">
                                    <h2 class="hero_title text-center" data-aos="zoom-in"> THE BEST CONSTRUCTION & <br>
                                        REMODELING HOME IN UTAH</h2>
                                    <img id="logo_hero" class="" data-aos="zoom-in" src="{{ asset('img/logo.png') }}" alt="logo marzo">
                                    <br>
                                    <button class="btn-first margin_top_single " data-aos="zoom-in">Contact Us now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            {{-- carrousel --}}
        </div>
        <div class="separador"></div>
        <section class="central">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 txt-init text-center">
                    <h2>Welcome to <br> A Plus General Contractors</h2>
                    <article class="welcome_txt">
                        <p class="mt-5">
                            We are a local family owned , full service construction company that has been serving the state
                            of Utah for over 20 years.
                        </p>
                        <p>
                            At A Plus General Contractors we are dedicated to our client´s needs and expectations, by giving
                            A+ service at every job, to every client. We are a referral based company, so we strive to make
                            your project as pleasant as possible. Our goal is to accomplish yours!
                        </p>
                    </article>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" id="img-right">
                    <img id="kitchen1" src="{{ asset('img/kitchen.jpeg') }}" alt="picture Kitchen">
                </div>
            </div>
        </section>
        <div class="separador"></div>
        <section class="services_desc">
            <div class="container">
                <div class="row icons">
                    <div class="col-12 text-center services_ofer">
                        <h2>What we offer for you</h2>
                    </div>
                    <div class="col-sm-6 col-lg-3 text-center icon_style_sm" data-aos="zoom-out"><img class="icon_service mb-3" src="{{ asset('img/pin.png') }}"
                            alt="icon - Locally Owned & operated"><br><span class="span_syle">Locally Owned &
                            operated</span></div>
                    <div class="col-sm-6 col-lg-3 text-center icon_style_sm" data-aos="zoom-out"><img class="icon_service mb-3" src="{{ asset('img/puzzle.png') }}"
                            alt="icon - Offers customized solutions"><br><span class="span_syle">Offers customized
                            solutions</span></div>
                    <div class="col-sm-6 col-lg-3 text-center icon_style_sm" data-aos="zoom-out"><img class="icon_service mb-3" src="{{ asset('img/free.png') }}"
                            alt="icon - Free estimates"><br><span class="span_syle">Free estimates</span></div>
                    <div class="col-sm-6 col-lg-3 text-center icon_style_sm" data-aos="zoom-out"><img class="icon_service mb-3" src="{{ asset('img/talk.png') }}"
                            alt="icon - Speaks Spanish"><br><span class="span_syle">Speaks Spanish</span></div>
                </div>
            </div>
        </section>
        <div class="separador"></div>
        <section class="javier_info mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 text-center">
                        <div class="container">
                            <div class="col-12"><img id="javi_pic" src="{{ asset('img/jcontreras.jpg') }}"
                                    alt="javier contreras pic"></div>
                            <div class="col-12 mt-1">
                                <span class="span_bolder">JAVIER CONTRERAS</span><br>
                                <span class="span_bold">CEO FOUNDER</span><br>
                                <span class="span_txt">I take pride in our work and <br> dedicate myself 100% to every <br>
                                    customer and his every need.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 txt_javier">
                        <article>
                            <p class="article_bold" >
                                Want to save money and time? Want A+ quality work and to be treated like our #1 priority?
                                At Aplus General Contractors we are dedicated to you, and we are confident you will have a
                                great
                                experience by Hiring us.
                            </p>
                        </article>
                        <article>
                            <p>
                                Hi
                                My name is Javier Contreras Owner and Presidente of A Plus General
                                Contractor, for over 25 five years I have called Utah my home and my
                                place of work. I take pride in our work an dedicate myself 100% to
                                every customer and his every need. I belive in getting the job done right
                                the first time, and treat every project as my own. I invite you to give us a
                                try and see for yourself why we have stayed in te business so long.
                                <br>
                                <br>
                                Thank you for trusting us.
                            </p>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <div class="separador"></div>
        <section class="year_info mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 text-center">
                        <div class="container specialize_txt">
                            <article>
                                <h2 class="mb-5" data-aos="fade-up"
                                data-aos-duration="3000">
                                    We Specialize in finishing the <br> basement of your dreams!!
                                </h2>
                            </article>
                            <article>
                                <p>
                                    Your home is one of the most important assets you have. When you are ready to finish or
                                    remodel your basement, treat yourself to the high quality you expect at a price you can
                                    afford.
                                </p>
                            </article>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 txt_javier text-center">
                        <article>
                            <p class="article_bold year_bold">
                                25+
                            </p>
                        </article>
                        <article>
                            <p class="aricle_light mt-2">
                                Years of experience
                            </p>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <div class="separador"></div>
        <section class="our_services">
            <div class="container ">
                <div class="row">
                    <div class="col-12 text-center services_ofer">
                        <h2>Our Services for you</h2>
                    </div>
                </div>
                <div class="row pics_services">
                    <div class="col-3 text-center squeres"  id="basements" data-aos="zoom-in-up">
                        <h3 class="title_service">
                            Basements</h3>
                    </div>
                    <div class="col-3 text-center squeres"  id="cabinetry" data-aos="zoom-in-up">
                        <h3 class="title_service">
                            Cabinetry</h3>
                    </div>
                    <div class="col-3 text-center squeres"  id="drywall" data-aos="zoom-in-up">
                        <h3 class="title_service">
                            Drywall</h3>
                    </div>
                    <div class="col-3 text-center squeres"  id="custom_paint" data-aos="zoom-in-up">
                        <h3 class="title_service">
                            Custom Paint & Textures</h3>
                    </div>
                    <div class="col-3 text-center squeres"  id="flooring" data-aos="zoom-in-up">
                        <h3 class="title_service">
                            Flooring</h3>
                    </div>
                    <div class="col-3 text-center squeres"  id="framing" data-aos="zoom-in-up">
                        <h3 class="title_service">
                            Framing & Carpentry</h3>
                    </div>
                    <div class="col-3 text-center squeres"  id="masonery" data-aos="zoom-in-up">
                        <h3 class="title_service">
                            Masonery</h3>
                    </div>
                    <div class="col-3 text-center squeres"  id="new_construction" data-aos="zoom-in-up">
                        <h3 class="title_service">
                            New Construction</h3>
                    </div>
                    <div class="col-3 text-center squeres"  id="remodels" data-aos="zoom-in-up">
                        <h3 class="title_service">
                            Remodels & Restorations</h3>
                    </div>
                    <div class="col-3 text-center squeres"  id="siding" data-aos="zoom-in-up">
                        <h3 class="title_service">
                            Siding</h3>
                    </div>
                    <div class="col-3 text-center squeres"  id="tile" data-aos="zoom-in-up">
                        <h3 class="title_service">
                            Tile</h3>
                    </div>
                </div>
            </div>
        </section>
        <div class="separador"></div>
        <section class="testimonials py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center my-5">
                        <h2>Testimonials</h2>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 testimonials_img">
                        <img id="testimonials_images" src="{{ asset('img/satisfied.png') }}" alt="satisfied logo">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 text-center">
                        {{-- carrousel --}}
                        <div id="carousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item test_text active" >
                                    <p class="testimonials_txt">“When I saw their Facebook Page I thought i would never be
                                        able to afford that quality of work in my house. I had fire Damage and the money the
                                        Insurance company was giving me didn't seem nearly enough to cover the damages.
                                        These guys came out literally within the hour of my call and took over the project,
                                        They did a fantastic job and made my insurance company pay almost 15k over their
                                        initial estimate, They did a great job, My home looked MUCH better than it did
                                        before the accident and they did extra work for us. They Honestly are way above my
                                        expectations and I would recommend them to anyone. I thought this was the least I
                                        can do to show my appreciation. Thanks Guys for your hard work!</p>
                                        <p>
                                            <img class="stars" src="{{ asset('img/stars.png') }}" alt="">
                                            <img class="stars" src="{{ asset('img/stars.png') }}" alt="">
                                            <img class="stars" src="{{ asset('img/stars.png') }}" alt="">
                                            <img class="stars" src="{{ asset('img/stars.png') }}" alt="">
                                            <img class="stars" src="{{ asset('img/stars.png') }}" alt="">
                                        </p>
                                    <p class="testimonials_name">The Lemus Family</p>
                                </div>
                                <div class="carousel-item test_text" >
                                    <p class="testimonials_txt">
                                        Outstanding In Every Way by User166298 on May 9, 2015 <br>
                                        We have remodeled three homes over the past decade, including building two major
                                        additions. As you can imagine, we have had hired a lot of contracted work. Not a
                                        single company/individual can compare to the workmanship, integrity, expertise, and
                                        devotion we received from Javier and A Plus General Contractors. Javier is
                                        responsible for putting an entire second story onto our outdated ranch-style house,
                                        turning it into a beautiful home we will raise our family in. We could not praise A
                                        Plus enough and will look to them for all of our future construction needs. With
                                        sincerest gratitude, the Grandon Family.</p>
                                        <p>
                                            <img class="stars" src="{{ asset('img/stars.png') }}" alt="">
                                            <img class="stars" src="{{ asset('img/stars.png') }}" alt="">
                                            <img class="stars" src="{{ asset('img/stars.png') }}" alt="">
                                            <img class="stars" src="{{ asset('img/stars.png') }}" alt="">
                                            <img class="stars" src="{{ asset('img/stars.png') }}" alt="">
                                        </p>
                                    <p class="testimonials_name">The Grandon Family</p>
                                </div>
                                <div class="carousel-item test_text" >
                                    <p class="testimonials_txt">A+ is awesome by User126474 on June 25, 2014 <br>
                                        A+ general contractors were very professional. they know what they are doing. They
                                        were friendly and explained what they were doing very good. I give them an A+</p>
                                        <p>
                                            <img class="stars" src="{{ asset('img/stars.png') }}" alt="">
                                            <img class="stars" src="{{ asset('img/stars.png') }}" alt="">
                                            <img class="stars" src="{{ asset('img/stars.png') }}" alt="">
                                            <img class="stars" src="{{ asset('img/stars.png') }}" alt="">
                                            <img class="stars" src="{{ asset('img/stars.png') }}" alt="">
                                        </p>
                                    <p class="testimonials_name">A+ is awesome</p>
                                </div>
                            </div>
                        </div>
                        {{-- carrousel --}}
                    </div>
                </div>
        </section>
        <!-- main -->
        <script src="https://ajax.aspnetcdn.com/ajax/jquery/jquery-1.9.0.js"></script>
    @endsection

