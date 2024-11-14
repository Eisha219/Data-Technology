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
   <section class="parallax parallax-main img1">
        <div class="main-wrapper wrapper">
            <div class="container">
            </div>
            <div class="container-fluid px-lg-0">
                <div class="row">
                    <div class="offset-lg-6 col-lg-6 offset-md-4 col-md-8 mb-5 mb-lg-0">
                        <div class="text-end parallax parallax-1 img2">
                            <div class="card black-card">
                                <h3>About Us</h3>
                                <h5>Our sole goal is to bring your vision to life, through our vast experience,
                                    innovation and dedication</h5>
                                <h5>Our team is here to assist you with all of your digital marketing needs, From Web
                                    Design and Branding, all the way to Advertisement </h5>
                                    <a href="contact.php" class="view-link">Contact us <i class="ms-3 fas fa-arrow-right"></i></a>
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
       <section class="bg-black wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-title">
                        <h1 class="text-white">Who We Are</h1>
                    </div>
                </div>
                <div class="col-md-7 mb-5">
                    <p>Welcome to Data Technology, where innovation meets excellence! We offer Web Design, 
                     Web Development, Mobile App Development Digital Marketing, Data Scraping, and Automation services.
                     Let us transform your ideas into captivating realities for digital success.
                     With years of experience and a proven track record, 
                    we are a trusted partner for businesses across industries. 
                    Embrace cutting-edge technologies with us, as we craft tailored solutions that elevate your brand and deliver measurable results on time and within budget. Achieve your digital ambitions with Data Technology today!</p>
                    <br>
                    <p>Our approach is centered around your success. We start by thoroughly understanding your business goals and unique requirements. Our team then collaborates closely with you to craft customized solutions that align with your vision.</p>

                </div>
                <div class="col-md-5 mb-5">
                    <img src="./assets/images/home/team.jpg"  class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <section class="abilities-wrapper wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5">
                    <div class="sec-title mb-5">
                        <h1>Our Capabilities</h1>
                        <h5 class="text-dark fw-normal text-capitalize">Everything you need to turn an idea into a
                            website</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-6 mb-5">
                    <div class="card border-0 ">
                        <h1>Product</h1>
                        <ul>
                            <li >
                                <p class="text-dark">Strategy</p>
                            </li>
                            <li>
                                <p class="text-dark">Audience Analysis</p>
                            </li>
                            <li >
                                <p class="text-dark">Business Model Canvas</p>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="col-md-3 col-6 mb-5">
                    <div class="card border-0">
                        <h1>Design</h1>
                        <ul>
                            <li>
                                <p class="text-dark">Brand Identity</p>
                            </li>
                            <li>
                                <p class="text-dark">UI/UX Research</p>
                            </li>
                            <li>
                                <p class="text-dark">Visual Design</p>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="col-md-3 col-6 mb-5">
                    <div class="card border-0">
                        <h1>Development</h1>
                        <ul>
                            <li >
                                <p class="text-dark">Websites</p>
                            </li>
                            <li>
                                <p class="text-dark">Internet of Things</p>
                            </li>
                            <li>
                                <p class="text-dark">Emerging Tech & Labs</p>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="col-md-3 col-6 mb-5">
                    <div class="card border-0">
                        <h1>Growth</h1>
                        <ul>
                            <li>
                                <p class="text-dark">Digital Marketing</p>
                            </li>
                            <li>
                                <p class="text-dark">Internet of Things</p>
                            </li>
                            <li>
                                <p class="text-dark">Search Engine Optimization</p>
                            </li>
                        </ul>
                    </div>

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
                                        <p>“You guys rocked on our Social media & Website Project, Thank you Team for
                                            doing Such a Great Job ..”</p>
                                    </div>
                                    <div class="title">
                                        <h5>Girdhar</h5>
                                        <h5>Founder Of Girdhar</h5>
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
                                            now. ” </p>
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
</body>
</html>