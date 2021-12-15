<!-------

---->



        <!-- banner start-->
        <section class="hero-area banner-6 banner-6-alt" style="/*background-image: url('assets/front/images/bg/top_right_bg.png')*/">
            <div class="banner-item">
                <div class="container">
                    <div class="row carousel slide" id="carouselExampleControls" data-ride="carousel">
                        <div class="col-lg-6 carousel-inner" style="height:715px;">
                            <?php foreach($data['query'] as $index => $rw) : ?>
                            <?php $class = $index == 1 ? "active" : ""; ?>
                            <div class="banner-content-wrap carousel-item <?=$class;?>">
                                <div class="date-item wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="900ms">
                                    <span class="event-day">09</span>
                                    <span class="event-month">June</span>
                                    <span class="event-year">2020</span>
                                </div>
                                <h2 class="sub-title color-primary wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="800ms">#Şehrindeki Etkinlikler Burada!</h2>
                                <h2 class="banner-title wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="700ms">
                                    <?=$rw["baslik"]; ?> <br>
                                </h2>
                                <div class="banner-info wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms">
                                    <div class="icon">
                                        <img src="assets/front/images/shap/Shape-1.png" alt="">
                                    </div>
                                    <h3><?=$rw["yer"]; ?></h3>
                                </div>
                                <div class="col-md-4 p-0 mbb">
                                    <a href="?page=<?=$rw["tur"]; ?>-bilet-al&e=<?=$rw["id"]; ?>" class="btn">Bilet Al</a>
                                </div>
                            </div>
                            <?php endforeach; ?>

                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div><!-- col end-->
                        <div class="col-md-6">
                            <div class="banner-image">
                                <img src="assets/front/images/hero_area/header_vector.png" alt="">
                            </div>
                        </div>
                    </div><!-- row end-->
                    <div class="row">
                        <div class="col-12">
                            <div class="ts-extra-feature banner-content-wrap">
                                <div class="row align-items-center justify-content-between">


                                    <div class="col-md-8">
                                        <div class="ts-count-down">
                                            <input class="form-control" placeholder="Etkinlik Ara" style="height:50px;">
                                        </div>
                                    </div>
                                    <div class="col-md-2 text-left">
                                        <button class="btn " style="">ARA</button>
                                    </div>
                                    <div class="col-md-2 text-right">
                                        <div class="ts-image">
                                            <img src="assets/front/images/hero_area/small_vector.png" alt="">
                                        </div>
                                    </div>
                                </div><!-- end row -->
                            </div><!-- end ts-extra-feature -->
                        </div>
                    </div>
                </div>
                <!-- Container end -->
            </div>
        </section>
        <!-- banner end-->

        <section class="ts-blog section-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="section-title">
                        <span>Sıradaki Etkinlikler</span>
                        Etkinlikler
                    </h2>
                </div><!-- col end-->
            </div><!-- row end-->
            <div class="row">
                <?php foreach($data['query'] as $show) : ?>

                <div class="col-lg-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
                    <div class="post">
                        <div class="post-media post-image">
                            <a href="?page=<?=$show["tur"]; ?>-bilet-al&e=<?=$show["id"]; ?>"><img src="assets/front/images/blog/blog1.jpg" class="img-fluid" alt=""></a>
                        </div>

                        <div class="post-body">
                            <div class="post-meta">
                            <span class="post-author">
                            <a href="">AnadoluSanat</a>
                            </span>

                                <div class="post-meta-date">
                                    <?=$show["tarih"]; ?>
                                </div>
                            </div>
                            <div class="entry-header">
                                <h2 class="entry-title">
                                    <a href="?page=<?=$show["tur"]; ?>-bilet-al&e=<?=$show["id"]; ?>"><?=$show["baslik"]; ?></a>
                                </h2>
                            </div><!-- header end -->

                            <div class="entry-content">
                                <p><?=$show["yer"]; ?></p>
                            </div>

                            <div class="post-footer">
                                <a href="?page=<?=$show["tur"]; ?>-bilet-al&e=<?=$show["id"]; ?>" class="btn-link">Bilet Al <i class="icon icon-arrow-right"></i></a>
                            </div>

                        </div><!-- post-body end -->
                    </div><!-- post end-->
                </div>

                <?php endforeach; ?>
            </div><!-- row end-->
        </div><!-- container end-->
        <!-- shap image-->
        <div class="speaker-shap">
            <img class="shap2" src="assets/front/images/shap/news_memphis2.png" alt="">
            <img class="shap1" src="assets/front/images/shap/news_memphis1.png" alt="">
        </div>
    </section>



        <section class="ts-funfact" style="background-image: url('assets/front/images/funfact_bg.jpg'); display:none;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="ts-single-funfact">
                            <h3 class="funfact-num"><span class="counterUp" data-counter="43">43</span>+</h3>
                            <h4 class="funfact-title">Our Visionary
                                Speakers</h4>
                        </div>
                    </div><!-- col end-->
                    <div class="col-lg-3 col-md-6">
                        <div class="ts-single-funfact">
                            <h3 class="funfact-num"><span class="counterUp" data-counter="62">62</span></h3>
                            <h4 class="funfact-title">International Sponsors</h4>
                        </div>
                    </div><!-- col end-->
                    <div class="col-lg-3 col-md-6">
                        <div class="ts-single-funfact">
                            <h3 class="funfact-num"><span class="counterUp" data-counter="28">28</span>+</h3>
                            <h4 class="funfact-title">Workshops
                                We offer</h4>
                        </div>
                    </div><!-- col end-->
                    <div class="col-lg-3 col-md-6">
                        <div class="ts-single-funfact">
                            <h3 class="funfact-num"><span class="counterUp" data-counter="950">950</span>+</h3>
                            <h4 class="funfact-title">Event
                                Participants</h4>
                        </div>
                    </div><!-- col end-->
                </div><!-- row end-->
            </div><!-- container end-->
        </section>


        <section id="ts-speakers" class="ts-speakers" style="background-image:url('assets/front/images/speakers/speaker_bg.png'); display:none;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="section-title text-center">
                            <span>Listen to the</span>
                            Event Speakers
                        </h2>
                    </div><!-- col end-->
                </div><!-- row end-->
                <div class="row">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
                        <div class="ts-speaker">
                            <div class="speaker-img">
                                <img class="img-fluid" src="assets/front/images/speakers/speaker1.jpg" alt="">
                                <a href="index-7.html#popup_1" class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">
                                    <i class="icon icon-plus"></i>
                                </a>
                            </div>
                            <div class="ts-speaker-info">
                                <h3 class="ts-title"><a href="index-7.html#">Fredric Martinsson</a></h3>
                                <p>
                                    Founder, Edilta
                                </p>
                            </div>
                        </div>
                        <!-- popup start-->
                        <div id="popup_1" class="container ts-speaker-popup mfp-hide">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="ts-speaker-popup-img">
                                        <img src="assets/front/images/speakers/speaker1.jpg" alt="">
                                    </div>
                                </div><!-- col end-->
                                <div class="col-lg-6">
                                    <div class="ts-speaker-popup-content">
                                        <h3 class="ts-title">David Robert</h3>
                                        <span class="speakder-designation">Cheif Architecture</span>
                                        <img class="company-logo" src="assets/front/images/sponsors/sponsor-6.png" alt="">
                                        <p>
                                            World is committed to making participation in the event a harass ment free experience
                                            for everyone, regardless of level experience gender, gender identity and expression
                                        </p>
                                        <h4 class="session-name">
                                            Sessions by David
                                        </h4>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="speaker-session-info">
                                                    <h4>Day 1</h4>
                                                    <span>
                                                10.30 - 11.30 am
                                          </span>
                                                    <p>
                                                        Marketing Matters
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="speaker-session-info">
                                                    <h4>Day 1</h4>
                                                    <span>
                                                   10.30 - 11.30 am
                                             </span>
                                                    <p>
                                                        Marketing Matters
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ts-speakers-social">
                                            <a href="index-7.html#"><i class="fa fa-facebook"></i></a>
                                            <a href="index-7.html#"><i class="fa fa-twitter"></i></a>
                                            <a href="index-7.html#"><i class="fa fa-instagram"></i></a>
                                            <a href="index-7.html#"><i class="fa fa-google-plus"></i></a>
                                            <a href="index-7.html#"><i class="fa fa-linkedin"></i></a>
                                        </div>
                                    </div><!-- ts-speaker-popup-content end-->
                                </div><!-- col end-->
                            </div><!-- row end-->
                        </div><!-- popup end-->
                    </div> <!-- col end-->
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="500ms">
                        <div class="ts-speaker">
                            <div class="speaker-img">
                                <img class="img-fluid" src="assets/front/images/speakers/speaker2.jpg" alt="">
                                <a href="index-7.html#popup_2"  class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">
                                    <i class="icon icon-plus"></i>
                                </a>
                            </div>
                            <div class="ts-speaker-info">
                                <h3 class="ts-title"><a href="index-7.html#">Melisa Lundryn</a></h3>
                                <p>
                                    Lead Designer, Payol
                                </p>
                            </div>
                        </div>
                        <!-- popup start-->
                        <div id="popup_2" class="container ts-speaker-popup mfp-hide">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="ts-speaker-popup-img">
                                        <img src="assets/front/images/speakers/speaker2.jpg" alt="">
                                    </div>
                                </div><!-- col end-->
                                <div class="col-lg-6">
                                    <div class="ts-speaker-popup-content">
                                        <h3 class="ts-title">David Robert</h3>
                                        <span class="speakder-designation">Cheif Architecture</span>
                                        <img class="company-logo" src="assets/front/images/sponsors/sponsor-6.png" alt="">
                                        <p>
                                            World is committed to making participation in the event a harass ment free experience
                                            for everyone, regardless of level experience gender, gender identity and expression
                                        </p>
                                        <h4 class="session-name">
                                            Sessions by David
                                        </h4>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="speaker-session-info">
                                                    <h4>Day 1</h4>
                                                    <span>
                                                      10.30 - 11.30 am
                                                </span>
                                                    <p>
                                                        Marketing Matters
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="speaker-session-info">
                                                    <h4>Day 1</h4>
                                                    <span>
                                                         10.30 - 11.30 am
                                                   </span>
                                                    <p>
                                                        Marketing Matters
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ts-speakers-social">
                                            <a href="index-7.html#"><i class="fa fa-facebook"></i></a>
                                            <a href="index-7.html#"><i class="fa fa-twitter"></i></a>
                                            <a href="index-7.html#"><i class="fa fa-instagram"></i></a>
                                            <a href="index-7.html#"><i class="fa fa-google-plus"></i></a>
                                            <a href="index-7.html#"><i class="fa fa-linkedin"></i></a>
                                        </div>
                                    </div><!-- ts-speaker-popup-content end-->
                                </div><!-- col end-->
                            </div><!-- row end-->
                        </div><!-- popup end-->
                    </div> <!-- col end-->
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="600ms">
                        <div class="ts-speaker">
                            <div class="speaker-img">
                                <img class="img-fluid" src="assets/front/images/speakers/speaker3.jpg" alt="">
                                <a href="index-7.html#popup_3" class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">
                                    <i class="icon icon-plus"></i>
                                </a>
                            </div>
                            <div class="ts-speaker-info">
                                <h3 class="ts-title"><a href="index-7.html#">Agaton Johnsson</a></h3>
                                <p>
                                    Developer Expert
                                </p>
                            </div>
                        </div>
                        <!-- popup start-->
                        <div id="popup_3" class="container ts-speaker-popup mfp-hide">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="ts-speaker-popup-img">
                                        <img src="assets/front/images/speakers/speaker3.jpg" alt="">
                                    </div>
                                </div><!-- col end-->
                                <div class="col-lg-6">
                                    <div class="ts-speaker-popup-content">
                                        <h3 class="ts-title">David Robert</h3>
                                        <span class="speakder-designation">Cheif Architecture</span>
                                        <img class="company-logo" src="assets/front/images/sponsors/sponsor-6.png" alt="">
                                        <p>
                                            World is committed to making participation in the event a harass ment free experience
                                            for everyone, regardless of level experience gender, gender identity and expression
                                        </p>
                                        <h4 class="session-name">
                                            Sessions by David
                                        </h4>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="speaker-session-info">
                                                    <h4>Day 1</h4>
                                                    <span>
                                                      10.30 - 11.30 am
                                                </span>
                                                    <p>
                                                        Marketing Matters
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="speaker-session-info">
                                                    <h4>Day 1</h4>
                                                    <span>
                                                         10.30 - 11.30 am
                                                   </span>
                                                    <p>
                                                        Marketing Matters
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ts-speakers-social">
                                            <a href="index-7.html#"><i class="fa fa-facebook"></i></a>
                                            <a href="index-7.html#"><i class="fa fa-twitter"></i></a>
                                            <a href="index-7.html#"><i class="fa fa-instagram"></i></a>
                                            <a href="index-7.html#"><i class="fa fa-google-plus"></i></a>
                                            <a href="index-7.html#"><i class="fa fa-linkedin"></i></a>
                                        </div>
                                    </div><!-- ts-speaker-popup-content end-->
                                </div><!-- col end-->
                            </div><!-- row end-->
                        </div><!-- popup end-->
                    </div> <!-- col end-->
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="700ms">
                        <div class="ts-speaker">
                            <div class="speaker-img">
                                <img class="img-fluid" src="assets/front/images/speakers/speaker4.jpg" alt="">
                                <a href="index-7.html#popup_4" class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">
                                    <i class="icon icon-plus"></i>
                                </a>
                            </div>
                            <div class="ts-speaker-info">
                                <h3 class="ts-title"><a href="index-7.html#">Rebecca Henrikon</a></h3>
                                <p>
                                    Founder, Cards
                                </p>
                            </div>
                        </div>
                        <!-- popup start-->
                        <div id="popup_4" class="container ts-speaker-popup mfp-hide">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="ts-speaker-popup-img">
                                        <img src="assets/front/images/speakers/speaker4.jpg" alt="">
                                    </div>
                                </div><!-- col end-->
                                <div class="col-lg-6">
                                    <div class="ts-speaker-popup-content">
                                        <h3 class="ts-title">David Robert</h3>
                                        <span class="speakder-designation">Cheif Architecture</span>
                                        <img class="company-logo" src="assets/front/images/sponsors/sponsor-6.png" alt="">
                                        <p>
                                            World is committed to making participation in the event a harass ment free experience
                                            for everyone, regardless of level experience gender, gender identity and expression
                                        </p>
                                        <h4 class="session-name">
                                            Sessions by David
                                        </h4>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="speaker-session-info">
                                                    <h4>Day 1</h4>
                                                    <span>
                                                      10.30 - 11.30 am
                                                </span>
                                                    <p>
                                                        Marketing Matters
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="speaker-session-info">
                                                    <h4>Day 1</h4>
                                                    <span>
                                                         10.30 - 11.30 am
                                                   </span>
                                                    <p>
                                                        Marketing Matters
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ts-speakers-social">
                                            <a href="index-7.html#"><i class="fa fa-facebook"></i></a>
                                            <a href="index-7.html#"><i class="fa fa-twitter"></i></a>
                                            <a href="index-7.html#"><i class="fa fa-instagram"></i></a>
                                            <a href="index-7.html#"><i class="fa fa-google-plus"></i></a>
                                            <a href="index-7.html#"><i class="fa fa-linkedin"></i></a>
                                        </div>
                                    </div><!-- ts-speaker-popup-content end-->
                                </div><!-- col end-->
                            </div><!-- row end-->
                        </div><!-- popup end-->
                    </div> <!-- col end-->
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="800ms">
                        <div class="ts-speaker">
                            <div class="speaker-img">
                                <img class="img-fluid" src="assets/front/images/speakers/speaker5.jpg" alt="">
                                <a href="index-7.html#popup_5" class="view-speaker  ts-image-popup" data-effect="mfp-zoom-in">
                                    <i class="icon icon-plus"></i>
                                </a>
                            </div>
                            <div class="ts-speaker-info">
                                <h3 class="ts-title"><a href="index-7.html#">Fredric Martinsson</a></h3>
                                <p>
                                    Founder, Edilta
                                </p>
                            </div>
                        </div>
                        <!-- popup start-->
                        <div id="popup_5" class="container ts-speaker-popup mfp-hide">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="ts-speaker-popup-img">
                                        <img src="assets/front/images/speakers/speaker5.jpg" alt="">
                                    </div>
                                </div><!-- col end-->
                                <div class="col-lg-6">
                                    <div class="ts-speaker-popup-content">
                                        <h3 class="ts-title">David Robert</h3>
                                        <span class="speakder-designation">Cheif Architecture</span>
                                        <img class="company-logo" src="assets/front/images/sponsors/sponsor-6.png" alt="">
                                        <p>
                                            World is committed to making participation in the event a harass ment free experience
                                            for everyone, regardless of level experience gender, gender identity and expression
                                        </p>
                                        <h4 class="session-name">
                                            Sessions by David
                                        </h4>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="speaker-session-info">
                                                    <h4>Day 1</h4>
                                                    <span>
                                                      10.30 - 11.30 am
                                                </span>
                                                    <p>
                                                        Marketing Matters
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="speaker-session-info">
                                                    <h4>Day 1</h4>
                                                    <span>
                                                         10.30 - 11.30 am
                                                   </span>
                                                    <p>
                                                        Marketing Matters
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ts-speakers-social">
                                            <a href="index-7.html#"><i class="fa fa-facebook"></i></a>
                                            <a href="index-7.html#"><i class="fa fa-twitter"></i></a>
                                            <a href="index-7.html#"><i class="fa fa-instagram"></i></a>
                                            <a href="index-7.html#"><i class="fa fa-google-plus"></i></a>
                                            <a href="index-7.html#"><i class="fa fa-linkedin"></i></a>
                                        </div>
                                    </div><!-- ts-speaker-popup-content end-->
                                </div><!-- col end-->
                            </div><!-- row end-->
                        </div><!-- popup end-->
                    </div> <!-- col end-->
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="900ms">
                        <div class="ts-speaker">
                            <div class="speaker-img">
                                <img class="img-fluid" src="assets/front/images/speakers/speaker6.jpg" alt="">
                                <a href="index-7.html#popup_6" class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">
                                    <i class="icon icon-plus"></i>
                                </a>
                            </div>
                            <div class="ts-speaker-info">
                                <h3 class="ts-title"><a href="index-7.html#">Lundryn Melisa </a></h3>
                                <p>
                                    Lead Designer, Payol
                                </p>
                            </div>
                        </div>
                        <!-- popup start-->
                        <div id="popup_6" class="container ts-speaker-popup mfp-hide">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="ts-speaker-popup-img">
                                        <img src="assets/front/images/speakers/speaker1.jpg" alt="">
                                    </div>
                                </div><!-- col end-->
                                <div class="col-lg-6">
                                    <div class="ts-speaker-popup-content">
                                        <h3 class="ts-title">David Robert</h3>
                                        <span class="speakder-designation">Cheif Architecture</span>
                                        <img class="company-logo" src="assets/front/images/sponsors/sponsor-6.png" alt="">
                                        <p>
                                            World is committed to making participation in the event a harass ment free experience
                                            for everyone, regardless of level experience gender, gender identity and expression
                                        </p>
                                        <h4 class="session-name">
                                            Sessions by David
                                        </h4>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="speaker-session-info">
                                                    <h4>Day 1</h4>
                                                    <span>
                                                      10.30 - 11.30 am
                                                </span>
                                                    <p>
                                                        Marketing Matters
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="speaker-session-info">
                                                    <h4>Day 1</h4>
                                                    <span>
                                                         10.30 - 11.30 am
                                                   </span>
                                                    <p>
                                                        Marketing Matters
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ts-speakers-social">
                                            <a href="index-7.html#"><i class="fa fa-facebook"></i></a>
                                            <a href="index-7.html#"><i class="fa fa-twitter"></i></a>
                                            <a href="index-7.html#"><i class="fa fa-instagram"></i></a>
                                            <a href="index-7.html#"><i class="fa fa-google-plus"></i></a>
                                            <a href="index-7.html#"><i class="fa fa-linkedin"></i></a>
                                        </div>
                                    </div><!-- ts-speaker-popup-content end-->
                                </div><!-- col end-->
                            </div><!-- row end-->
                        </div><!-- popup end-->
                    </div> <!-- col end-->
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1000ms">
                        <div class="ts-speaker">
                            <div class="speaker-img">
                                <img class="img-fluid" src="assets/front/images/speakers/speaker7.jpg" alt="">
                                <a href="index-7.html#popup_7" class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">
                                    <i class="icon icon-plus"></i>
                                </a>
                            </div>
                            <div class="ts-speaker-info">
                                <h3 class="ts-title"><a href="index-7.html#">Johnsson Agaton </a></h3>
                                <p>
                                    Developer Expert
                                </p>
                            </div>
                        </div>
                        <!-- popup start-->
                        <div id="popup_7" class="container ts-speaker-popup mfp-hide">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="ts-speaker-popup-img">
                                        <img src="assets/front/images/speakers/speaker7.jpg" alt="">
                                    </div>
                                </div><!-- col end-->
                                <div class="col-lg-6">
                                    <div class="ts-speaker-popup-content">
                                        <h3 class="ts-title">David Robert</h3>
                                        <span class="speakder-designation">Cheif Architecture</span>
                                        <img class="company-logo" src="assets/front/images/sponsors/sponsor-6.png" alt="">
                                        <p>
                                            World is committed to making participation in the event a harass ment free experience
                                            for everyone, regardless of level experience gender, gender identity and expression
                                        </p>
                                        <h4 class="session-name">
                                            Sessions by David
                                        </h4>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="speaker-session-info">
                                                    <h4>Day 1</h4>
                                                    <span>
                                                      10.30 - 11.30 am
                                                </span>
                                                    <p>
                                                        Marketing Matters
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="speaker-session-info">
                                                    <h4>Day 1</h4>
                                                    <span>
                                                         10.30 - 11.30 am
                                                   </span>
                                                    <p>
                                                        Marketing Matters
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ts-speakers-social">
                                            <a href="index-7.html#"><i class="fa fa-facebook"></i></a>
                                            <a href="index-7.html#"><i class="fa fa-twitter"></i></a>
                                            <a href="index-7.html#"><i class="fa fa-instagram"></i></a>
                                            <a href="index-7.html#"><i class="fa fa-google-plus"></i></a>
                                            <a href="index-7.html#"><i class="fa fa-linkedin"></i></a>
                                        </div>
                                    </div><!-- ts-speaker-popup-content end-->
                                </div><!-- col end-->
                            </div><!-- row end-->
                        </div><!-- popup end-->
                    </div> <!-- col end-->

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="1100ms">
                        <div class="ts-speaker">
                            <div class="speaker-img">
                                <img class="img-fluid" src="assets/front/images/speakers/speaker8.jpg" alt="">
                                <a href="index-7.html#popup_8" class="view-speaker ts-image-popup" data-effect="mfp-zoom-in">
                                    <i class="icon icon-plus"></i>
                                </a>
                            </div>
                            <div class="ts-speaker-info">
                                <h3 class="ts-title"><a href="index-7.html#">Henrikon Rebecca </a></h3>
                                <p>
                                    Founder, Cards
                                </p>
                            </div>
                        </div>
                        <!-- popup start-->
                        <div id="popup_8" class="container ts-speaker-popup mfp-hide">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="ts-speaker-popup-img">
                                        <img src="assets/front/images/speakers/speaker8.jpg" alt="">
                                    </div>
                                </div><!-- col end-->
                                <div class="col-lg-6">
                                    <div class="ts-speaker-popup-content">
                                        <h3 class="ts-title">David Robert</h3>
                                        <span class="speakder-designation">Cheif Architecture</span>
                                        <img class="company-logo" src="assets/front/images/sponsors/sponsor-6.png" alt="">
                                        <p>
                                            World is committed to making participation in the event a harass ment free experience
                                            for everyone, regardless of level experience gender, gender identity and expression
                                        </p>
                                        <h4 class="session-name">
                                            Sessions by David
                                        </h4>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="speaker-session-info">
                                                    <h4>Day 1</h4>
                                                    <span>
                                                      10.30 - 11.30 am
                                                </span>
                                                    <p>
                                                        Marketing Matters
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="speaker-session-info">
                                                    <h4>Day 1</h4>
                                                    <span>
                                                         10.30 - 11.30 am
                                                   </span>
                                                    <p>
                                                        Marketing Matters
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ts-speakers-social">
                                            <a href="index-7.html#"><i class="fa fa-facebook"></i></a>
                                            <a href="index-7.html#"><i class="fa fa-twitter"></i></a>
                                            <a href="index-7.html#"><i class="fa fa-instagram"></i></a>
                                            <a href="index-7.html#"><i class="fa fa-google-plus"></i></a>
                                            <a href="index-7.html#"><i class="fa fa-linkedin"></i></a>
                                        </div>
                                    </div><!-- ts-speaker-popup-content end-->
                                </div><!-- col end-->
                            </div><!-- row end-->
                        </div><!-- popup end-->
                    </div> <!-- col end-->
                </div><!-- row end-->
            </div><!-- container end-->


            <div class="speaker-shap">
                <img class="shap1" src="assets/front/images/shap/home_speaker_memphis1.png" alt="">
                <img class="shap2" src="assets/front/images/shap/home_speaker_memphis2.png" alt="">
                <img class="shap3" src="assets/front/images/shap/home_speaker_memphis3.png" alt="">
            </div>
        </section>


        <section id="ts-experiences" class="ts-experiences" style="display:none;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 no-padding">
                        <div class="exp-img" style="background-image:url('assets/front/images/cta_img.jpg')">
                        </div>
                    </div><!-- col end-->
                    <div class="col-lg-6 no-padding align-self-center">
                        <div class="ts-exp-wrap">
                            <div class="ts-exp-content">
                                <h2 class="column-title">
                                    <span>Get Experience</span>
                                    Shift your perspective on
                                    digital business
                                </h2>
                                <p>
                                    How  you transform your business as technology, consumer, habits industry dynamic s change? Find out from those leading the charge.
                                </p>
                            </div>
                        </div>

                    </div><!-- col end-->
                </div><!-- row end-->
            </div><!-- container fluid end-->
        </section>


        <section class="ts-schedule"style="display:none;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="section-title">
                            <span>Schedule Details</span>
                            Event Schedules
                        </h2>
                        <div class="ts-schedule-nav">
                            <ul class="nav nav-tabs justify-content-center" role="tablist">
                                <li class="nav-item">
                                    <a class="active" title="Click Me" href="index-7.html#date1" role="tab" data-toggle="tab">
                                        <h3>5th June</h3>
                                        <span>Friday</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="" href="index-7.html#date2" title="Click Me" role="tab" data-toggle="tab">        <h3>6th June</h3>
                                        <span>Saturday</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="" href="index-7.html#date3" title="Click Me" role="tab" data-toggle="tab">
                                        <h3>7th June</h3>
                                        <span>Sunday</span>
                                    </a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                        </div>
                    </div><!-- col end-->

                </div><!-- row end-->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tab-content schedule-tabs schedule-tabs-item">
                            <div role="tabpanel" class="tab-pane active" id="date1">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="schedule-listing-item schedule-left">
                                            <img class="schedule-slot-speakers" src="assets/front/images/speakers/speaker1.jpg" alt="">
                                            <span class="schedule-slot-time">10.30 - 11.30 AM</span>
                                            <h3 class="schedule-slot-title">Marketing Matters</h3>
                                            <h4 class="schedule-slot-name">@ Henrikon Rebecca</h4>
                                            <p>
                                                How you transform your business technolog consumer habits industry dynamics change
                                                Find out from those leading the charge How you
                                            </p>
                                        </div>
                                    </div><!-- col end-->
                                    <div class="col-lg-6">
                                        <div class="schedule-listing-item schedule-right">
                                            <img class="schedule-slot-speakers" src="assets/front/images/speakers/speaker2.jpg" alt="">
                                            <span class="schedule-slot-time">11.30 - 12.30 PM</span>
                                            <h3 class="schedule-slot-title">Reinventing Experiences</h3>
                                            <h4 class="schedule-slot-name">@ Johnsson Agaton</h4>
                                            <p>
                                                How you transform your business technolog consumer habits industry dynamics change
                                                Find out from those leading the charge How you
                                            </p>
                                        </div>
                                    </div><!-- col end-->
                                    <div class="col-lg-6">
                                        <div class="schedule-listing-item schedule-left">
                                            <img class="schedule-slot-speakers" src="assets/front/images/speakers/speaker3.jpg" alt="">
                                            <span class="schedule-slot-time">12.30 - 01.30 PM</span>
                                            <h3 class="schedule-slot-title">Cultures of Creativity</h3>
                                            <h4 class="schedule-slot-name">@ Lundryn Melisa</h4>
                                            <p>
                                                How you transform your business technolog consumer habits industry dynamics change
                                                Find out from those leading the charge How you
                                            </p>
                                        </div>
                                    </div><!-- col end-->
                                    <div class="col-lg-6">
                                        <div class="schedule-listing-item schedule-right">
                                            <img class="schedule-slot-speakers" src="assets/front/images/speakers/speaker4.jpg" alt="">
                                            <span class="schedule-slot-time">01.30 - 02.30 PM</span>
                                            <h3 class="schedule-slot-title">Human Centered Design</h3>
                                            <h4 class="schedule-slot-name">@ Fredric Martinsson</h4>
                                            <p>
                                                How you transform your business technolog consumer habits industry dynamics change
                                                Find out from those leading the charge How you
                                            </p>
                                        </div>
                                    </div><!-- col end-->
                                </div><!-- row end-->
                                <div class="schedule-listing-btn">
                                    <a href="index-7.html#" class="btn">More Details</a>
                                </div>
                            </div><!-- tab pane end-->

                            <div role="tabpanel" class="tab-pane" id="date2">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="schedule-listing-item schedule-left">
                                            <img class="schedule-slot-speakers" src="assets/front/images/speakers/speaker5.jpg" alt="">
                                            <span class="schedule-slot-time">02.30 - 03.30 PM</span>
                                            <h3 class="schedule-slot-title">Marketing Matters</h3>
                                            <h4 class="schedule-slot-name">@ Rebecca Henrikon</h4>
                                            <p>
                                                How you transform your business technolog consumer habits industry dynamics change
                                                Find out from those leading the charge How you
                                            </p>
                                        </div>
                                    </div><!-- col end-->
                                    <div class="col-lg-6">
                                        <div class="schedule-listing-item schedule-right">
                                            <img class="schedule-slot-speakers" src="assets/front/images/speakers/speaker6.jpg" alt="">
                                            <span class="schedule-slot-time">03.30 - 04.30 PM</span>
                                            <h3 class="schedule-slot-title">Reinventing Experiences</h3>
                                            <h4 class="schedule-slot-name">@ Fredric Martinsson</h4>
                                            <p>
                                                How you transform your business technolog consumer habits industry dynamics change
                                                Find out from those leading the charge How you
                                            </p>
                                        </div>
                                    </div><!-- col end-->
                                    <div class="col-lg-6">
                                        <div class="schedule-listing-item schedule-left">
                                            <img class="schedule-slot-speakers" src="assets/front/images/speakers/speaker7.jpg" alt="">
                                            <span class="schedule-slot-time">04.30 - 05.30 PM</span>
                                            <h3 class="schedule-slot-title">Cultures of Creativity</h3>
                                            <h4 class="schedule-slot-name">@ Melisa Lundryn</h4>
                                            <p>
                                                How you transform your business technolog consumer habits industry dynamics change
                                                Find out from those leading the charge How you
                                            </p>
                                        </div>
                                    </div><!-- col end-->
                                    <div class="col-lg-6">
                                        <div class="schedule-listing-item schedule-right">
                                            <img class="schedule-slot-speakers" src="assets/front/images/speakers/speaker8.jpg" alt="">
                                            <span class="schedule-slot-time">05.30 - 06.30 PM</span>
                                            <h3 class="schedule-slot-title">Human Centered Design</h3>
                                            <h4 class="schedule-slot-name">@ Agaton Johnsson</h4>
                                            <p>
                                                How you transform your business technolog consumer habits industry dynamics change
                                                Find out from those leading the charge How you
                                            </p>
                                        </div>
                                    </div><!-- col end-->
                                </div><!-- row end-->
                                <div class="schedule-listing-btn">
                                    <a href="index-7.html#" class="btn">More Details</a>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="date3">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="schedule-listing-item schedule-left">
                                            <img class="schedule-slot-speakers" src="assets/front/images/speakers/speaker1.jpg" alt="">
                                            <span class="schedule-slot-time">10.30 - 11.30 AM</span>
                                            <h3 class="schedule-slot-title">Marketing Matters</h3>
                                            <h4 class="schedule-slot-name">@ Rebecca Henrikon</h4>
                                            <p>
                                                How you transform your business technolog consumer habits industry dynamics change
                                                Find out from those leading the charge How you
                                            </p>
                                        </div>
                                    </div><!-- col end-->
                                    <div class="col-lg-6">
                                        <div class="schedule-listing-item schedule-right">
                                            <img class="schedule-slot-speakers" src="assets/front/images/speakers/speaker2.jpg" alt="">
                                            <span class="schedule-slot-time">11.30 - 12.30 PM</span>
                                            <h3 class="schedule-slot-title">Reinventing Experiences</h3>
                                            <h4 class="schedule-slot-name">@ Hall Building</h4>
                                            <p>
                                                How you transform your business technolog consumer habits industry dynamics change
                                                Find out from those leading the charge How you
                                            </p>
                                        </div>
                                    </div><!-- col end-->
                                    <div class="col-lg-6">
                                        <div class="schedule-listing-item schedule-left">
                                            <img class="schedule-slot-speakers" src="assets/front/images/speakers/speaker3.jpg" alt="">
                                            <span class="schedule-slot-time">01.30 - 02.30 PM</span>
                                            <h3 class="schedule-slot-title">Cultures of Creativity</h3>
                                            <h4 class="schedule-slot-name">@ Fredric Martinsson</h4>
                                            <p>
                                                How you transform your business technolog consumer habits industry dynamics change
                                                Find out from those leading the charge How you
                                            </p>
                                        </div>
                                    </div><!-- col end-->
                                    <div class="col-lg-6">
                                        <div class="schedule-listing-item schedule-right">
                                            <img class="schedule-slot-speakers" src="assets/front/images/speakers/speaker4.jpg" alt="">
                                            <span class="schedule-slot-time">03.30 - 04.30 PM</span>
                                            <h3 class="schedule-slot-title">Human Centered Design</h3>
                                            <h4 class="schedule-slot-name">@ Henrikon Rebecca</h4>
                                            <p>
                                                How you transform your business technolog consumer habits industry dynamics change
                                                Find out from those leading the charge How you
                                            </p>
                                        </div>
                                    </div><!-- col end-->
                                </div><!-- row end-->
                                <div class="schedule-listing-btn">
                                    <a href="index-7.html#" class="btn">More Details</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div><!-- container end-->
        </section>


        <section class="ts-map-direction wow fadeInUp" style="display:none" data-wow-duration="1.5s" data-wow-delay="400ms">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <h2 class="column-title">
                            <span>Reach us</span>
                            Get Direction to the
                            Event Hall
                        </h2>

                        <div class="ts-map-tabs">
                            <ul class="nav" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" href="index-7.html#profile" role="tab" data-toggle="tab">Venue</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index-7.html#buzz" role="tab" data-toggle="tab">Time</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index-7.html#references" role="tab" data-toggle="tab">How to get there</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content direction-tabs">
                                <div role="tabpanel" class="tab-pane active" id="profile">
                                    <div class="direction-tabs-content">
                                        <h3>Brighton Waterfront Hotel, Brighton, London</h3>
                                        <p class="derecttion-vanue">
                                            1Hd- 50, 010 Avenue, NY 90001<br/>
                                            United States
                                        </p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="contact-info-box">
                                                    <h3>Tickets info </h3>
                                                    <p><strong>Name:</strong> Ronaldo König</p>
                                                    <p><strong>Phone:</strong> 009-215-5595</p>
                                                    <p><strong>Email: </strong> info@example.com</p>
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="contact-info-box">
                                                    <h3>Programme Details </h3>
                                                    <p><strong>Name:</strong> Ronaldo König</p>
                                                    <p><strong>Phone:</strong> 009-215-5595</p>
                                                    <p><strong>Email: </strong> info@example.com</p>
                                                </div>
                                            </div>
                                        </div><!-- row end-->
                                    </div><!-- direction tabs end-->
                                </div><!-- tab pane end-->
                                <div role="tabpanel" class="tab-pane fade" id="buzz">
                                    <div class="direction-tabs-content">
                                        <h3>Brighton Waterfront Hotel, Brighton, London</h3>
                                        <p class="derecttion-vanue">
                                            1Hd- 50, 010 Avenue, NY 90001<br/>
                                            United States
                                        </p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="contact-info-box">
                                                    <h3>Tickets info </h3>
                                                    <p><strong>Name:</strong> Ronaldo König</p>
                                                    <p><strong>Phone:</strong> 009-215-5595</p>
                                                    <p><strong>Email: </strong> info@example.com</p>
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="contact-info-box">
                                                    <h3>Programme Details </h3>
                                                    <p><strong>Name:</strong> Ronaldo König</p>
                                                    <p><strong>Phone:</strong> 009-215-5595</p>
                                                    <p><strong>Email: </strong> info@example.com</p>
                                                </div>
                                            </div>
                                        </div><!-- row end-->
                                    </div><!-- direction tabs end-->
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="references">
                                    <div class="direction-tabs-content">
                                        <h3>Brighton Waterfront Hotel, Brighton, London</h3>
                                        <p class="derecttion-vanue">
                                            1Hd- 50, 010 Avenue, NY 90001<br/>
                                            United States
                                        </p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="contact-info-box">
                                                    <h3>Tickets info </h3>
                                                    <p><strong>Name:</strong> Ronaldo König</p>
                                                    <p><strong>Phone:</strong> 009-215-5595</p>
                                                    <p><strong>Email: </strong> info@example.com</p>
                                                </div>

                                            </div>
                                            <div class="col-md-6">
                                                <div class="contact-info-box">
                                                    <h3>Programme Details </h3>
                                                    <p><strong>Name:</strong> Ronaldo König</p>
                                                    <p><strong>Phone:</strong> 009-215-5595</p>
                                                    <p><strong>Email: </strong> info@example.com</p>
                                                </div>
                                            </div>
                                        </div><!-- row end-->
                                    </div><!-- direction tabs end-->
                                </div>
                            </div>

                        </div><!-- map tabs end-->

                    </div><!-- col end-->
                    <div class="col-lg-6 offset-lg-1">
                        <div class="ts-map">
                            <div class="mapouter">
                                <div class="gmap_canvas">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.9028133968723!2d-73.99208268505396!3d40.74216397932861!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a4119ce269:0x9dec0c979b575972!2sEataly+NYC+Flatiron!5e0!3m2!1sen!2sbd!4v1541577288827"></iframe>
                                </div>

                            </div>
                        </div>
                    </div>
                </div><!-- col end-->
            </div><!-- container end-->
            <div class="speaker-shap">
                <img class="shap1" src="assets/front/images/shap/Direction_memphis3.png" alt="">
                <img class="shap2" src="assets/front/images/shap/Direction_memphis2.png" alt="">
                <img class="shap3" src="assets/front/images/shap/Direction_memphis4.png" alt="">
                <img class="shap4" src="assets/front/images/shap/Direction_memphis1.png" alt="">
            </div>
        </section>







