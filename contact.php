<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 1. Form collection
    $fields = ['user_name', 'user_mail', 'user_phone', 'user_subject', 'user_message'];


    $data = [];

    foreach ($fields as $field) {
        if ($_POST[$field]) {
            $data[$field] = $_POST[$field];
        }
    }

    // 2. Form validation

    // Need to do validation here

    // 3. Email sending
    $to = 'info@diagnostix.ai';
    $subject = 'Заявка с сайта';
    $message = sprintf(
        'Full name: %s<br>E-mail: %s<br>Phone: %s<br>Subject: %s<br>Message: %s',
                    $data['user_name'],
                    $data['user_mail'],
                    $data['user_phone'],
                    $data['user_subject'],
                    $data['user_message']
                    );

                    $mailSent = mail($to, $subject, $message);

                    if ($mailSent) {
                    $statusMessage = 'Message sent';
                    } else {
                    $statusMessage = 'Something went wrong. Please, try again';
                    }
                    }

                    ?>

                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <title>DiagnostiX.ai | Artificial Intelligence for Radiology</title>

                        <!-- Meta -->
                        <meta charset="utf-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">

                        <!-- Title -->

                        <meta name="twitter:title" content="DiagnostiX.ai | A.I. Powered X-Ray Analysis">
                        <meta name="og:title" content="DiagnostiX.ai | A.I. Powered X-Ray Analysis">


                        <!-- Description -->

                        <meta name="description"
                              content="DiagnostiX.ai develops deep learning algorithms that interpret radiology images. Our mission is to make healthcare accessible and affordable using the power of deep learning.">
                        <meta name="twitter:description"
                              content="DiagnostiX.ai develops deep learning algorithms that interpret radiology images. Our mission is to make healthcare accessible and affordable using the power of deep learning.">
                        <meta property="og:description"
                              content="DiagnostiX.ai develops deep learning algorithms that interpret radiology images. Our mission is to make healthcare accessible and affordable using the power of deep learning.">


                        <!-- Image -->

                        <meta property="og:image" content="images/DiagnostiX_ai_AI_for_radiology.png">
                        <meta name="twitter:image" content="http://DiagnostiX.ai/assets/images/DiagnostiX_ai_AI_for_radiology.png">


                        <meta name="twitter:site" content="@DiagnostiX_ai">
                        <meta name="twitter:card" content="summary">
                        <meta name="og:url" content="/">
                        <meta name="keywords"
                              content="deep learning, radiology, healthcare, patient, innovation, research, artificial intelligence, AI for Radiology, CT scan AI, X-ray, Artificial Intelligence, A.I. Powered X-Ray Analysis">


                        <link rel="shortcut icon" href="favicon.ico">
                        <link href="css/css.css" rel="stylesheet" type="text/css">
                        <link href="css/css_1.css" rel="stylesheet" type="text/css">
                        <!-- Global CSS -->
                        <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
                        <!-- Plugins CSS -->
                        <link rel="stylesheet" href="css/font-awesome.min.css">
                        <link rel="stylesheet" href="css/flexslider.css">
                        <!-- Theme CSS -->
                        <link id="theme-style" rel="stylesheet" href="css/styles.css">
                        <link id="theme-style" rel="stylesheet" href="css/oldwebsite.css">
                        <!-- jquery -->
                        <script src="js/jquery-3.3.1.min.js" crossorigin="anonymous"></script>

                        <link rel="stylesheet" type="text/css" href="css/cookieconsent.min.css">
                        <script src="js/cookieconsent.min.js"></script>

                        <link rel="stylesheet" type="text/css" href="css/cookieconsent.min.css">
                        <script src="js/cookieconsent.min.js"></script>
                        <!-- Google adsense  -->
                        <script data-ad-client="ca-pub-1877538024709309" async src="js/adsbygoogle.js"></script>
                        <script>
                            window.addEventListener("load", function () {
                                window.cookieconsent.initialise({
                                    "palette": {
                                        "popup": {
                                            "background": "#001242"
                                        },
                                        "button": {
                                            "background": "#0094c6"
                                        }
                                    },
                                    "content": {
                                        "href": "/privacy-policy.html"
                                    }
                                })
                            });
                        </script>

                    </head>

                    <body class="qxr-page">

                    <?php

if (isset($statusMessage)) {
    var_dump($statusMessage);
}

?>


                    <div class="wrapper">
                        <header id="header" class="header navbar-fixed-top">
                            <div class="container">

                                <!-- Logo -->
                                <h1 class="logo">
                                    <a href="/"><img src="images/header_logo_03.png" alt="logo" class="logo navlogo">
                                    </a>
                                </h1>
                                <!--//logo-->

                                <!-- Nav Bar -->
                                <nav class="main-nav navbar navbar-right navbar-inverse navbar-expand-md" role="navigation">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse"
                                            aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div id="navbar-collapse" class="navbar-collapse collapse">
                                        <ul class="nav navbar-nav">
                                            <li class=" active  nav-item"><a class="nav-link" href="/">Home</a></li>
                                            <li class=" nav-item dropdown">
                                                <a class="nav-link" data-toggle="dropdown" aria-haspopup="true"
                                                   aria-expanded="false" href="#">Products</a>
                                                <!--                            <div class="dropdown-menu dropdown-menu-right">-->
                                                <!--                                <h6 class="dropdown-header">In the Clinic</h6>-->
                                                <!--                                <a class="dropdown-item" href="/qxr.html">Chest X-rays</a>-->
                                                <!--                                <a class="dropdown-item" href="/headct.html">Head CT Scans</a>-->
                                                <!--                                <a class="dropdown-item" href="/poqus.html">POqUS</a>-->
                                                <!--                                <a class="dropdown-item" href="/qct-lung.html">CHEST CT SCANS</a>-->
                                                <!--                                <h2 class="dropdown-header ">In the Community </h2>-->
                                                <!--                                <a class="dropdown-item" href="/publichealth.html">Public health solutions</a>-->
                                                <!--                                <a class="dropdown-item" href="/qxr-tuberculosis.html">Tuberculosis </a>-->
                                                <!--                                <a class="dropdown-item" href="/covid.html">COVID-19 </a>-->
                                                <!--                            </div>-->
                                            </li>
                                            <!--//dropdown-->
                                            <li class=" nav-item"><a class="nav-link" href="/about.html">About Us</a></li>
                                            <li class=" nav-item dropdown">
                                                <a class="nav-link" data-toggle="dropdown" aria-haspopup="true"
                                                   aria-expanded="false" href="#">News</a>
                                                <!--                            <div class="dropdown-menu dropdown-menu-right">-->
                                                <!--                                <a class="dropdown-item" href="/news.html">Highlights</a>-->
                                                <!--                                <a class="dropdown-item" href="/press_coverage.html">Press coverage</a>-->
                                                <!--                            </div>-->
                                            </li>
                                            <li class="nav-item"><a class="nav-link" target="_blank" href="#">Blog</a>
                                            </li>
                                            <li class="nav-item nav-item-cta last"><a class="btn btn-cta btn-cta-secondary" target="_blank"
                                                                                      href="#">Try Now<sup>* </sup></a></li>
                                        </ul><!--//nav-->
                                    </div><!--//navabr-collapse-->
                                </nav><!--//main-nav-->
                            </div><!--//container-->
                        </header><!--//header-->

                        <div class="headline-bg qxr-headline-bg">
                            <div class="container col-md-6 headertext">
                                <h2 class="title">Contact Us</h2>
                            </div><!--//container-->
                        </div>

                        <div class="team-img">
                            <div class="container">
                                <h3 class="contact-main-wrapper-title">Contact Us</h3>
                                <img src="./images/team-main.jpg" alt="">
                            </div>
                        </div>

                        <section class="contact-main">
                            <div class="container">
                                <div class="contact-main-wrapper">
                                    <div class="contact-main-wrapper-grid">
                                        <ul class="contact-main-list">
                                            <li class="contact-main-list-title">
                                                Feel free to contact us at any time
                                            </li>
                                            <li class="list-inline-item"><i class="fa fa-map-marker"></i>Gustav Mahlerplein
                                                2,
                                                Amsterdam, Netherlands
                                            </li>
                                            <li class="list-inline-item"><a href="tel:+31207997300"><i class="fa fa-phone"
                                                                                                       aria-hidden="true"></i>+31
                                                20 799 7300</a></li>
                                            <li class="list-inline-item"><a href="mailto:support@diagnostix.ai"><i
                                                    class="fa fa-envelope-o"></i>
                                                support@diagnostix.ai</a></li>
                                        </ul>
                    <form class="contact-main-form" action="" method="post">
                        <ul>
                            <li>
                                <input type="text" id="name" name="user_name" placeholder="Full your name" required>
                            </li>

                            <li>
                                <input type="email" id="mail" name="user_mail" placeholder="E-mail" required>
                            </li>

                            <li>
                                <input type="tel" id="tel" name="user_phone" placeholder="Phone">
                            </li>

                            <li>
                                <input type="text" id="sub" name="user_subject" placeholder="Subject" required>
                            </li>

                            <li>
                                <textarea id="msg" name="user_message" placeholder="Message"></textarea>
                            </li>

                            <li>
                                <button type="submit" class="contact-main-form-btn">send message</button>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>
        //Some page specific code to apply page specific changes.
        $(document).ready(function () {
            var $header = $('#header');
            $header.css({background: "#1d4354"});

            //Product capabilities related code
            $('.abnormal_thumbs > figure').click(function (e) {
                var id = $(this).attr('id');
                var $abnormalDetail = $('figure[data-id="' + id + '"]');
                var $abnormalThumb = $(this);

                if (!$abnormalThumb.hasClass('active')) {
                    $('.abnormal_thumbs > figure.active').removeClass('active');
                    $abnormalThumb.addClass('active');
                }

                if (!$abnormalDetail.hasClass('active')) {
                    $('.abnormal_description > figure.active').removeClass('active');
                    $abnormalDetail.addClass('active');
                }
            })

            //Press coverage carousal
            $('#press-carousel').carousel({
                interval: 800000
            });

        })
    </script>
    <style type="text/css">
        /* Styles that are page specific  */
        body {
            font-size: 17px;
        }

        .qxr-headline-bg {
            position: relative;
            height: 600px;
            background-size: 75%;
            background-color: #000;
        }

        .headertext {
            background: rgba(32, 45, 59, 0.75);
            padding: 1em;
            max-width: 580px;
            position: absolute;
            bottom: 3em;
        }

        .headertext .title {
            font-size: 42px;
            font-weight: 900;
            color: rgba(255, 255, 255, 0.95);
        }

        .top-intro {
            padding: 12em 0 8em 0;
            background: #fafafa;
            color: #202d3b;
        }

        .intro-image {
            display: inline-block;
            border-radius: 4px;
            max-width: 700px;
            width: 100%;
            box-shadow: 0 15px 30px 0 rgba(0, 0, 0, 0.11), 0 5px 15px 0 rgba(0, 0, 0, 0.08);
        }

        .intro-headings > .title {
            font-size: 46px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .intro-headings > .subtitle {
            font-size: 2rem;
            margin-bottom: 2rem;
        }

        .nav-tabs .nav-item .nav-link.active {
            color: #001242;
            -webkit-box-shadow: inset 0 3px 0 #001242;
            -moz-box-shadow: inset 0 3px 0 #001242;
            box-shadow: inset 0 3px 0 #001242;
        }

        .nav-tabs .nav-item .nav-link.active:hover {
            color: #001242;
        }

        .nav-tabs .nav-item .nav-link {
            color: #202d3b;
        }

        .tab-pane img {
            max-height: 400px;
        }

        .tab-content {
            margin-top: 3em;
        }

        img#lung_icon {
            width: 24px;
        }

        .tab-content .title {
            font-size: 26px;
            color: #001242;
            margin-top: 15px;
            margin-bottom: 15px;
        }

        .abnormal_thumbs {
            display: flex;
            flex-wrap: wrap;
            height: 500px;
        }

        .abnormal_thumbs img {
            width: 120px;
            height: 120px;
            border-radius: 1px;
            object-fit: cover;
        }

        .abnormal_thumbs figure.active {
            opacity: 1;
        }

        .abnormal_thumbs figure {
            opacity: 0.4;
            margin-right: 1rem;
        }

        .abnormal_thumbs figure:hover {
            opacity: 1;
            cursor: pointer;
        }

        .abnormal_thumbs figure:hover > figcaption {
            background: #6f0600;
            color: white;
        }

        .abnormal_thumbs figcaption {
            text-align: center;
            font-size: 0.75em;
            padding: 0.5em 0;
            width: 100%;
            max-width: 120px;
            word-break: break-word;
        }

        .abnormal_description figure {
            text-align: center;
            background: black;
            display: none;
        }

        .abnormal_description figure.active {
            display: block;
        }

        .abnormal_description figure img {
            width: 100%;
        }

        .abnormal_description figure span {

        }

        .abnormal_description figure figcaption {
            color: white;
        }

        .abnormal_description figcaption > p {
            background: #6f0600;
            padding: 0.75em;
            margin-bottom: 0;
        }

        .abnormal_description figcaption > span {
            padding: 1em;
            font-size: 0.85em;
            text-align: justify;
            display: inline-block;
        }

        /*Quantification*/
        .quantification img {
            max-width: 100%;
        }

        .quote-profile > .img-circle {
            width: 70px;
            height: 70px;
            border-radius: 50%;
        }

        /* lancet */
        #lancet-image {
            width: 90%;
        }

        .validation-buttons {
            margin-bottom: 15px;
        }

        .carousel-item > .content {
            display: flex;
            justify-content: space-between;
        }

        blockquote {
            font-style: italic;
            font-size: 1.2em;
        }

        .content .fa-quote-left {
            width: 20px;
            color: #0094c6;
            display: none;
        }

        .press-logo > img {
            max-width: 100%;
            border-radius: 4px;
            box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.11), 0 3px 9px 0 rgba(0, 0, 0, 0.05);
        }

        .carousel-indicators {
            bottom: -60px;
        }

        .carousel-indicators li {
            background: rgba(0, 0, 0, 0.1);
        }

        .carousel-indicators .active {
            background: #202d3b;
        }

        .cta-section {
            background: rgb(42, 59, 76);
            min-height: 80px;
            padding: 20px 0;
            color: white;
        }

        .cta-section > .container {
            margin-top: 1em;
        }

        /* Mobile specific styles */
        @media (max-width: 575.98px) {
            .intro {
                padding: 2em 0;
            }

            .abnormal_thumbs {
                display: flex;
                flex-wrap: wrap;
                height: initial;
                overflow: auto;
            }

            .abnormal_thumbs figure {
                margin-left: 0.25em;
            }

            .abnormal_thumbs img {
                width: 104px;
                height: 104px;
                border-radius: 2px;
            }

            .abnormal_thumbs figcaption {
                display: none;
            }

            .abnormal_description figure img {
                width: 300px;
            }

            .explore-data-btn {
                margin-top: 1em;
            }
        }

    </style>

    <!-- ******FOOTER****** -->
    <footer class="footer">
        <div class="footer-content">
            <div class="container">
                <div class="row">
                    <div class="footer-col links col-sm-2 col-4">
                        <div class="footer-col-inner">
                            <h3 class="title">Quick Links</h3>
                            <ul class="list-unstyled">
                                <li><a href="/#why">Our services</a></li>
                                <li><a href="/#qER">Case Studies</a></li>
                                <li><a href="/#qQuant">Team member</a></li>
                                <li><a href="#">Latest news</a></li>
                                <li><a href="#">Careers</a></li>
                            </ul>
                        </div><!--//footer-col-inner-->
                    </div><!--//foooter-col-->

                    <div class="footer-col links col-sm-2  col-4">
                        <div class="footer-col-inner">
                            <h3 class="title">Newsletters</h3>
                            <ul class="list-unstyled">
                                <li>Stay up to date with our latest developments!</li>
                            </ul>
                        </div><!--//footer-col-inner-->
                    </div><!--//foooter-col-->

                    <div class="footer-col connect col-sm-6 col-12">
                        <div class="footer-col-inner">
                            <ul class="social list-inline">
                                <li class="list-inline-item"><a href="contact.php" target="_blank"><i
                                        class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="contact.php"><i class="fa fa-linkedin"></i></a>
                                </li>
                                <li class="list-inline-item"><a href="contact.php"><i class="fa fa-youtube"></i></a>
                                </li>
                            </ul>
                            <div class="form-container">
                                <div id="mc_embed_signup">
                                    <form
                                            method="post" id="mc-embedded-subscribe-form"
                                            name="mc-embedded-subscribe-form" class="validate signup-form navbar-form"
                                            target="_blank" novalidate>
                                        <div id="mc_embed_signup_scroll">
                                            <div class="form-group">
                                                <input type="email" value class="form-control" name="EMAIL"
                                                       id="mce-EMAIL" placeholder="Enter your email" required>
                                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                                <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                                    <input type="text" name="b_f479ab0e89e5c5edf68c1bc07_1a00296d4c"
                                                           tabindex="-1" value></div>
                                                <div class="clear"><input type="submit" value="Subscribe"
                                                                          name="subscribe" id="mc-embedded-subscribe"
                                                                          class="btn btn-cta btn-cta-primary"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!--End mc_embed_signup-->
                        </div><!--//footer-col-inner-->
                    </div><!--//foooter-col-->
                </div>
                <div class="row">
                    <div class="footer-col col-12">
                        <div class="footer-col-inner">
                            <p>Using Artificial Intelligence with machine learning in order to create a subset of
                                systems to assist doctors with diagnosing patients. Creating one unified system through
                                which global diagnostics can be conducted; irregardless of economic background.</p>
                        </div><!--//footer-col-inner-->
                        <div class="row">
                            <div class="footer-col contact col-12">
                                <div class="footer-col-inner">
                                    <h3 class="title">Contact Us</h3>
                                    <ul class="list-unstyled list-inline">
                                        <li class="list-inline-item"><i class="fa fa-map-marker"></i>Gustav Mahlerplein
                                            2,
                                            Amsterdam, Netherlands
                                        </li>
                                        <li class="list-inline-item"><a href="tel:+31207997300"><i class="fa fa-phone"
                                                                                                   aria-hidden="true"></i>+31
                                            20 799 7300</a></li>
                                        <li class="list-inline-item"><a href="mailto:support@diagnostix.ai"><i
                                                class="fa fa-envelope-o"></i>
                                            support@diagnostix.ai</a></li>
                                    </ul>
                                </div><!--//footer-col-inner-->
                            </div><!--//contact-->
                        </div><!--//row-->
                    </div>
                </div><!--//container-->
            </div><!--//footer-content-->
        </div>
    </footer><!--//footer-->

    <!-- Javascript -->
    <script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/back-to-top.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

    <!-- Modal video -->
    <script type="text/javascript" src="js/modal-video.js"></script>

</div>
</body>

</html>