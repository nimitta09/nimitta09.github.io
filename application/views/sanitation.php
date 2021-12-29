<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Water & Sanitation || Nimitta NGO</title>
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
                    <h2>Water & Sanitation</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="<?php echo base_url();?>">Home</a></li>
                        <li><span>/</span></li>
                        <li class="active">Water & Sanitation</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Event Details Start-->
        <section class="event-details">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="event-details__img">
                            <img src="<?php echo base_url();?>assets/images/gallery/nimitta-sanitation.jpeg" alt="">
                        </div>
                    </div>
                </div>
                <div class="event-details__bottom">
                    <div class="row">
                        <div class="col-xl-8 col-lg-7">
                            <div class="event-details__bottom-left">
                                <div class="event-details__bottom-content">
                                    
                                    <p class="event-details__text-1">Under Neer-Nirmal Pariyojna, we implemented a World Bank project on water and sanitation in 10 villages of Khunti block and district. Through this, we not only raised awareness on water sanitation and hygiene, but also made a DPR on various aspects in association with the DWSD. This project was coordinated at a grassroot level by mobilizing the Gram Panchayat, school children, and SHGs and other stakeholders. We also supported and constructed toilets for the people of Childag village, Ratu, Ranchi.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5">
                            <div class="event-details__img">
                            <img src="<?php echo base_url();?>assets/images/gallery/nnimitta-education-3.jpg" alt="">
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Event Details End-->

<!--Events Page Start-->
        <section class="events-page events--carousel ">
            <div class="container">
                <div class="thm-owl__carousel events__carousel  carousel--have-shadow owl-carousel" data-owl-options='{
                    "loop": true,
                    "margin": 30,
                    "items": 1,
                    "nav": true,
                    "dots": true,
                    "smartSpeed": 700,
                    "navText": ["<i class=\"fa fa-angle-left\"></i>", "<i class=\"fa fa-angle-right\"></i>"],
                    "responsive": {
                        "0": {
                            "items": 1,
                            "margin": 0
                        },
                        "768": {
                            "items": 2,
                            "margin": 30
                        },
                        "992": {
                            "items": 3,
                            "margin": 30
                        }
                    }
                }'>
                    <div class="item">
                        <!--Events Single-->
                        <div class="events__single">
                            <div class="events__img">
                                <img src="assets/images/gallery/nimitta-school.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <!--Events Single-->
                        <div class="events__single">
                            <div class="events__img">
                                <img src="assets/images/gallery/nimitta-4.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <!--Events Single-->
                        <div class="events__single">
                            <div class="events__img">
                                <img src="assets/images/gallery/nimitta-3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Events Page End-->
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