<?php
include('router.php');
include('translator.php');
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo _('Iconic Corporate Site') ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="icon" href="/Favicon.png" type="image/x-icon" />

        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <!--
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="/css/animate.css">
        <link rel="stylesheet" href="/css/main.css">
        -->
        <link rel="stylesheet" href="/css/min.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <style>
            .nav-fixed-menu li:nth-child(1) a:after {
                content: '<?php echo _('Home') ?>'; }
            .nav-fixed-menu li:nth-child(2) a:after {
                content: '<?php echo _('Our Services') ?>'; }
            .nav-fixed-menu li:nth-child(3) a:after {
                content: "<?php echo _('Iconic\'s History') ?>"; }
            .nav-fixed-menu li:nth-child(4) a:after {
                content: "<?php echo _('CEO\'s Message') ?>"; }
            .nav-fixed-menu li:nth-child(5) a:after {
                content: '<?php echo _('Mission') ?>'; }
            .nav-fixed-menu li:nth-child(6) a:after {
                content: '<?php echo _('Get In Touch') ?>'; }
        </style>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">
                You are using an <strong>outdated</strong> browser.
                Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div id="fullpage">
            <!-- Start Header -->
            <header class="section" id="header">
                <div class="container">
                    <!-- Social and language -->
                    <div id="social-language" class="os-animation" data-os-animation="fadeInRight"
                        data-os-animation-delay="0.5s">
                        <div class="social">
                            <a class="linkedin" href="#linkedin" title="LinkedIn">
                                <i class="fa fa-linkedin"></i>
                            </a>
                            <a class="facebook" href="#facebook" title="Facebook">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a class="twitter" href="#twitter" title="Twitter">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a class="google" href="#google" title="Google Plus">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </div>
                        <div class="language">
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                                    <?php echo _('Language') ?>
                                </button>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                    <li role="presentation">
                                        <a data-lang="en" role="menuitem" href="/en/"><?php echo _('English') ?></a>
                                    </li>
                                    <li role="presentation">
                                        <a data-lang="jp" role="menuitem" href="/jp/"><?php echo _('Japanese') ?></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="logo">
                        <a href="/" title="<?php echo _('Homepage') ?>">
                            <img class="center-block img-responsive os-animation" data-os-animation="zoomIn" data-os-animation-delay="0s"
                                src="/img/logo.png" alt="Iconic Logo" width="500" height="498"/>
                        </a>
                    </div>
                    <div class="slogan os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0.5s">
                        <?php echo _('We support those who work beyond borders!') ?>
                    </div>
                </div>
            </header><!-- End Header -->

            <!-- Our services -->
            <section class="section" id="our-services">
                <div class="container">
                    <div class="heading os-animation"
                         data-os-animation="pulse" data-os-animation-delay="0s">
                        <h2><?php echo _('Our services') ?></h2>
                        <p class="sub-tit">
                            <?php echo _('LET\'S ENJOY YOUR WORK BEYOND BORDERS!') ?>
                        </p>
                    </div>
                    <div id="service-details" class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 hr-recruitment os-animation"
                             data-os-animation="fadeInLeft" data-os-animation-delay="0.5s">
                            <h3>
                                <?php echo _('HR RECRUITMENT') ?>
                            </h3>
                            <p>
                                <?php echo _('We can assist you to recruit both Japanese and
                                Vietnamese in Vietnam. Our recruiting consulting
                                fee is charged upon contingent fee basis. We
                                maintain HR stock with various backgrounds lured
                                through various marketing mix. You can streamline
                                relevant administrative works upon recruitment
                                in your company by outsourcing them to ICONIC.
                                ') ?>
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 hr-consulting os-animation"
                             data-os-animation="fadeInRight" data-os-animation-delay="0.5s">
                            <h3>
                                <?php echo _('HR CONSULTING') ?>
                            </h3>
                            <p>
                                <?php echo _('We provide HR Management consulting which is
                                the most suitable for your company. Our consulting
                                methods are mainly focused on recruiting and
                                HR training procedures. The ultimate aim of our
                                HR consulting is to achieve your company\'s
                                growth by harmonizing the company\'s target goal
                                and the employees\'s career goals.
                                ') ?>
                            </p>
                        </div>
                    </div>
                </div>
            </section><!-- End our services -->

            <!-- History -->
            <section id="history">
                <div class="container">
                    <div class="heading os-animation"
                         data-os-animation="pulse" data-os-animation-delay="0s">
                        <h2><?php echo _('ICONIC\'S HISTORY') ?></h2>
                        <p class="sub-tit">
                            <?php echo _('LET\'S ENJOY YOUR WORK BEYOND BORDERS!') ?>
                        </p>
                    </div>
                    <div class="timeline">
                        <div class="event2004 right os-animation" data-os-animation="fadeInRight"
                             data-os-animation-delay="0s">
                            <h3><?php echo _('Join in Venture-Link Co.,Ltd.') ?></h3>
                            <p>
                                <?php echo _('Conduct management consulting in new product development
                                    especially for small and mideum sized retail companies in Japan to boost their
                                    sales revenues.') ?>
                            </p>
                        </div>
                        <div class="event2007 left os-animation" data-os-animation="fadeInLeft"
                             data-os-animation-delay="0s">
                            <h3><?php echo _('He entered Brainworks Asia Co.,Ltd.') ?></h3>
                            <p>
                                <?php echo _('Then,he had visited about 500companies in vietnam for a year') ?>
                            </p>
                        </div>
                        <div class="event2008 right os-animation" data-os-animation="fadeInRight"
                             data-os-animation-delay="0s">
                            <h3><?php echo _('ICONIC Co., Ltd. established') ?></h3>
                            <p>
                                <?php echo _('Launched HR Recruitment Service mainly for Japanese & Vietnamese in
                                Hochiminh City. Implemented this service mostly in areas in the south of Vietnam') ?>
                            </p>
                        </div>
                        <div class="event2010 left os-animation" data-os-animation="fadeInLeft"
                             data-os-animation-delay="0s">
                            <h3><?php echo _('ICONIC Co., Ltd Hanoi office established') ?></h3>
                            <p>
                                <?php echo _('Expand business in Northern') ?>
                            </p>
                        </div>
                        <div class="event2012 right os-animation" data-os-animation="fadeInRight"
                             data-os-animation-delay="0s">
                            <h3><?php echo _('ICONIC Japan Co., Ltd. established') ?></h3>
                            <p>
                                <?php echo _('Officially legalized global recruitment service in Japanese.') ?>
                            </p>
                        </div>
                        <div class="event2013 left os-animation" data-os-animation="fadeInLeft"
                             data-os-animation-delay="0s">
                            <h3><?php echo _('PT. ICONIC INDONESIA GW established') ?></h3>
                            <p>
                                <?php echo _('Launched HR recruitment service for Japanese & Indonesian in Indonesia') ?>
                            </p>
                        </div>
                        <div class="event2014 right os-animation" data-os-animation="fadeInRight"
                             data-os-animation-delay="0s">
                            <h3><?php echo _('ICONIC Japan Co., Ltd. Tokyo office established') ?></h3>
                            <p>
                                <?php echo _('We offer global human resource recruitment services focusing in Kanto area.
                                ') ?>
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CEO's Message -->
            <section class="section" id="ceo-message">
                <div class="container">
                    <div class="heading os-animation"
                         data-os-animation="pulse" data-os-animation-delay="0s">
                        <h2><?php echo _('CEO\'S MESSAGE') ?></h2>
                        <p class="sub-tit">
                            <?php echo _('LET\'S ENJOY YOUR WORK BEYOND BORDERS!') ?>
                        </p>
                    </div>
                    <div class="message pull-right col-lg-7 col-md-7 col-sm-7 col-xs-12 os-animation"
                        data-os-animation="zoomIn" data-os-animation-delay="0.5s">
                        <p>
                            <?php echo _('As the world has become borderless, various industries have met globalization,
                            which makes companies employ multi-national human resources correspondingly.') ?><br />
                            <?php echo _('A few decades ago, most of employees working in Japanese companies used to be
                            Japanese while we are so mixed up nowadays, which requires a new management style applicable
                            to employees with diversified nationalities hence characteristics. How to shift successfully
                            our management style from “Unification” to “Diversification”? This is the biggest challenge
                            for most companies.') ?>
                        </p>
                        <p>
                            <?php echo _('FDI from Japan flows into emerging markets in Asia more and more while not a
                            few of such companies see the difficulty in how to manage employees with diversified
                            characteristics. It is unavoidable for globalized companies to consider an appropriate
                            solution for multi-national human resource crisis.') ?>
                        </p>
                        <p>
                            <?php echo _('I established ICONIC with a wish.') ?><br />
                            "<?php echo _('I would like to make the foundation which enables globalized companies and
                            individuals to work comfortably even beyond borders!') ?>"<br />
                            <?php echo _('ICONIC offers you a best solution to manage and even take advantage of
                            diversity which makes your employees enjoy their works beyond borders.') ?>
                        </p>
                    </div>
                </div>
            </section><!-- End CEO's Message -->

            <!-- Mission -->
            <section class="section" id="mission" class="white-background">
                <div class="container">
                    <div class="heading os-animation"
                         data-os-animation="pulse" data-os-animation-delay="0s">
                        <h2><?php echo _('Mission') ?></h2>
                        <p class="sub-tit">
                            <?php echo _('Enrich Globalizing Society by HR Service') ?>
                        </p>
                    </div>
                    <div class="content os-animation"
                         data-os-animation="fadeInUp" data-os-animation-delay="0.5s">
                        <p>
                            <?php echo _('In 21st Century, the world becomes more complex and diversity, Information
                            Technology, price reduction of international movement with LCC, free trade makes goods move
                            accelerated, and highly developed finance makes capital move all over the world. Globalization
                            change people’s life and society fundamentally. We have many kinds of problems such as
                            Disparity, Environmental problem, Security problem with globalization. But we believe that
                            the globalization society is:') ?>
                        </p>
                        <ul>
                            <li><?php echo _('To make a change to people dream comes true') ?></li>
                            <li><?php echo _('To expand your potential') ?></li>
                            <li><?php echo _('To solve the difficult problems') ?></li>
                            <li><?php echo _('To allow your challenge') ?></li>
                        </ul>
                        <br />
                        <p>
                            <?php echo _('Then it makes us more fascinated society') ?>
                        </p>
                    </div>
                </div>
            </section><!-- End Mission -->

            <!-- Get In Touch -->
            <section class="section" id="get-in-touch">
                <div class="container">
                    <div class="heading os-animation"
                         data-os-animation="pulse" data-os-animation-delay="0s">
                        <h2><?php echo _('Get In Touch') ?></h2>
                        <p class="sub-tit">
                            <?php echo _('You can find us literally anywhere, just push a button and we\'re there') ?>
                        </p>
                    </div>
                    <div class="row">
                        <div class="vietnam col-lg-4 col-md-4 col-sm-4 col-xs-12 os-animation"
                            data-os-animation="fadeInLeft" data-os-animation-delay="0.5s">
                            <h3 class="tit">
                                <?php echo _('Vietnam') ?>
                            </h3>
                            <p class="company-name">
                                <strong>ICONIC CO., LTD.</strong>
                            </p>
                            <a class="email" href="mailto:info@iconic-intl.com">info@iconic-intl.com</a>
                            <p>
                                <span class="black">
                                    <?php echo _('Ho Chi Minh office') ?>:
                                </span><br/>
                                4F,Avenis Building, 145 Dien Bien Phu,
                                Dist1, HCMC<br/>
                                <span class="black">
                                    <?php echo _('Hanoi office') ?>:
                                </span><br/>
                                R. 901 Ford Thang Long Building,
                                105 Lang Ha, Dong Da, Ha Noi<br/>
                                <span class="black"><?php echo _('Phone') ?>:</span> (84-8) 3821-5122
                            </p>
                        </div>
                        <div class="vietnam col-lg-4 col-md-4 col-sm-4 col-xs-12 os-animation"
                             data-os-animation="zoomIn" data-os-animation-delay="0.5s">
                            <h3 class="tit">
                                <?php echo _('Japan') ?>
                            </h3>
                            <p class="company-name">
                                <strong>ICONIC JAPAN CO., LTD.</strong>
                            </p>
                            <a class="email" href="mailto:info@iconic-jp.com">info@iconic-jp.com</a>
                            <p>
                                <span class="black">
                                    <?php echo _('Head office') ?>:
                                </span><br/>
                                Nagoya - shi, Moriyama - ku,
                                Midorigaoka 521<br/>
                                <span class="black">
                                    <?php echo _('Tokyo office') ?>:
                                </span><br/>
                                6 Floor, Hanwa Dai 2 Bekkan building,
                                Shintomi 1 - 7 - 3, Chuo - ku, Tokyo - to<br/>
                                <span class="black"><?php echo _('Phone') ?>:</span> (81) - 3 - 6222 5520
                            </p>
                        </div>
                        <div class="vietnam col-lg-4 col-md-4 col-sm-4 col-xs-12 os-animation"
                             data-os-animation="fadeInRight" data-os-animation-delay="0.5s">
                            <h3 class="tit">
                                <?php echo _('Indonesia') ?>
                            </h3>
                            <p class="company-name">
                                <strong>PT. ICONIC INDONESIA GW</strong>
                            </p>
                            <a class="email" href="mailto:info@iconic-id.com">info@iconic-id.com</a>
                            <p>
                                GRAND SLIPI TOWER Office Building,
                                16th Fl. JI. S.Parman Kav.22-24,
                                Slipi-Jakarta Barat<br/>
                                <span class="black"><?php echo _('Phone') ?>:</span> (62-21) 290-22273
                            </p>
                        </div>

                    </div>
                </div>
            </section><!-- End Get In Touch -->

            <!-- Footer -->
            <footer id="footer">
                <div class="container text-center os-anmation"
                     data-os-animation="zoomIn" data-os-animation-delay="0s">
                    <p class="copyright">
                        <?php echo _('Copyright © Iconic joint stock company') ?>
                    </p>
                    <div class="social">
                        <a class="linkedin" href="#linkedin" title="LinkedIn">
                            <i class="fa fa-linkedin"></i>
                        </a>
                        <a class="facebook" href="#facebook" title="Facebook">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a class="twitter" href="#twitter" title="Twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="google" href="#google" title="Google Plus">
                            <i class="fa fa-google-plus"></i>
                        </a>
                    </div>
                </div>
            </footer><!-- End Footer -->
        </div>

        <!-- Right Menu -->
        <nav id="right-menu" class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.5s">
            <ul class="nav-fixed-menu">
                <li>
                    <a data-menu="<?php echo _('Home') ?>" href="#header">
                        &nbsp;
                    </a>
                </li>
                <li>
                    <a data-menu="<?php echo _('Our Services') ?>" href="#our-services">
                        &nbsp;
                    </a>
                </li>
                <li>
                    <a data-menu="<?php echo _('Our History') ?>" href="#history">
                        &nbsp;
                    </a>
                </li>
                <li>
                    <a data-menu="<?php echo _('Message') ?>" href="#ceo-message">
                        &nbsp;
                    </a>
                </li>
                <li>
                    <a data-menu="<?php echo _('Mission') ?>" href="#mission">
                        &nbsp;
                    </a>
                </li>
                <li>
                    <a data-menu="<?php echo _('Get In Touch') ?>" href="#get-in-touch">
                        &nbsp;
                    </a>
                </li>
            </ul>
        </nav><!-- End Right Menu -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/js/jquery-1.11.1.min.js"><\/script>')</script>
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.4/waypoints.min.js"></script>
        <!--
        <script src="/js/vendor/bootstrap.min.js"></script>
        <script src="/js/vendor/jquery.easings.min.js"></script>
        <script src="/js/vendor/jquery.slimscroll.min.js"></script>
        <script src="/js/main.js"></script>
        -->

        <script src="/js/production.min.js"></script>
    </body>
</html>
