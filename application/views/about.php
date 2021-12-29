<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> About | Nimitta | NGO | Mass-Marriage | Health | Covid Relief | Water & Sanitation | Birth Registration</title>
    <?php include('assets/stylesheets.php'); ?>
</head>

<body>
    <div class="preloader">
        <img class="preloader__image" width="60" src="assets/images/loader.png" alt="" />
    </div>
    <!-- /.preloader -->
    <div class="page-wrapper">
         <?php include('header.php'); ?>

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!--Page Header Start-->
        <section class="page-header">
            <div class="page-header-bg">
            </div>
            <div class="container">
                <div class="page-header__inner">
                    <h2>About</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index-2.html">Home</a></li>
                        <li><span>/</span></li>
                        <li class="active">About</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--About Page Start-->
        <section class="about-page">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-page__left wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <div class="about-page__img">
                                <img src="assets/images/resources/about.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-page__right">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">get to know us</span>
                                <h2 class="section-title__title">Nimitta : About our name</h2>
                            </div>
                            <p class="about-page__text">Our name NIMITTA (निमित्त), a Hindi word, means the instrument or cause or medium, underlines our philosophy, vision and strategy.</p>
                                <p>NIMITTA is strong both in advocacy and action fronts. We have worked in the field of providing social and legal status to the married couples, a first of its kind all over India, also in the areas of health, sanitation, education and livelihoods in Jharkhand, India.</p>                 
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About Page End-->


        <section class="two-boxes">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <!--Two Boxes Single-->
                        <div class="two-boxes__single wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms" style="background:cornflowerblue;">
                            
                            <div class="two-boxes__content">
                                <h3 class="two-boxes__title">Our Vision</h3>
                                <p class="two-boxes__text">Our vision is to work towards a society where every person is able to realize his/her optimum potential and participates and contributes to the development of his/her community, state, nation and the world while staying rooted in its own milieu and culture.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <!--Two Boxes Single-->
                        <div class="two-boxes__single wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms" style="background:crimson;">
                            
                            <div class="two-boxes__content">
                                <h3 class="two-boxes__title">Our Mission</h3>
                                <p class="two-boxes__text">Our goal is to bring forth people from diverse sections of society for common human interest developmental goals. Ulitmately, we strive for all round sustainable development of society focusing upon the underprivileged and disadvantaged through work in area of health care, livelihood promotion, education, savings & micro-credit, indigenous and folk-art forms, skill development, institution building, infrastructural development, environment & ecology improvement and other allied approaches.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Fundraising Start-->
        <section class="fundraishing">
            <div class="fundraishing-bg-box">
                <div class="fundraishing-bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                    style="background-image: url(assets/images/backgrounds/nimitta-education.jpg);"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="fundraishing__inner">
                            <p class="fundraishing__sub-title">We’re Here to Support Them</p>
                            <h2 class="fundraishing__title">Fundraising for the <span>People</span> and <br> Causes you
                                Care About</h2>
                            <div class="fundraishing__btn-box">
                                <a href="<?php echo base_url(); ?>donate" class="thm-btn fundraishing__btn">Start Donating now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Fundraising End-->

        <!--CTA One Start-->
        <section class="cta-one">
            <div class="cta-one-shape" style="background-image: url(assets/images/shapes/cta-one-shape.png);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="cta-one__inner">
                            <div class="cta-one__left">
                                <div class="cta-one__icon">
                                    <span class="icon-support"></span>
                                </div>
                                <h2 class="cta-one__title">Let’s Make a Difference in <br> the Lives of Others</h2>
                            </div>
                            <div class="cta-one__right">
                                <a href="<?php echo base_url();?>joinus" class="thm-btn cta-one__btn">become a volunteer</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--CTA One End-->

        <!--Site Footer Start-->
        <?php  include('footer.php'); ?>
        <!--Site Footer End-->


    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index-2.html" aria-label="logo image"><img src="assets/images/resources/logo-2.png" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:nimitta09@gmail.com">nimitta09@gmail.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:+919470359192">+91 9470359192</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="icon-magnifying-glass"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

   <?php include('assets/javascripts.php') ?>
</body>

</html>