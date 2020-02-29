<?php
    include 'service-texts.php';
?>

<!DOCTYPE HTML>

<html>
    <head>
        <title>PatreX - Services</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="/assets/css/main.css"/>
        <link rel="stylesheet" href="/assets/css/services.css">
        <script defer src="/assets/js/jquery.min.js"></script>
        <script defer src="/assets/js/blink.js"></script>
        <noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
    </head>

    <body class="is-preload">
        <header id="header">
            <nav>
                <a href="../index.php">&#8592; Go to Main Page</a>
            </nav>
        </header>

        <!-- Wrapper -->
        <div id="wrapper">
            <section id="main" class="wrapper">
                <div class="inner">
                    <h1 class="major">Our Services</h1>
                </div>
                <!-- SERVICES LEFT CONTAINER -->
                <div id="left" class="services-column">
                    <!-- SERVICE 1 CONTAINER -->
                    <div class="service-container">
                        <!-- SERVICE TITLE CONTAINER -->
                        <div class="service-title-container">
                            <center><h1>Web Development</h1></center>
                            <hr>
                        </div>
                        <!-- SERVICE SUB TYPES CONTAINER -->
                        <div class="service-sub-types-container">
                            <!-- SUB TYPE 1 CONTAINER -->
                            <p id="wd">
                                <h3 id="wd">-&emsp;Website Development</h3>
                                <div>
                                    <span><?php echo T_WEB_DEV; ?></span>
                                </div>
                            </p>
                            <!-- SUB TYPE 2 CONTAINER -->
                            <p id="ec">
                                <h3 id="ec">-&emsp;E-Commerce Development</h3>
                                <span><?php echo T_ESHOP; ?></span>
                            </p>
                            <p id="supp">
                                <h3 id="supp">-&emsp;Support</h3>
                                <div>
                                    <span><?php echo T_SUPPORT; ?></span>
                                </div>
                            </p>
                            <p id="wr">
                                <h3 id="wr">-&emsp;Website Renovation</h3>
                                <div>
                                    <span><?php echo T_WEB_RENOVATION; ?></span>
                                </div>
                            </p>
                        </div>
                    </div>
                    <br />
                    <!-- SERVICE 2 CONTAINER -->
                    <div class="service-container">
                        <!-- SERVICE TITLE CONTAINER -->
                        <div class="service-title-container">
                            <center><h1>Digital Marketing</h1></center>
                            <hr>
                        </div>
                        <!-- SERVICE SUB TYPES CONTAINER -->
                        <div class="service-sub-types-container">
                            <!-- SUB TYPE 1 CONTAINER -->
                            <p id="sm">
                                <h3 id="sm">-&emsp;Social Media</h3>
                                <div>
                                    <span><?php echo T_SOCIAL_MEDIA; ?></span>
                                </div>
                            </p>
                            <!-- SUB TYPE 2 CONTAINER -->
                            <p id="seo">
                                <h3 id="seo">-&emsp;SEO</h3>
                                <div>
                                    <span><?php echo T_SEO; ?></span>
                                </div>
                            </p>
                        </div>
                    </div>
                    <br />
                    <!-- SERVICE 3 CONTAINER -->
                    <div class="service-container">
                        <!-- SERVICE TITLE CONTAINER -->
                        <div class="service-title-container">
                            <center><h1>Digital Consulting</h1></center>
                            <hr>
                        </div>
                        <!-- SERVICE SUB TYPES CONTAINER -->
                        <div class="service-sub-types-container">
                            <!-- SUB TYPE 1 CONTAINER -->
                            <p id="ds">
                                <h3 id="ds">-&emsp;Digital Strategy</h3>
                                <div>
                                    <span><?php echo T_DIGITAL_CONSULTING; ?></span>
                                </div>
                            </p>
                            <!-- SUB TYPE 2 CONTAINER -->
                            <p id="cc">
                                <h3 id="cc">-&emsp;Company Coaching</h3>
                                <div>
                                    <span><?php echo T_COMPANY_COACHING; ?></span>
                                </div>
                            </p>
                            <p id="is">
                                <h3 id="is">-&emsp;Innovative Solutions</h3>
                                <div>
                                    <span><?php echo T_INNOVATIVE_SOLUTIONS; ?></span>
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
                <div id="right" class="services-column">
                    <!-- SERVICE 4 CONTAINER -->
                    <div class="service-container">
                        <!-- SERVICE TITLE CONTAINER -->
                        <div class="service-title-container">
                            <center><h1>Branding</h1></center>
                            <hr>
                        </div>
                        <!-- SERVICE SUB TYPES CONTAINER -->
                        <div class="service-sub-types-container">
                            <!-- SUB TYPE 1 CONTAINER -->
                            <p id="lcid">
                                <h3 id="lcid">-&emsp;Logo and Corporate Identity Design</h3>
                                <div>
                                    <span><?php echo T_LOGO_DESIGN; ?></span>
                                </div>
                            </p>
                            <!-- SUB TYPE 2 CONTAINER -->
                            <p id="pcsm">
                                <h3 id="pcsm">-&emsp;Package Creation for Social Media</h3>
                                <div>
                                    <span><?php echo T_PACKAGE_CREATION; ?></span>
                                </div>
                            </p>
                            <p id="bddb">
                                <h3 id="bddb">-&emsp;Brochure Design and Display Banners</h3>
                                <div>
                                    <span><?php echo T_BROCHURE_DESIGN; ?></span>
                                </div>
                            </p>
                        </div>
                    </div>
                    <!-- SERVICE 5 CONTAINER -->
                    <div class="service-container">
                        <!-- SERVICE TITLE CONTAINER -->
                        <div class="service-title-container">
                            <center><h1>Tech Consulting</h1></center>
                            <hr>
                        </div>
                        <!-- SERVICE SUB TYPES CONTAINER -->
                        <div class="service-sub-types-container">
                            <!-- SUB TYPE 1 CONTAINER -->
                            <p id="wucc">
                                <h3 id="wucc">-&emsp;Web Usage Consulting Course</h3>
                                <div>
                                    <span><?php echo T_WEB_USAGE_COURSE; ?></span>
                                </div>
                            </p>
                            <!-- SUB TYPE 2 CONTAINER -->
                            <p id="tutc">
                                <h3 id="tutc">-&emsp;Computer Basics (DIY) Course</h3>
                                <div>
                                    <span><?php echo T_DIY_COURSE; ?></span>
                                </div>
                            </p>
                            <p id="sibc">
                                <h3 id="sibc">-&emsp;Safe Internet Browsing Course</h3>
                                <div>
                                    <span><?php echo T_SAFE_WEB_COURSE; ?></span>
                                </div>
                            </p>
                        </div>
                    </div>
                    <!-- SERVICE 6 CONTAINER -->
                    <div class="service-container">
                        <!-- SERVICE TITLE CONTAINER -->
                        <div class="service-title-container">
                            <center><h1>Strategic Analysis</h1></center>
                            <hr>
                        </div>
                        <!-- SERVICE SUB TYPES CONTAINER -->
                        <div class="service-sub-types-container">
                            <!-- SUB TYPE 1 CONTAINER -->
                            <p id="ga">
                                <h3 id="ga">-&emsp;Google Analytics</h3>
                                <div>
                                    <span><?php echo T_GOOGLE_ANALYTICS; ?></span>
                                </div>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>