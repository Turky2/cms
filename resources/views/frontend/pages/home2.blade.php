@extends('frontend.layouts.app2')

@php
    $page_meta = $page->pageMeta->keyBy('meta_key');
@endphp

@section('meta')
    <meta name="description" content="{{$page->meta_description}}">
@endsection
@section('content')
  <!-- ======= space Section ======= -->
  <div id="space" class="space route bg-image" style="background-image: url(assets/cms/imgs/home.png)">
    <div class="overlay-itro"></div>
    <div class="space-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="space-title mb-4">{{ trans('Home.title') }}</h1>
          <p class="space-subtitle"><span class="typed" data-typed-items="{{ trans('Home.Job_Data') }}"></span></p>
          {{-- <p class="space-subtitle"><span class="typed" data-typed-items=""></span></p> --}}
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div>
  <!-- End space Section -->

  <main id="main">

    @includeIf('frontend.pages.partials.features2', ['page_meta' => $page_meta])


       
    {{--  @includeIf('frontend.pages.partials.statistics', ['statistics' => $statistics ?? []])--}}
 
    {{--  @includeIf('frontend.pages.partials.testimonial', ['testimonials' => $testimonials ?? []])--}}
 
    {{--  @includeIf('frontend.pages.partials.cta2') --}}

    {{--   @includeIf('frontend.pages.partials.faq', ['faqs' => $faqs ?? []]) --}}
        
    <div class="section-counter paralax-mf bg-image" style="background-image: url(assets/cms/imgs/counters-bg.jpg)">
        <div class="overlay-mf"></div>
        <div class="container position-relative">
            <div class="row">
                <div class="col-sm-3 col-lg-3">
                    <div class="counter-box counter-box pt-4 pt-md-0">
                        <div class="counter-ico">
                            <span class="ico-circle"><i class="bi bi-check"></i></span>
                        </div>
                        <div class="counter-num">
                            <p data-purecounter-start="0" data-purecounter-end="450" data-purecounter-duration="10" class="counter purecounter"></p>
                            <span class="counter-text">WORKS COMPLETED</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-lg-3">
                    <div class="counter-box pt-4 pt-md-0">
                        <div class="counter-ico">
                            <span class="ico-circle"><i class="bi bi-journal-richtext"></i></span>
                        </div>
                        <div class="counter-num">
                            <p data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="10" class="counter purecounter"></p>
                            <span class="counter-text">YEARS OF EXPERIENCE</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-lg-3">
                    <div class="counter-box pt-4 pt-md-0">
                        <div class="counter-ico">
                            <span class="ico-circle"><i class="bi bi-people"></i></span>
                        </div>
                        <div class="counter-num">
                            <p data-purecounter-start="0" data-purecounter-end="550" data-purecounter-duration="10" class="counter purecounter"></p>
                            <span class="counter-text">TOTAL CLIENTS</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 col-lg-3">
                    <div class="counter-box pt-4 pt-md-0">
                        <div class="counter-ico">
                            <span class="ico-circle"><i class="bi bi-award"></i></span>
                        </div>
                        <div class="counter-num">
                            <p data-purecounter-start="0" data-purecounter-end="48" data-purecounter-duration="8" class="counter purecounter"></p>
                            <span class="counter-text">AWARD WON</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @includeIf('frontend.pages.partials.industries2', ['page_meta' => $page_meta])

    <!-- <section id="work" class="portfolio-mf sect-pt4 route">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title-box text-center">
                        <h3 class="title-a">
                            {{ trans('Home.Projects') }}
                        </h3>
                        <p class="subtitle-a">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                        </p>
                        <div class="line-mf"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach( [1,2,3,4,5,6] as $test)
                    <div class="col-md-4">
                        <div class="work-box">
                            <a href="asd" data-gallery="portfolioGallery" class="portfolio-lightbox">
                                <div class="work-img">
                                    <img src="asd" width="100%" alt="" class="img-fluid rounded-top">
                                </div>
                            </a>
                            <div class="work-content">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <h2 class="w-title">aadsd</h2>
                                        <div class="w-more">
                                            <span class="w-ctegory">Web Design</span> / <span class="w-date">kjs ks hk kjs</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="w-like">
                                            <a href="uel"> <span class="bi bi-plus-circle"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section> -->
    
    <div id="Members" class="testimonials paralax-mf bg-image" style="background-image: url(assets/cms/imgs/overlay-bg.jpg)">
        <div class="overlay-mf"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-box">
                                    <div class="d-flex justify-content-center align-items-center ">
                                        <div>
                                            <img src="{{asset('assets/cms/plugins/font-awesome/advanced-options/raw-svg/solid/user-circle.svg') }}" style="width: 150px;height: 150px;" alt="photo" class="rounded-circle b-shadow-a">
                                        </div>
                                        <div class="ms-3 d-flex flex-column">
                                            <div class="d-flex">
                                                <h4 class="fw-bold" style="letter-spacing: 2px">
                                                    <span class="badge bg-success"nae,</span>
                                                </h4>
                                                <h5 class="d-flex mx-1 justify-content-center align-items-end fw-bold">
                                                    <span class="fw-bold badge bg-primary" style="letter-spacing: 1.2px">
                                                        Turky
                                                    </span>
                                                    <span class="bg-dark mx-1 text-light badge">mameber ,posirions</span>
                                                </h5>
                                            </div>
                                            <div class="w-100 text-start ml-2">
                                                <p class="fw-bold d-flex">jskmn mkhj kjhd kj klj k kkjkj kj kjkj kj</p>
                                            </div>
                                        </div>
                                    </div>Member
                                    <div class="author-test">
                                        <img src="" style="width: 150px;height: 150px;" alt="photo" class="rounded-circle b-shadow-a">
                                        <span class="author">name</span>
                                    </div>
                                    <div class="content-test">
                                        <p class="description lead">
                                            descrition
                                        </p>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="teams" class="testimonials paralax-mf bg-image" style="background-image: url(assets/cms/imgs/overlay-bg.jpg)">
                <div class="overlay-mf"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testimonial-box">
                                            <div class="author-test">
                                                <img src="s" style="width: 150px;height: 150px;" alt="" class="rounded-circle b-shadow-a">
                                                <span class="author">taem name</span>
                                            </div>
                                            <div class="content-test">
                                                <p class="description lead">
                                                    yaem desc
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                                    
            <!-- <section id="blog" class="blog-mf sect-pt4 route">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="title-box text-center">
                                <h3 class="title-a">
                                    {{ trans('Home.Blogs') }}
                                </h3>
                                <p class="subtitle-a">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                </p>
                                <div class="line-mf"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach( [1,2,3,4,5,6] as $test)
                            <div class="col-md-4">
                                <div class="card card-blog">
                                    <div class="card-img">
                                        <img src="kjshksk" alt="" style="height: 18rem" class="img-fluid w-100 rounded-top">
                                    </div>
                                    <div class="card-body">
                                        <div class="card-category-box">
                                            <div class="card-category">
                                                <h6 class="category">Travel</h6>
                                            </div> 
                                        </div>
                                        <h3 class="card-title">jhgjh</h3>
                                        <p class="card-description">mjjmn kjjkm jhs jhsjhb jdhj dkds j hd uj psdbkj hdjk</p>
                                    </div>
                                    <div class="card-footer">
                                        <div class="post-author">
                                            <a href="#">
                                                <img src="assets/cms/imgs/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                                                <span class="author">Morgan Freeman</span>
                                            </a>
                                        </div>
                                        <div class="post-date">
                                            <span class="bi bi-clock"></span> 10 min
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section> -->

            <!-- <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/cms/imgs/overlay-bg.jpg)">
                <div class="overlay-mf"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="contact-mf">
                                <div id="contact" class="box-shadow-full">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="title-box-2">
                                            <h5 class="title-left">
                                                {{ trans('Home.Send Message Us') }}
                                            </h5>
                                            </div>
                                            <div>
                                                <form action="" class="php-email-form" method="POST">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-12 mb-3">
                                                            <div class="form-group">
                                                                <input type="text" name="name" class="form-control rounded
                                                            
                                                                " id="name" placeholder="{{ trans('Home.Your Name') }}" autocomplete="off" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 mb-3">
                                                            <div class="form-group">
                                                                <input type="email" class="form-control rounded
                                                                
                                                                " name="email" id="email" placeholder="{{ trans('Home.Your Email') }}" autocomplete="off" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 mb-3">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control rounded
                                                                
                                                                " name="phone" id="phone" placeholder="{{ trans('Home.Phone') }}" autocomplete="off">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 mb-3">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control rounde" name="subject" id="subject" placeholder="{{ trans('Home.Subject') }}" autocomplete="off" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <textarea class="form-control rounded
                                                                
                                                                " name="message" rows="5" placeholder="setting" autocomplete="off" required></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="container my-1">
                                                            <div class="loading"></div>
                                                            <div class="alert error-message"></div>
                                                            <div class="alert sent-message">"</div>
                                                        </div>
                                                        
                                                        <div class="col-md-12 mt-2 text-center">
                                                            <button type="submit" class="button button-a button-big button-rouded">{{ trans('Home.Send Message') }}</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="title-box-2 pt-4 pt-md-0">
                                                <h5 class="title-left">
                                                    {{ trans('Home.Get in Touch') }}
                                                </h5>
                                            </div>
                                            <div class="more-info">
                                                <p class="lead">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis dolorum dolorem soluta quidem
                                                    expedita aperiam aliquid at.
                                                    Totam magni ipsum suscipit amet? Autem nemo esse laboriosam ratione nobis
                                                    mollitia inventore?
                                                </p>
                                                <ul class="list-ico">
                                                    <li><span class="bi bi-geo-alt"></span>Elsultan hussein ismailia, egypt</li>
                                                    <li><span class="bi bi-phone"></span> 01098749193</li>
                                                    <li><span class="bi bi-envelope"></span> spacedev.solutions@gmail.com</li>
                                                </ul>
                                            </div>
                                            <div class="socials" style="transform: translateY(-10px)">
                                                <ul>
                                                    <li><a href=""><span class="ico-circle d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></span></a></li>
                                                    <li><a href=""><span class="ico-circle d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></span></a></li>
                                                    <li><a href=""><span class="ico-circle d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></span></a></li>
                                                    <li><a href=""><span class="ico-circle d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- End Contact Section -->
        <!-- </div> -->
  </main>


@endsection
