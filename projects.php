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
    <link rel="stylesheet" href="css/projects.min.css" />
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
                            id="links"><span class="nav-item_text">About</span></a>
                    </li>
                    <li class="header_nav-list_item">
                        <a class="nav-link nav-item" data-page="services" data-page-parent="services" href="service.php"
                            data-main="true" id="links">Services</a>
                    </li>
                    <li class="header_nav-list_item">
                        <a class="nav-link nav-item" data-page="projects2" data-page-parent="projects"
                            href="projects.php" id="links" style="color: #9fc544;">Projects</a>
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
            <div class="section_header"><span class="subtitle subtitle--extended"><a href="index.php">Home</a></span>
                <h1 class="title">Our Projects</h1>
                <!-- <ul class="breadcrumbs">
                    <li class="breadcrumbs_item"><a href="index.php">Home</a></li>
                    <li class="breadcrumbs_item breadcrumbs_item--current"><span>Projects</span></li>
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

    <main class="projects section">

        <div class="container">
            <ul class="projects_list">
                <li class="projects_list-item">
                    <div class="media aos-init aos-animate" data-aos="zoom-in-right">
                        <picture>
                            <source data-srcset="img/projects/05.webp" srcset="img/projects/05.webp" type="image/webp">
                            <img class="lazy entered loaded" data-src="img/projects/05.jpg" src="img/projects/05.jpg"
                                alt="Food Factory Design and Construction" data-ll-status="loaded"></picture>
                    </div>
                    <div class="main">
                        <h3 class="main_title aos-init aos-animate" data-aos="fade-in"><span class="text">Food Factory
                                Design and Construction</span> <span class="divider divider--line aos-init aos-animate"
                                data-aos="slide-right"></span></h3>
                        <div class="main_info"><span class="location aos-init aos-animate" data-aos="fade-in"
                                data-aos-delay="50"><i class="icon-location icon"></i> Karli Turnpike Apt. 993 Port
                                Valentine </span><a class="link link-arrow aos-init aos-animate"
                                href="single-project.html" data-aos="fade-in" data-aos-delay="50">Details <i
                                    class="icon-arrow_right icon"></i></a></div>
                    </div>
                </li>
                <li class="projects_list-item">
                    <div class="media aos-init aos-animate" data-aos="zoom-in-right">
                        <picture>
                            <source data-srcset="img/projects/02.webp" srcset="img/projects/02.webp" type="image/webp">
                            <img class="lazy entered loaded" data-src="img/projects/02.jpg" src="img/projects/02.jpg"
                                alt="Fresh Concept Construction Renovation" data-ll-status="loaded"></picture>
                    </div>
                    <div class="main">
                        <h3 class="main_title aos-init aos-animate" data-aos="fade-in"><span class="text">Fresh Concept
                                Construction Renovation</span> <span class="divider divider--line aos-init aos-animate"
                                data-aos="slide-right"></span></h3>
                        <div class="main_info"><span class="location aos-init aos-animate" data-aos="fade-in"
                                data-aos-delay="50"><i class="icon-location icon"></i> Daphne Way New Reaganmouth
                            </span><a class="link link-arrow aos-init aos-animate" href="single-project.html"
                                data-aos="fade-in" data-aos-delay="50">Details <i class="icon-arrow_right icon"></i></a>
                        </div>
                    </div>
                </li>
                <li class="projects_list-item">
                    <div class="media aos-init aos-animate" data-aos="zoom-in-right">
                        <picture>
                            <source data-srcset="img/projects/06.webp" srcset="img/projects/06.webp" type="image/webp">
                            <img class="lazy entered loaded" data-src="img/projects/06.jpg" src="img/projects/06.jpg"
                                alt="Reconstruction of Old Factory Building" data-ll-status="loaded"></picture>
                    </div>
                    <div class="main">
                        <h3 class="main_title aos-init aos-animate" data-aos="fade-in"><span class="text">Reconstruction
                                of Old Factory Building</span> <span class="divider divider--line aos-init aos-animate"
                                data-aos="slide-right"></span></h3>
                        <div class="main_info"><span class="location aos-init aos-animate" data-aos="fade-in"
                                data-aos-delay="50"><i class="icon-location icon"></i> Schoen Ramp Suite 607 Borerton
                            </span><a class="link link-arrow aos-init aos-animate" href="single-project.html"
                                data-aos="fade-in" data-aos-delay="50">Details <i class="icon-arrow_right icon"></i></a>
                        </div>
                    </div>
                </li>
                <li class="projects_list-item">
                    <div class="media aos-init aos-animate" data-aos="zoom-in-right">
                        <picture>
                            <source data-srcset="img/projects/03.webp" srcset="img/projects/03.webp" type="image/webp">
                            <img class="lazy entered loaded" data-src="img/projects/03.jpg" src="img/projects/03.jpg"
                                alt="Installation and Creation of a Supply System" data-ll-status="loaded"></picture>
                    </div>
                    <div class="main">
                        <h3 class="main_title aos-init aos-animate" data-aos="fade-in"><span class="text">Installation
                                and Creation of a Supply System</span> <span
                                class="divider divider--line aos-init aos-animate" data-aos="slide-right"></span></h3>
                        <div class="main_info"><span class="location aos-init aos-animate" data-aos="fade-in"
                                data-aos-delay="50"><i class="icon-location icon"></i> Ernest Mount Bartonstad </span><a
                                class="link link-arrow aos-init aos-animate" href="single-project.html"
                                data-aos="fade-in" data-aos-delay="50">Details <i class="icon-arrow_right icon"></i></a>
                        </div>
                    </div>
                </li>
                <li class="projects_list-item">
                    <div class="media aos-init aos-animate" data-aos="zoom-in-right">
                        <picture>
                            <source data-srcset="img/projects/01.webp" srcset="img/projects/01.webp" type="image/webp">
                            <img class="lazy entered loaded" data-src="img/projects/01.jpg" src="img/projects/01.jpg"
                                alt="Jazzy Elite Construction Shopping Center" data-ll-status="loaded"></picture>
                    </div>
                    <div class="main">
                        <h3 class="main_title aos-init aos-animate" data-aos="fade-in"><span class="text">Jazzy Elite
                                Construction Shopping Center</span> <span
                                class="divider divider--line aos-init aos-animate" data-aos="slide-right"></span></h3>
                        <div class="main_info"><span class="location aos-init aos-animate" data-aos="fade-in"
                                data-aos-delay="50"><i class="icon-location icon"></i> 100 Sunrise Ct Hamel, Minnesota
                            </span><a class="link link-arrow aos-init aos-animate" href="single-project.html"
                                data-aos="fade-in" data-aos-delay="50">Details <i class="icon-arrow_right icon"></i></a>
                        </div>
                    </div>
                </li>
                <li class="projects_list-item">
                    <div class="media aos-init aos-animate" data-aos="zoom-in-right">
                        <picture>
                            <source data-srcset="img/projects/07.webp" srcset="img/projects/07.webp" type="image/webp">
                            <img class="lazy entered loaded" data-src="img/projects/07.jpg" src="img/projects/07.jpg"
                                alt="Fresh Concept Construction Renovation" data-ll-status="loaded"></picture>
                    </div>
                    <div class="main">
                        <h3 class="main_title aos-init aos-animate" data-aos="fade-in"><span class="text">Fresh Concept
                                Construction Renovation</span> <span class="divider divider--line aos-init aos-animate"
                                data-aos="slide-right"></span></h3>
                        <div class="main_info"><span class="location aos-init aos-animate" data-aos="fade-in"
                                data-aos-delay="50"><i class="icon-location icon"></i> Claudie Green Suite 698 Avisstad
                            </span><a class="link link-arrow aos-init aos-animate" href="single-project.html"
                                data-aos="fade-in" data-aos-delay="50">Details <i class="icon-arrow_right icon"></i></a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>


        <!-- <div class="container">
        <div class=row>
            <div class="col-4 ">                         
                <li class=projects_list-item>
                    <div class=media data-aos=zoom-in-right>
                        <picture>
                            <source data-srcset=img/projects/p8.jpg srcset=img/projects/p8.jpg type=image/webp><img
                                class=lazy data-src=img/projects/p8.jpg src=img/projects/p8.jpg
                                alt="Food Factory Design and Construction">
                        </picture>
                    </div>
                    <div class=main>
                        <h3 class=main_title data-aos=fade-in><span class=text>VRL Logistics</span> 
                        <span class="divider divider--line" data-aos=slide-right></span>
                        </h3>
                        <div class=main_info><span class=location data-aos=fade-in data-aos-delay=50><i
                                    class="icon-location icon"></i> Manikandam, Trichy </span>
                        </div>
                    </div>
                </li>
            </div>  

            <div class="col-4">    
                <li class=projects_list-item>
                    <div class=media data-aos=zoom-in-right>
                        <picture>
                            <source data-srcset="img/gallery/Asset 6-50.jpg" srcset="img/gallery/Asset 6-50.jpg" type=image/webp><img
                                class=lazy data-src="img/gallery/Asset 6-50.jpg" src="img/gallery/Asset 6-50.jpg"
                                alt="Fresh Concept Construction Renovation">
                        </picture>
                    </div>
                    <div class=main>
                        <h3 class=main_title data-aos=fade-in><span class=text>Sathya Homes</span> 
                        <span class="divider divider--line" data-aos=slide-right></span></h3>
                        <div class=main_info><span class=location data-aos=fade-in data-aos-delay=50><i
                                    class="icon-location icon"></i> Tiruchirapalli,Tamilnadu </span>
                        </div>
                    </div>
                </li>   
            </div>                                  
                
            <div class="col-4">               
                <li class=projects_list-item>
                    <div class=media data-aos=zoom-in-right>
                        <picture>
                            <source data-srcset=img/projects/p3.jpg srcset=img/projects/p3.jpg type=image/webp><img
                                class=lazy data-src=img/projects/p3.jpg src=img/projects/p3.jpg
                                alt="Reconstruction of Old Factory Building">
                        </picture>
                    </div>
                    <div class=main>
                        <h3 class=main_title data-aos=fade-in><span class=text>Virutcham</span>
                        <span class="divider divider--line" data-aos=slide-right></span></h3>
                        <div class=main_info><span class=location data-aos=fade-in data-aos-delay=50><i
                                    class="icon-location icon"></i> Ramachandra Nagar, Chennai </span>
                        </div>
                    </div>
                </li>
             </div>      
        </div>  
        <br>     
                

        <div class="row">
            <div class="col-4">
                <li class=projects_list-item>
                    <div class=media data-aos=zoom-in-right>
                        <picture>
                            <source data-srcset=img/projects/p7.jpg srcset=img/projects/p7.jpg type=image/webp><img
                                class=lazy data-src=iimg/projects/p7.jpg src=img/projects/p7.jpg
                                alt="Installation and Creation of a Supply System">
                        </picture>
                    </div>
                    <div class=main>
                        <h4 class=main_title data-aos=fade-in><span class=text>Landis Matric. higher secondary
                        School</span> 
                        <span class="divider divider--line" data-aos=slide-right></span></h4>
                        <div class=main_info><span class=location data-aos=fade-in data-aos-delay=50><i
                                    class="icon-location icon"></i> Anna Nagar Main Rd, Natham </span>
                        </div>
                    </div>
                </li>
            </div>  

            <div class="col-4">    
                <li class=projects_list-item>
                    <div class=media data-aos=zoom-in-right>
                        <picture>
                            <source data-srcset=img/projects/p2.jpg srcset=img/projects/p2.jpg type=image/webp><img
                                class=lazy data-src=img/projects/p2.jpg src=img/projects/p2.jpg
                                alt="Jazzy Elite Construction Shopping Center">
                        </picture>
                    </div>
                    <div class=main>
                        <h3 class=main_title data-aos=fade-in><span class=text>Siva Homes</span>
                        <span class="divider divider--line" data-aos=slide-right></span></h3>
                        <div class=main_info><span class=location data-aos=fade-in data-aos-delay=50><i
                                    class="icon-location icon"></i> Porur, Chennai </span>
                        </div>
                    </div>
                </li>
            </div> 
            
            <div class="col-4">
                <li class=projects_list-item>
                    <div class=media data-aos=zoom-in-right>
                        <picture>
                            <source data-srcset="img/gallery/Asset 14-50.jpg" srcset="img/gallery/Asset 14-50.jpg" type=image/webp><img
                                class=lazy data-src="img/gallery/Asset 14-50.jpg" src="img/gallery/Asset 14-50.jpg"
                                alt="Jazzy Elite Construction Shopping Center">
                        </picture>
                    </div>
                    <div class=main>
                        <h3 class=main_title data-aos=fade-in><span class=text>Verna Engineer</span>
                        <span class="divider divider--line" data-aos=slide-right></span></h3>
                        <div class=main_info><span class=location data-aos=fade-in data-aos-delay=50><i
                                    class="icon-location icon"></i> Tiruchirapalli,Tamilnadu </span>
                        </div>
                    </div>
                </li>
            </div> 
        </div>
        <br>
          

        <div class="row">
            <div class="col-4">
                <li class=projects_list-item>
                    <div class=media data-aos=zoom-in-right>
                        <picture>
                            <source data-srcset="img/gallery/Asset 16-50.jpg" srcset="img/gallery/Asset 16-50.jpg" type=image/webp><img
                                class=lazy data-src="img/gallery/Asset 16-50.jpg" src="img/gallery/Asset 16-50.jpg"
                                alt="Jazzy Elite Construction Shopping Center">
                        </picture>
                    </div>
                    <div class=main>
                        <h3 class=main_title data-aos=fade-in><span class=text>Verna Engineer</span>
                        <span class="divider divider--line" data-aos=slide-right></span></h3>
                        <div class=main_info><span class=location data-aos=fade-in data-aos-delay=50><i
                                    class="icon-location icon"></i> Tiruchirapalli,Tamilnadu </span>
                        </div>  
                    </div>
                </li>
            </div>
            <div class="col -4"> 
                <li class=projects_list-item>
                    <div class=media data-aos=zoom-in-right>
                        <picture>
                            <source data-srcset="img/gallery/Asset 1-50.jpg" srcset="img/gallery/Asset 1-50.jpg" type=image/webp><img
                                class=lazy data-src="img/gallery/Asset 1-50.jpg" src="img/gallery/Asset 1-50.jpg"
                                alt="Jazzy Elite Construction Shopping Center">
                        </picture>
                    </div>
                    <div class=main>
                        <h3 class=main_title data-aos=fade-in><span class=text>Verna Engineer</span>
                        <span class="divider divider--line" data-aos=slide-right></span></h3>
                        <div class=main_info><span class=location data-aos=fade-in data-aos-delay=50><i
                                    class="icon-location icon"></i> Tiruchirapalli,Tamilnadu </span>
                        </div>  
                    </div>
                </li>
            </div>
            <div class="col-4">
                <li class=projects_list-item>
                    <div class=media data-aos=zoom-in-right>
                        <picture>
                            <source data-srcset="img/gallery/Asset 2-50.jpg" srcset="img/gallery/Asset 2-50.jpg" type=image/webp><img
                                class=lazy data-src="img/gallery/Asset 2-50.jpg" src="img/gallery/Asset 2-50.jpg"
                                alt="Jazzy Elite Construction Shopping Center">
                        </picture>
                    </div>
                    <div class=main>
                        <h3 class=main_title data-aos=fade-in><span class=text>Verna Engineer</span>
                        <span class="divider divider--line" data-aos=slide-right></span></h3>
                        <div class=main_info><span class=location data-aos=fade-in data-aos-delay=50><i
                                    class="icon-location icon"></i> Tiruchirapalli,Tamilnadu </span>
                        </div>  
                    </div>
                </li>
            </div>
        </div>   
        <br>  
         
        <div class="row">
            <div class="col-4">
                <li class=projects_list-item>
                    <div class=media data-aos=zoom-in-right>
                        <picture>
                            <source data-srcset="img/gallery/Asset 3-50.jpg" srcset="img/gallery/Asset 3-50.jpg" type=image/webp><img
                                class=lazy data-src="img/gallery/Asset 3-50.jpg" src="img/gallery/Asset 3-50.jpg"
                                alt="Jazzy Elite Construction Shopping Center">
                        </picture>
                    </div>
                    <div class=main>
                        <h3 class=main_title data-aos=fade-in><span class=text>Verna Engineer</span>
                        <span class="divider divider--line" data-aos=slide-right></span></h3>
                        <div class=main_info><span class=location data-aos=fade-in data-aos-delay=50><i
                                    class="icon-location icon"></i> Tiruchirapalli,Tamilnadu </span>
                        </div>  
                    </div>
                </li>
            </div>
            <div class="col-4">  
                <li class=projects_list-item>
                    <div class=media data-aos=zoom-in-right>
                        <picture>
                            <source data-srcset="img/gallery/Asset 5-50.jpg" srcset="img/gallery/Asset 5-50.jpg" type=image/webp><img
                                class=lazy data-src="img/gallery/Asset 5-50.jpg" src="img/gallery/Asset 5-50.jpg"
                                alt="Jazzy Elite Construction Shopping Center">
                        </picture>
                    </div>
                    <div class=main>
                        <h3 class=main_title data-aos=fade-in><span class=text>Verna Engineer</span>
                        <span class="divider divider--line" data-aos=slide-right></span></h3>
                        <div class=main_info><span class=location data-aos=fade-in data-aos-delay=50><i
                                    class="icon-location icon"></i> Tiruchirapalli,Tamilnadu </span>
                        </div>  
                    </div>
                </li>
            </div>
            <div class="col-4">
                <li class=projects_list-item>
                    <div class=media data-aos=zoom-in-right>
                        <picture>
                            <source data-srcset="img/gallery/Asset 8-50.jpg" srcset="img/gallery/Asset 8-50.jpg" type=image/webp><img
                                class=lazy data-src="img/gallery/Asset 8-50.jpg" src="img/gallery/Asset 8-50.jpg"
                                alt="Jazzy Elite Construction Shopping Center">
                        </picture>
                    </div>
                    <div class=main>
                        <h3 class=main_title data-aos=fade-in><span class=text>Verna Engineer</span>
                        <span class="divider divider--line" data-aos=slide-right></span></h3>
                        <div class=main_info><span class=location data-aos=fade-in data-aos-delay=50><i
                                    class="icon-location icon"></i> Tiruchirapalli,Tamilnadu </span>
                        </div>  
                    </div>
                </li>
             </div>  
        </div>                                                
        <br>  

        <div class="row">
            <div class=" col-4"> 
                <li class=projects_list-item>
                    <div class=media data-aos=zoom-in-right>
                        <picture>
                            <source data-srcset="img/gallery/Asset 7-50.jpg" srcset="img/gallery/Asset 7-50.jpg" type=image/webp><img
                                class=lazy data-src="img/gallery/Asset 7-50.jpg" src="img/gallery/Asset 7-50.jpg"
                                alt="Jazzy Elite Construction Shopping Center">
                        </picture>
                    </div>
                    <div class=main>
                        <h3 class=main_title data-aos=fade-in><span class=text>Verna Engineer</span>
                        <span class="divider divider--line" data-aos=slide-right></span></h3>
                        <div class=main_info><span class=location data-aos=fade-in data-aos-delay=50><i
                                    class="icon-location icon"></i> Tiruchirapalli,Tamilnadu </span>
                        </div>  
                    </div>
                </li>
            </div>    

            <div class="col-4">
                <li class=projects_list-item>
                    <div class=media data-aos=zoom-in-right>
                        <picture>
                            <source data-srcset="img/gallery/Asset 9-50.jpg" srcset="img/gallery/Asset 9-50.jpg" type=image/webp><img
                                class=lazy data-src="img/gallery/Asset 9-50.jpg" src="img/gallery/Asset 9-50.jpg"
                                alt="Jazzy Elite Construction Shopping Center">
                        </picture>
                    </div>
                    <div class=main>
                        <h3 class=main_title data-aos=fade-in><span class=text>Verna Engineer</span>
                        <span class="divider divider--line" data-aos=slide-right></span></h3>
                        <div class=main_info><span class=location data-aos=fade-in data-aos-delay=50><i
                                    class="icon-location icon"></i> Tiruchirapalli,Tamilnadu </span>
                        </div>  
                    </div>
                </li>
            </div>

            <div class="col-4">
                <li class=projects_list-item>
                    <div class=media data-aos=zoom-in-right>
                        <picture>
                            <source data-srcset="img/gallery/Asset 11-50.jpg" srcset="img/gallery/Asset 11-50.jpg" type=image/webp><img
                                class=lazy data-src="img/gallery/Asset 11-50.jpg" src="img/gallery/Asset 11-50.jpg"
                                alt="Jazzy Elite Construction Shopping Center">
                        </picture>
                    </div>
                    <div class=main>
                        <h3 class=main_title data-aos=fade-in><span class=text>Verna Engineer</span>
                        <span class="divider divider--line" data-aos=slide-right></span></h3>
                        <div class=main_info><span class=location data-aos=fade-in data-aos-delay=50><i
                                    class="icon-location icon"></i> Tiruchirapalli,Tamilnadu </span>
                        </div>  
                    </div>
                </li>
            </div>
        </div>                 
          
        </div>
    </main> -->


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
                                <span>No. 3, B. P Complex, Opp. Velammal bodhi campus, Chinthamani nagar, Olaiyur main
                                    road,
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
        <button id="scrollTrigger" type="button"><i class="icon icon-arrow_right"></i></button>
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