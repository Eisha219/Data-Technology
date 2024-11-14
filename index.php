<!DOCTYPE html>

<html lang="en">
<?php
include_once 'head.php';
$a = $b = $c = $d = 'none';
$a = 'active';
?>

<body>
    
 <!-- navbar section -->
 <?php
include_once "navbar.php"
 ?>
 <!-- banner section start  -->
 <section class="banner-wrapper wrapper">
 <video autoplay muted loop class="background-video" id="background-video">
        <source src="./assets/images/home/banner-vd.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 order-lg-1 order-2">
                    <div class="banner-para">
                        <h2 >
                            LET'S WORK TOGETHER TO <span><br class="d-none d-xl-block"><h1 class="text-primary fw-bolder my-2">BRING YOUR VISION TO LIFE</h1> </span>
                        </h2>
                        <p>Best Vision is a renowned full service marketing agency based in Toronto, with the sole goal
                            of bringing your vision to life and helping your ideas grow.</p>
                            <p class="mb-4">Our main services consist of Web Design and Development, Branding, Social Media Marketing,
                                and Advertising. We offer solutions that are innovative and custom tailored for you and your
                                business.
                            </p>
                        <a href="services.php" class="main-btn my-5">View All Services</a>
                    </div>
                </div>
                <div class="col-lg-6 mb-5 order-lg-2 order-1">
                    <div class="box">
                        <div class="img-content">
                        <img src="./assets/images/home/banner.jpg" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about section  -->
    <section class="about-parallax about-parallax-main img1">
        <div class="about-wrapper wrapper">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="sec-title">
                            <h1>Who <span>We are</span></h1>
                            <h4>Bring The Revolution With The Diligence Service</h4>
                        </div>
                    </div>
                </div>
            </div>
     <div class="container bg-dark about-container">
    <div class="row justify-content-between align-items-center px-5">
        <div class="col-md-4 ">
            <img src="./assets/images/home/team2.jpg" alt="eis" class="img-fluid">
        </div>
        <div class="col-md-6 offset-md-2">
            <div class="ms-3" data-aos="fade-down" data-aos-delay="150">
                <h1 class="text-primary">Your Trusted Software Agency</h1>
                <p class="">With years of experience and a proven track record,
                     we are a trusted partner for businesses across industries. 
                     Embrace cutting-edge technologies with us, as we craft tailored solutions that elevate your brand and deliver measurable results on time and within budget. 
                    Achieve your digital ambitions with BrainsLogic today!</p>
                <div class="d-flex pt-4 mb-3">
                    <div class="iconbox me-4">
                    <i class="fas fa-medal"></i>
                    </div>
                    <div>
                        <h2>Quality</h2>
                        <p>We are committed to delivering solutions of the highest quality. </p>
                    </div>
                </div>
                <div class="d-flex mb-3">
                     <div class="iconbox me-4">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <div>
                        <h2>Performance</h2>
                        <p>Our focus on performance optimization ensures that your web applications and digital assets load quickly</p>
                    </div>
                </div>
                <div class="d-flex">
                <div class="iconbox me-4">
                    <i class="fas fa-bell"></i>
                     </div>
                    <div>
                        <h2>Timely Delivery</h2>
                        <p>Our agile development process and efficient project management ensure on-time delivery 
                        without compromising on quality.
                    </p>
                    </div>
                </div>
               
            </div>
        </div>
       
    </div>
    <div class="row">
        <div class="col text-end py-3 me-5">
            <a href="about.php" class="view-link">Learn More <i class="ms-3 fas fa-arrow-right"></i></a>
        </div>
    </div>
</div>

            </div>
     </section>
    <!----- services section----  -->
    <section class="parallax parallax-main mb-5 services">
        <div class="main-wrapper ">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="sec-title">
                            <h1>SOLUTIONS<span> WE OFFER</span></h1>
                            <h4>Bring The Revolution With The Diligence Service</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid px-lg-0">
                <div class="row">
                    <div class="offset-lg-6 col-lg-6 offset-md-4 col-md-8 mb-5 mb-lg-0">
                        <div class="parallax parallax-1 img2">
                            <div class="card black-card">
                                <h3>WEBSITE DESIGN</h3>
                                <h5>DESIGNED WITH INNOVATION</h5>
                                <p>Our award-winning designers are here to create the perfect online presence for you.
                                    We bring experience as well as a design that stands out to all websites we create
                                    for brands both large and small.</p>
                                <a href="services.php" class="view-link">Learn More <i class="ms-3 fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-8 mb-5 mb-lg-0">
                        <div class="text-end parallax img3">
                            <div class="card right black-card">
                                <h3> BRANDING</h3>
                                <h5>STAND OUT AND SUCCEED</h5>
                                <p>Our award-winning designers are here to create the perfect online presence for you.
                                    We bring experience as well as a design that stands out to all websites we create
                                    for brands both large and small.</p>
                                    <a href="services.php" class="view-link">Learn More <i class="ms-3 fas fa-arrow-right"></i></a>
                                    </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-lg-6 col-lg-6 offset-md-4 col-md-8  mb-5 mb-lg-0">
                        <div class="text-end parallax parallax-1 img4">
                            <div class="card black-card">
                                <h3>ADVERTISING & CAMPAIGNS</h3>
                                <h5>PAY-PER-CLICK (PPC)</h5>
                                <p>Our award-winning designers are here to create the perfect online presence for you.
                                    We bring experience as well as a design that stands out to all websites we create
                                    for brands both large and small.</p>
                                    <a href="services.php" class="view-link">Learn More <i class="ms-3 fas fa-arrow-right"></i></a>
                                    </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-8  mb-5 mb-lg-0">
                        <div class="text-end parallax img5">
                            <div class="card right black-card">
                                <h3>SOCIAL MEDIA MARKETING</h3>
                                <h5>CONTENT WITH MEASURABLE IMPACT</h5>
                                <p>Our award-winning designers are here to create the perfect online presence for you.
                                    We bring experience as well as a design that stands out to all websites we create
                                    for brands both large and small.</p>
                                    <a href="services.php" class="view-link">Learn More <i class="ms-3 fas fa-arrow-right"></i></a>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
         <!-- portflio work Section Start-->
    <section class="work-wrapper wrapper ">
    <div class="container">
                <div class="row my-5 ">
                    <div class="col-12">
                        <div class="sec-title ">
                            <h1 class="text-white">Our <span>Latest Work</span></h1>
                            <h4 class="text-white">Brand Vision is proud to work with businesses from many industries</h4>
                        </div>
                    </div>
                </div>
            </div>
        <div class="container-fluid px-lg-0 py-4">
            <div class="row mt-4">
                <div class="col-sm-6 p-0">
                <div class="portfolio-item image-zoom">
                 <div class="image-zoom-wrapper">
                 <img src="./assets/images/home/project-1.jpg" alt="eis" class="img-fluid">
                 </div>
                 <a href="portfolio.php" class="view-link iconbox  ">View Project <i class="ms-3 fas fa-arrow-right"></i></a>
                 </div>
                </div>
                <div class="col-sm-6 p-0">
                <div class="portfolio-item image-zoom">
                        <div class="image-zoom-wrapper">
                        <img src="./assets/images/home/project-2.jpg" alt="eis" class="img-fluid">
                        </div>
                        <a href="portfolio.php" class="view-link iconbox  ">View Project <i class="ms-3 fas fa-arrow-right"></i></a>
                      </div>
                </div>
                <div class="col-sm-6 p-0">
                <div class="portfolio-item image-zoom">
                        <div class="image-zoom-wrapper">
                        <img src="./assets/images/home/project-3.jpg" alt="eis" class="img-fluid">
                        </div>
                        <a href="portfolio.php" class="view-link iconbox  ">View Project <i class="ms-3 fas fa-arrow-right"></i></a>
                      </div>
                </div>
                <div class="col-sm-6 p-0">
                <div class="portfolio-item image-zoom">
                        <div class="image-zoom-wrapper">
                        <img src="./assets/images/home/project-4.jpg" alt="eis" class="img-fluid">
                        </div>
                        <a href="portfolio.php" class="view-link iconbox  ">View Project <i class="ms-3 fas fa-arrow-right"></i></a>
                      </div>
                </div>

                <div class="col-12 text-center mt-5">
                    <a href="portfolio.php" class=" main-btn">See More</a>
                </div>
            </div>
        </div>
    </section>

        <!--Testimonial Section Start-->
    <section class="testimonial-wrapper wrapper">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 text-lg-center sec-title">
                    <h1>WHAT OUR <br class="d-lg-block d-none">CLIENTS SAY</h1>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="card">
                                    <div clas="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="py-5">
                                        <p>“lorum Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae nobis molestias natus impedit consequuntur enim inventore aperiam. Error commodi laudantium repellat debitis quisquam ab accusantium ratione saepe laborum consectetur? Sit!”</p>
                                    </div>
                                    <div class="title">
                                        <h5>David James</h5>
                                        <h5>Dierector</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card">
                                    <div clas="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="py-5">
                                        <p>“lorum Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae nobis molestias natus impedit consequuntur enim inventore aperiam. Error commodi laudantium repellat debitis quisquam ab accusantium ratione saepe laborum consectetur? Sit!”</p>
                                    </div>
                                    <div class="title">
                                        <h5>David James</h5>
                                        <h5>Dierector</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card">
                                    <div clas="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="py-5">
                                        <p>“We are greatly thankful to Analog for supporting us to explore and create
                                            our name as brand on social media. The team of Analog Webmedia works with
                                            full dedication and responsibility to make the market for our brand. It’s
                                            been more than 30 days since we are connected and we are like digital family
                                            now. We appreciate the work and support the working team for best outputs in
                                            future.” </p>
                                    </div>
                                    <div class="title">
                                        <h5>Virasati</h5>
                                        <h5>Founder Of Virasati</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



<!-- footer section  -->
<?php
     include_once "footer.php"
?>

<script>
    //  document.addEventListener('DOMContentLoaded', function() {
    //     var video = document.getElementById('background-video');
    //     video.playbackRate = 0.3; 
    // });
</script>
</body>
</html>