<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verna Engineers & Contractors</title>
    <link rel="stylesheet preload" as="style" href="css/preload.min.css">
    <link rel="stylesheet preload" as="style" href="css/icomoon.css">
    <link rel="stylesheet preload" as="style" href="css/libs.min.css">
    <link rel="stylesheet" href="css/gallery-grid.min.css">
    <link rel="stylesheet" href="css/floatbutton.min.css">
    <link rel=stylesheet href=css/gallery-masonry.min.css>
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
                            id="links"><span class="nav-item_text">About</span></a>
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
                            href="gallery.php" id="links" style="color: #9fc544;">Gallery</a>
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
            <div class="section_header"><span class="subtitle
                        subtitle--extended"><a href="index.php">Home</a></span>
                <h1 class="title">Our Gallery</h1>
                <!-- <ul class="breadcrumbs">
                        <li class="breadcrumbs_item"><a href="index.php">Home</a></li>
                        <li class="breadcrumbs_item breadcrumbs_item--current"><span>Gallery</span></li>
                    </ul> -->
            </div>
        </div>
        <div class="media">
            <picture>
                <source data-srcset="img/plan.webp" srcset="img/plan.webp" type="image/webp"><img class="lazy"
                    data-src="img/plan.png" src="img/plan.png" alt="media">
            </picture>
        </div>
    </header>

    <main class="gallery section">
        <div class=container>
            <ul class=gallery_filters>
                <li class=list-item><a data-target=all class="gallery_filters-filter current" href=#>All</a></li>
                </li>
                <li class=list-item><a data-target=Ongoing class=gallery_filters-filter href=#>Ongoing</a></li>
                <li class=list-item><a data-target=Completed class=gallery_filters-filter href=#>Completed</a></li>
                <li class=list-item><a data-target=Upcoming class=gallery_filters-filter href=#>Upcoming</a></li>
            </ul>
            <div class=container>
                <div class=gallery_masonry data-role=gallery>
                    <figure class=gallery_masonry-item data-groups='["Completed"]'><a
                        class="aspect aspect--13x9" href="img/gallery/06full.jpg" data-caption="Image caption"
                        data-role=gallery-link>
                        <div class=aspect__inner>
                            <picture>
                                <image class="lazy" src="img/gallery/Asset 15-50.jpg" alt="Image caption">
                            </picture>
                        </div>
                        <div class=overlay>
                            <h4 class=overlay_caption>Fresh Concept Construction Renovation</h4><span
                                class=overlay_label>Special Projects</span>
                        </div>
                    </a></figure>
                    
                    <figure class=gallery_masonry-item data-groups='["Completed"]'><a
                        class="aspect aspect--13x9" href="img/gallery/06full.jpg" data-caption="Image caption"
                        data-role=gallery-link>
                        <div class=aspect__inner>
                            <picture>
                                <image class="lazy" src="img/gallery/Asset 2-50.jpg" alt="Image caption">
                            </picture>
                        </div>
                        <div class=overlay>
                            <h4 class=overlay_caption>Fresh Concept Construction Renovation</h4><span
                                class=overlay_label>Special Projects</span>
                        </div>
                    </a></figure>

                    <figure class=gallery_masonry-item data-groups='["Completed"]'><a
                        class="aspect aspect--13x9" href="img/gallery/06full.jpg" data-caption="Image caption"
                        data-role=gallery-link>
                        <div class=aspect__inner>
                            <picture>
                                <image class="lazy" src="img/gallery/Asset 3-50.jpg" alt="Image caption">
                            </picture>
                        </div>
                        <div class=overlay>
                            <h4 class=overlay_caption>Fresh Concept Construction Renovation</h4><span
                                class=overlay_label>Special Projects</span>
                        </div>
                    </a></figure>
            
                    <figure class=gallery_masonry-item data-groups='["Completed"]'><a
                        class="aspect aspect--13x9" href="img/gallery/06full.jpg" data-caption="Image caption"
                        data-role=gallery-link>
                        <div class=aspect__inner>
                            <picture>
                                <image class="lazy"src="img/gallery/Asset 4-50.jpg" alt="Image caption">
                            </picture>
                        </div>
                        <div class=overlay>
                            <h4 class=overlay_caption>Fresh Concept Construction Renovation</h4><span
                                class=overlay_label>Special Projects</span>
                        </div>
                    </a></figure>

                    <figure class=gallery_masonry-item data-groups='["Completed"]'><a
                        class="aspect aspect--13x9" href="img/gallery/06full.jpg" data-caption="Image caption"
                        data-role=gallery-link>
                        <div class=aspect__inner>
                            <picture>
                                <image class="lazy" src="img/gallery/Asset 5-50.jpg" alt="Image caption">
                            </picture>
                        </div>
                        <div class=overlay>
                            <h4 class=overlay_caption>Fresh Concept Construction Renovation</h4><span
                                class=overlay_label>Special Projects</span>
                        </div>
                    </a></figure>

                    <figure class=gallery_masonry-item data-groups='["Completed"]'><a
                        class="aspect aspect--13x9" href="img/gallery/06full.jpg" data-caption="Image caption"
                        data-role=gallery-link>
                        <div class=aspect__inner>
                            <picture>
                                <image class="lazy"src="img/gallery/Asset 6-50.jpg" alt="Image caption">
                            </picture>
                        </div>
                        <div class=overlay>
                            <h4 class=overlay_caption>Fresh Concept Construction Renovation</h4><span
                                class=overlay_label>Special Projects</span>
                        </div>
                    </a></figure>
            
                    <figure class=gallery_masonry-item data-groups='["Completed"]'><a
                        class="aspect aspect--13x9" href="img/gallery/06full.jpg" data-caption="Image caption"
                        data-role=gallery-link>
                        <div class=aspect__inner>
                            <picture>
                                <image class="lazy" src="img/gallery/Asset 7-50.jpg" alt="Image caption">
                            </picture>
                        </div>
                        <div class=overlay>
                            <h4 class=overlay_caption>Fresh Concept Construction Renovation</h4><span
                                class=overlay_label>Special Projects</span>
                        </div>
                    </a></figure>

                    <figure class=gallery_masonry-item data-groups='["Completed"]'><a
                        class="aspect aspect--13x9" href="img/gallery/06full.jpg" data-caption="Image caption"
                        data-role=gallery-link>
                        <div class=aspect__inner>
                            <picture>
                                <image class="lazy" src="img/gallery/Asset 8-50.jpg" alt="Image caption">
                            </picture>
                        </div>
                        <div class=overlay>
                            <h4 class=overlay_caption>Fresh Concept Construction Renovation</h4><span
                                class=overlay_label>Special Projects</span>
                        </div>
                    </a></figure>

                    <figure class=gallery_masonry-item data-groups='["Completed"]'><a
                        class="aspect aspect--13x9" href="img/gallery/06full.jpg" data-caption="Image caption"
                        data-role=gallery-link>
                        <div class=aspect__inner>
                            <picture>
                                <image class="lazy" src="img/gallery/Asset 9-50.jpg" alt="Image caption">
                            </picture>
                        </div>
                        <div class=overlay>
                            <h4 class=overlay_caption>Fresh Concept Construction Renovation</h4><span
                                class=overlay_label>Special Projects</span>
                        </div>
                    </a></figure>
            
                    <figure class=gallery_masonry-item data-groups='["Completed"]'><a
                        class="aspect aspect--13x9" href="img/gallery/06full.jpg" data-caption="Image caption"
                        data-role=gallery-link>
                        <div class=aspect__inner>
                            <picture>
                                <image class="lazy" src="img/gallery/Asset 10-50.jpg" alt="Image caption">
                            </picture>
                        </div>
                        <div class=overlay>
                            <h4 class=overlay_caption>Fresh Concept Construction Renovation</h4><span
                                class=overlay_label>Special Projects</span>
                        </div>
                    </a></figure>

                    <figure class=gallery_masonry-item data-groups='["Completed"]'><a
                        class="aspect aspect--13x9" href="img/gallery/06full.jpg" data-caption="Image caption"
                        data-role=gallery-link>
                        <div class=aspect__inner>
                            <picture>
                                <image class="lazy" src="img/gallery/Asset 6-50.jpg" alt="Image caption">
                            </picture>
                        </div>
                        <div class=overlay>
                            <h4 class=overlay_caption>Fresh Concept Construction Renovation</h4><span
                                class=overlay_label>Special Projects</span>
                        </div>
                    </a></figure>

                    <figure class=gallery_masonry-item data-groups='["Completed"]'><a
                        class="aspect aspect--13x9" href="img/gallery/06full.jpg" data-caption="Image caption"
                        data-role=gallery-link>
                        <div class=aspect__inner>
                            <picture>
                                <image class="lazy" src="img/gallery/Asset 4-50.jpg" alt="Image caption">
                            </picture>
                        </div>
                        <div class=overlay>
                            <h4 class=overlay_caption>Fresh Concept Construction Renovation</h4><span
                                class=overlay_label>Special Projects</span>
                        </div>
                    </a></figure>
            
                    <figure class=gallery_masonry-item data-groups='["Upcoming"]'><a
                        class="aspect aspect--13x9" href="img/gallery/06full.jpg" data-caption="Image caption"
                        data-role=gallery-link>
                        <div class=aspect__inner>
                            <picture>
                                <image class="lazy" src="img/gallery/Asset 13-50.jpg" alt="Image caption">
                            </picture>
                        </div>
                        <div class=overlay>
                            <h4 class=overlay_caption>Fresh Concept Construction Renovation</h4><span
                                class=overlay_label>Special Projects</span>
                        </div>
                    </a></figure>

                    <figure class=gallery_masonry-item data-groups='["Ongoing"]'><a
                        class="aspect aspect--13x9" href="img/gallery/06full.jpg" data-caption="Image caption"
                        data-role=gallery-link>
                        <div class=aspect__inner>
                            <picture>
                                <image class="lazy" src="img/gallery/Asset 14-50.jpg" alt="Image caption">
                            </picture>
                        </div>
                        <div class=overlay>
                            <h4 class=overlay_caption>Fresh Concept Construction Renovation</h4><span
                                class=overlay_label>Special Projects</span>
                        </div>
                    </a></figure>

                    <figure class=gallery_masonry-item data-groups='["Completed"]'><a
                        class="aspect aspect--13x9" href="img/gallery/06full.jpg" data-caption="Image caption"
                        data-role=gallery-link>
                        <div class=aspect__inner>
                            <picture>
                                <image class="lazy" src="img/gallery/Asset 15-50.jpg" alt="Image caption">
                            </picture>
                        </div>
                        <div class=overlay>
                            <h4 class=overlay_caption>Fresh Concept Construction Renovation</h4><span
                                class=overlay_label>Special Projects</span>
                        </div>
                    </a></figure>
             
                    <figure class=gallery_masonry-item data-groups='["Ongoing"]'><a
                        class="aspect aspect--13x9" href="img/gallery/06full.jpg" data-caption="Image caption"
                        data-role=gallery-link>
                        <div class=aspect__inner>
                            <picture>
                                <image class="lazy" src="img/gallery/Asset 16-50.jpg" alt="Image caption">
                            </picture>
                        </div>
                        <div class=overlay>
                            <h4 class=overlay_caption>Fresh Concept Construction Renovation</h4><span
                                class=overlay_label>Special Projects</span>
                        </div>
                   </a></figure>    
                </div>                                                                                        
            </div>
        </div>
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
                            <a class="nav-link link" href="service.php" data-page="about"><i
                                    class="icon-chevron_right icon"></i>
                                Licensed Surveyor</a>
                        </li>
                        <li class="list-item">
                            <a class="nav-link link" href="service.php" data-page="services"><i
                                    class="icon-chevron_right icon"></i>
                                Renovation Contractor</a>
                        </li>
                        <li class="list-item">
                            <a class="nav-link link" href="service.php" data-page="blog"><i
                                    class="icon-chevron_right icon"></i>
                                Interior Designer</a>
                        </li>
                        <li class="list-item">
                            <a class="nav-link link" href="service.php" data-page="services"><i
                                    class="icon-chevron_right icon"></i>
                                Real Estate</a>
                        </li>
                        <li class="list-item">
                            <a class="nav-link link" href="service.php" data-page="projects"><i
                                    class="icon-chevron_right icon"></i>
                                Building Contractor</a>
                        </li>
                        <li class="list-item">
                            <a class="nav-link link" href="service.php" data-page="blog"><i
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
                    <span>&copy; <span id="currentYear"></span> <a href="https://www.zworktechnology.com/">Zwork
                            Technologies</a></span>
                </p>
                <ul class="socials">
                    <li class="socials_item">
                        <a class="socials_item-link" href="https://www.facebook.com/verna.engineers.contractors"
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
    <button id="scrollTrigger" type="button"><i class="icon
                icon-arrow_right"></i></button>
    <script id="www-widgetapi-script" src="../yts/jsbin/www-widgetapi-vflS50iB-/www-widgetapi.js" async=""></script>
    <script src="../player_api"></script>
    <script src="js/common.min.js"></script>
    <script src="js/demo.min.js"></script>
    <script async="" src="../gtag/js?id=undefined"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'undefined');
    </script>
</body>

</html>