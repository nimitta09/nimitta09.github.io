<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Become a Volunteer | Join Us</title>
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
                    <h2>Become a Volunteer</h2>
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="index-2.html">Home</a></li>
                        <li><span>/</span></li>
                        <li class="active">Volunteers</li>
                    </ul>
                </div>
            </div>
        </section>
        <!--Page Header End-->

        <!--Become Volunteer Start-->
        <section class="become-volunteer">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="become-volunteer__right">
                            <form class="become-volunteer__form">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="become-volunteer__input">
                                            <input type="text" placeholder="Your Name*" name="name">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="become-volunteer__input">
                                            <input type="text" placeholder="Highest qualification*" name="qualification">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="become-volunteer__input">
                                            <input type="email" placeholder="Email Address*" name="email">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="become-volunteer__input">
                                            <input type="text" placeholder="Phone Number (Optional)" name="phone">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="comment-form__input-box">
                                            <select name="subject">
                                                <option value="no-select">Nationality</option>
                                                <option value="Indian">Indian</option>
                                                <option value="Foreign">Foreign</option>
                                            </select><!-- /# -->
                                        </div>
                                    </div>
                                    <!-- <div class="col-xl-6">
                                        <div class="become-volunteer__input">
                                            <input type="text" placeholder="Occupation" name="Occupation">
                                        </div>
                                    </div> -->
                                    <div class="col-xl-12">
                                        
                                        <div class="become-volunteer__btn-box">
                                            <button type="submit" class="thm-btn become-volunteer__btn">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="become-volunteer__Left">
                            <div class="become-volunteer__images">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="become-volunteer__img-single">
                                            <img src="assets/images/resources/become-volunteer-img-1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="become-volunteer__img-single">
                                            <img src="assets/images/resources/become-volunteer-img-2.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!--Become Volunteer End-->

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