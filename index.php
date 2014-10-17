<?php
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
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">
                You are using an <strong>outdated</strong> browser.
                Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Start Header -->
        <header>
            <div class="container">
                <div class="logo">
                    <img src="img/logo.png" alt="Iconic Logo" width="500" height="498"/>
                </div>
                <div class="slogan">
                    <?php echo _('We support those who work beyond border!') ?>
                </div>
            </div>
        </header><!-- End Header -->

        <!-- Our services -->
        <section id="our-services">
            <div class="container">
                <div class="heading">
                    <h2><?php echo _('Our services') ?></h2>
                    <p class="sub-tit">
                        <?php echo _('LET’S ENJOY YOUR WORK BEYOND BORDERS!') ?>
                    </p>
                </div>
                <div id="service-details" class="row">
                    <div class="col-lg-6 hr-recruitment">
                        <h3>
                            <?php echo _('HR RECRUITMENT') ?>
                        </h3>
                        <p>
                            <?php echo _('
                            We can assist you to recruit both Japanese and
                            Vietnamese in Vietnam. Our recruiting consulting
                            fee is charged upon contingent fee basis. We
                            maintain HR stock with various backgrounds lured
                            through various marketing mix. You can streamline
                            relevant administrative works upon recruitment
                            in your company by outsourcing them to ICONIC.
                            ') ?>
                        </p>
                    </div>
                    <div class="col-lg-6 hr-consulting">
                        <h3>
                            <?php echo _('HR CONSULTING') ?>
                        </h3>
                        <p>
                            <?php echo _('
                            We provide HR Management consulting which is
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
                <div class="heading">
                    <h2><?php echo _('ICONIC\'S HISTORY ') ?></h2>
                    <p class="sub-tit">
                        <?php echo _('LET\'S ENJOY YOUR WORK BEYOND BORDERS!') ?>
                    </p>
                </div>
                <div class="timeline">
                    <div class="event2004 right">
                        <h3><?php echo _('Join in Venture-Link Co.,Ltd.') ?></h3>
                        <p>
                            <?php echo _('Conduct management consulting in new product development
                                especially for small and mideum sized retail companies in Japan to boost their
                                sales revenues.') ?>
                        </p>
                    </div>
                    <div class="event2007 left">
                        <h3><?php echo _('He entered Brainworks Asia Co.,Ltd.') ?></h3>
                        <p>
                            <?php echo _('Then,he had visited about 500companies in vietnam for a year') ?>
                        </p>
                    </div>
                    <div class="event2008 right">
                        <h3><?php echo _('ICONIC Co., Ltd. established') ?></h3>
                        <p>
                            <?php echo _('Launched HR Recruitment Service mainly for Japanese & Vietnamese in
                            Hochiminh City. Implemented this service mostly in areas in the south of Vietnam') ?>
                        </p>
                    </div>
                    <div class="event2010 left">
                        <h3><?php echo _('ICONIC Co., Ltd Hanoi office established') ?></h3>
                        <p>
                            <?php echo _('Expand business in Northern') ?>
                        </p>
                    </div>
                    <div class="event2012 right">
                        <h3><?php echo _('ICONIC Japan Co., Ltd. established') ?></h3>
                        <p>
                            <?php echo _('Officially legalized global recruitment service in Japanese.') ?>
                        </p>
                    </div>
                    <div class="event2013 left">
                        <h3><?php echo _('PT. ICONIC INDONESIA GW established') ?></h3>
                        <p>
                            <?php echo _('Launched HR recruitment service for Japanese & Indonesian in Indonesia') ?>
                        </p>
                    </div>
                    <div class="event2014 right">
                        <h3><?php echo _('ICONIC Japan Co., Ltd. Tokyo office established') ?></h3>
                        <p>
                            <?php echo _('We offer global human resource recruitment services focusing in Kanto area.
                            ') ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>
    </body>
</html>
