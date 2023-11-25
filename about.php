<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Verna Engineers & Contractors</title>
    <link rel="stylesheet preload" as="style" href="css/preload.min.css" />
    <link rel="stylesheet preload" as="style" href="css/icomoon.css" />
    <link rel="stylesheet preload" as="style" href="css/libs.min.css" />
    <link rel="stylesheet" href="css/about.min.css" />
    <link rel="stylesheet" href="css/floatbutton.min.css" />
    <link rel="icon" type="image/x-icon" href="img/logo/fav-icon.png">
</head>

<body>
    <header class="header" data-page="home" data-page-parent="home">
        <div class="container d-flex">
            <a class="brand" href="#">
                <img class="brand_logo" src="img/logo/logo.png" alt="Verna Engineers & Contractors" />
            </a>
            <nav class="header_nav collapse" id="headerMenu">
                <ul class="header_nav-list">
                    <li class="header_nav-list_item">
                        <a class="nav-link nav-item" href="index.php" data-page="home" id="links"><span
                                class="nav-item_text">Home
                            </span></a>
                    </li>
                    <li class="header_nav-list_item">
                        <a class="nav-item nav-link" href="about.php" data-page="about" data-single="true"
                            id="links"><span class="nav-item_text" style="color: #9fc544;">About</span></a>
                    </li>
                    <li class="header_nav-list_item">
                        <a class="nav-link nav-item" data-page="services" data-page-parent="services" href="service.php"
                            data-main="true" id="links">Services</a>
                    </li>
                    <li class="header_nav-list_item">
                        <a class="nav-link nav-item" data-page="projects2" data-page-parent="projects"
                            href="projects.php" id="links">Projects</a>
                    </li>
                    <li class="header_nav-list_item">
                        <a class="nav-link nav-item" data-page="gallery-grid" data-page-parent="pages"
                            href="gallery.php" id="links">Gallery</a>
                    </li>
                    <li class="header_nav-list_item">
                        <a class="dropdown-item nav-item" data-page="contacts2" data-page-parent="contacts"
                            href="contacts.php" id="links">Contact us</a>
                    </li>
                </ul>
            </nav>
            <button class="header_trigger" data-bs-toggle="collapse" data-bs-target="#headerMenu"
                aria-controls="headerMenu" aria-expanded="false">
                <span class="line line--short"></span> <span class="line"></span>
                <span class="line line--short"></span> <span class="line"></span>
            </button>
        </div>
    </header>
    <header class="page primary-bg">
        <div class="container">
            <div class="section_header">
                <span class="subtitle subtitle--extended"><a href="index.php">Home</a></span>
                <h1 class="title">About Us</h1>
                <!-- <ul class="breadcrumbs">
                    <li class="breadcrumbs_item"><a href="index.php">Home</a></li>
                    <li class="breadcrumbs_item breadcrumbs_item--current">
                        <span>About</span>
                    </li>
                </ul> -->
            </div>
        </div>
        <div class="media">
            <picture>
                <source data-srcset="img/plan.webp" srcset="img/plan.webp" type="image/webp" />
                <img class="lazy" data-src="img/plan.png" src="img/plan.png" alt="media" />
            </picture>
        </div>
    </header>
    <main>
        <section class="about section" style="padding-bottom: 0px; !important">
            <div class="container">
                <div class="main">
                    <div class="section_header">
                        <span class="subtitle" data-aos="fade-down">Who we are</span>
                        <h2 class="title" data-aos="fade-right">
                            Bringing <span class="highlight">Your Ideas</span> and
                            Innovations to Life
                        </h2>
                        <p class="text" data-aos="fade-up" data-aos-delay="50">
                            Our civil and structural team is committed to providing
                            sustainable, creative & efficient engineering solutions for our
                            communities
                        </p>
                    </div>
                    <ul class="checklist">
                        <li class="checklist_item" data-aos="fade-up">
                            <i class="icon-arrow_right icon"></i> Making lives easier
                        </li>
                        <li class="checklist_item" data-aos="fade-up" data-aos-delay="50">
                            <i class="icon-arrow_right icon"></i> Get every solution right
                            here
                        </li>
                        <li class="checklist_item" data-aos="fade-up" data-aos-delay="100">
                            <i class="icon-arrow_right icon"></i> Innovation and creativity
                        </li>
                        <li class="checklist_item" data-aos="fade-up" data-aos-delay="100">
                            <i class="icon-arrow_right icon"></i> Fine engineering only with
                            us
                        </li>
                    </ul>
                    <div class="wrapper" data-aos="fade-up">
                        <a class="btn" href="contacts.php">Consult now</a>
                    </div>
                </div>
                <div class="media" data-aos="zoom-in" data-aos-duration="700">
                    <picture>
                        <img class="lazy" data-src="img/pic/about.webp" src="img/pic/about.web" alt="house renovation" title="house renovation" />
                    </picture>
                </div>
            </div>
        </section>
        <section class="reviews section" style="padding-top: 40px; !important">
            <div class="container">
                <div class="reviews_header-wrapper">
                    <div class="reviews_header section_header">
                        <span class="subtitle">Our reviews</span>
                        <h2 class="title">
                            What <span class="highlight">Our Clients</span> Say
                        </h2>
                    </div>
                    <div class="swiper-controls reviews_slider-controls">
                        <a class="swiper-button swiper-button-next" href="#"><i class="icon-arrow_left icon"></i> </a><a
                            class="swiper-button swiper-button-prev" href="#"><i class="icon-arrow_right icon"></i></a>
                    </div>
                </div>
                <div class="reviews_slider swiper">
                    <div class="swiper-wrapper">
                        <div class="reviews_slider-slide swiper-slide">
                            <div class="rating">
                                <i class="icon-star icon"></i> <i class="icon-star icon"></i>
                                <i class="icon-star icon"></i> <i class="icon-star icon"></i>
                                <i class="icon-star icon"></i>
                            </div>
                            <p class="main">
                                Working with Verna Engineers & Contactors was a wonderful experience. They provided
                                us with the best contract works & renovation services for our home. Their team was
                                professional, efficient, and always willing to go the extra mile to meet our needs. I
                                would highly recommend them to anyone looking for quality services with unbeatable
                                prices!
                            </p>
                        </div>
                        <div class="reviews_slider-slide swiper-slide">
                            <div class="rating">
                                <i class="icon-star icon"></i> <i class="icon-star icon"></i>
                                <i class="icon-star icon"></i>
                                <i class="icon-star icon"></i>
                            </div>
                            <p class="main">
                                I hired Verna Engineers & Contactors for a full home renovation and the results
                                were amazing! From start to finish, they provided excellent customer service, attention
                                to detail, and quality work. I am so pleased with the end product and would highly
                                recommend them for anyone looking for contract works & renovation services.
                            </p>
                        </div>
                        <div class="reviews_slider-slide swiper-slide">
                            <div class="rating">
                                <i class="icon-star icon"></i> <i class="icon-star icon"></i>
                                <i class="icon-star icon"></i> <i class="icon-star icon"></i>
                                <i class="icon-star icon"></i>
                            </div>
                            <p class="main">
                                I recently hired Verna Engineers & Contactors to do some contract works and
                                renovation on my home, and they did an amazing job! The contractors were very
                                professional and knowledgeable, and their attention to detail was outstanding. They
                                completed the work ahead of schedule, and the result was better than I ever expected.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer primary-bg">
        <div class="container">
            <div class="footer_main">
                <div class="footer_main-block">
                    <a class="brand" href="index.php"><img class="brand_logo" src="img/logo/logo.png"
                            alt="Axial Construct" /></a>
                    <p class="footer_main-block_subtitle
                        footer_main-block_subtitle--brand">Verna Engineering
                        is the one-stop-solution for all of your land
                        development needs. If you are struggling to bring
                        your dreams to life, look no further! Proud member of Builder association of india (BAI)</p>
                </div>
                <div class="footer_main-block">
                    <h4 class="footer_main-block_title">Quick Link</h4>
                    <ul class="footer_main-block_nav">
                        <li class="list-item">
                            <a class="nav-link link" href="about.php" data-page="about"><i
                                    class="icon-chevron_right icon"></i>
                                About</a>
                        </li>
                        <li class="list-item">
                            <a class="nav-link link" href="service.php" data-page="services"><i
                                    class="icon-chevron_right icon"></i>
                                Services</a>
                        </li>
                        <li class="list-item">
                            <a class="nav-link link" href="projects.php" data-page="projects"><i
                                    class="icon-chevron_right icon"></i>
                                Projects</a>
                        </li>
                        <li class="list-item">
                            <a class="nav-link link" href="gallery.php" data-page="blog"><i
                                    class="icon-chevron_right icon"></i>
                                Gallery</a>
                        </li>
                        <li class="list-item">
                            <a class="nav-link link" href="contacts.php" data-page="blog"><i
                                    class="icon-chevron_right icon"></i>
                                Contact Us</a>
                        </li>
                        <li class="list-item">
                            <a class="nav-link link" href="privacy_policy.php" data-page="blog"><i
                                    class="icon-chevron_right icon"></i>
                                Privacy Policy</a>
                        </li>
                    </ul>
                </div>
                <div class="footer_main-block">
                        <h4 class="footer_main-block_title">Services</h4>
                        <ul class="footer_main-block_nav">
                            <li class="list-item">
                                <a class="nav-link link" href="service.php"
                                    data-page="about"><i
                                        class="icon-chevron_right icon"></i>
                                    Licensed Surveyor</a>
                            </li>
                            <li class="list-item">
                                <a class="nav-link link" href="service.php"
                                    data-page="services"><i
                                        class="icon-chevron_right icon"></i>
                                        Renovation Contractor</a>
                            </li>
                            <li class="list-item">
                                <a class="nav-link link"
                                    href="service.php" data-page="blog"><i
                                        class="icon-chevron_right icon"></i>
                                        Interior Designer</a>
                            </li>
                            <li class="list-item">
                                <a class="nav-link link" href="service.php"
                                    data-page="services"><i
                                        class="icon-chevron_right icon"></i>
                                    Real Estate</a>
                            </li>
                            <li class="list-item">
                                <a class="nav-link link" href="service.php"
                                    data-page="projects"><i
                                        class="icon-chevron_right icon"></i>
                                    Building Contractor</a>
                            </li>
                            <li class="list-item">
                                <a class="nav-link link"
                                    href="service.php" data-page="blog"><i
                                        class="icon-chevron_right icon"></i>
                                    Promoter</a>
                            </li>
                        </ul>
                    </div>
                <div class="footer_main-block">
                    <h4 class="footer_main-block_title">Contact</h4>
                    <div class="group-wrapper">
                        <i class="icon-location icon"></i>
                        <div class="group text-justify">
                            <span>No. 3, B. P Complex, Opp. Velammal bodhi campus, Chinthamani nagar, Olaiyur main road,
                                Udayanpatti, Trichy - 21</span>
                        </div>
                    </div>
                    <div class="group-wrapper" style="margin-bottom: 20px;">
                        <i class="icon-call icon"></i>
                        <div class="group">
                            <a href="tel:+919043010199" style="margin-bottom: 5px;">+91 90430 10199</a>
                            <a href="tel:+917904678950">+91 79046 78950</a>
                        </div>
                    </div>
                    <div class="group-wrapper">
                        <i class="icon-call icon"></i>
                        <div class="group">
                            <a href="mailto:info@vernaconstruction.com"
                                style="margin-bottom: 5px;">info@vernaconstruction.com</a>
                            <a href="mailto:vernaconstruction@gmail.com">vernaconstruction@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_secondary">
                <p class="footer_secondary-copyright">
                    <span>&copy; <span id="currentYear"></span> <a href="https://www.zworktechnology.com/">Zwork Technologies</a></span>
                </p>
                <ul class="socials">
                    <li class="socials_item">
                        <a class="socials_item-link"
                            href="https://www.facebook.com/verna.engineers.contractors"
                            target="_blank" rel="noopener noreferrer" aria-label="Facebook"><i
                                class="icon-facebook"></i></a>
                    </li>
                    <li class="socials_item">
                        <a class="socials_item-link" href="https://www.instagram.com/verna_engineers_contractors/"
                            target="_blank" rel="noopener noreferrer" aria-label="Instagram"><i
                                class="icon-instagram"></i></a>
                    </li>
                    <li class="socials_item">
                        <a class="socials_item-link" href="https://api.whatsapp.com/send/?phone=%2B919043010199"
                            target="_blank" rel="noopener noreferrer" aria-label="WhatsApp"><i
                                class="icon-whatsapp"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <button id="scrollTrigger" type="button">
        <i class="icon icon-arrow_right"></i>
    </button>
    <script id="www-widgetapi-script" src="../yts/jsbin/www-widgetapi-vflS50iB-/www-widgetapi.js" async=""></script>
    <script src="../player_api"></script>
    <script src="js/common.min.js"></script>
    <script src="js/about.min.js"></script>
    <script src="js/demo.min.js"></script>
    <script async="" src="../gtag/js?id=undefined"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());
        gtag("config", "undefined");
    </script>
</body>

</html>