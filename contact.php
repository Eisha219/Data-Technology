<!DOCTYPE html>

<html lang="en">
<?php
include_once 'head.php';
$a = $b = $c = $d = 'none';
$a = 'active';
?>
<style>
     .get-in-touch .card {
    background-color: #fff;
    min-height: 36rem;
    padding: 3rem;
    border-radius: 2rem solid #CCCCCC ;
    box-shadow: 0.1rem -0.07rem 1.5rem 0.3rem rgb(0 0 0 / 26%);
    text-align: center;
    transition: 0.5s all;
}


 .card i {
    font-size: 8rem;
    margin-bottom: 3rem;
}

 .card h4 {
    font-weight: 800;
}

 .card p {
    color: var(--black-color);
}

 .card p:last-child {
    font-family: var(--secondary-font);
    font-weight: 700;
}

.form-section {
    padding: 10rem;
    background-color: var(--black-color);
    box-shadow: var(--box-shadow);
    border-radius: 2rem;
}

.form-section .form-control:focus {
    box-shadow: none;
    border-color: var(--light-color);

}

.form-section input.form-control {
    height: 4.5rem;
    border: 0.1rem solid var(--light-color);
    font-size: 1.5rem;
}

.form-section textarea {
    border: 0.1rem solid var(--light-color);
    font-size: 1.5rem;
}
.parallax {
    position: relative;
    background-position: left;
    background-size: 100%;
    background-repeat: no-repeat;
    background-attachment: fixed;
    display: inline-block;
    align-items: center;
    width: 100%;
    height: 100vh;
}
.parallax-main {
    position: relative;
    background-position: right;
    background-size: contain;
    background-repeat: no-repeat;
    background-attachment: fixed;
    display: inline-block;
    align-items: center;
    width: 100%;
    height: 100vh;
}

.parallax.img1 {
    background-image: url('./assets/images//home/team.jpg');
    height: 100%;
    background-size: cover;

}
.main-wrapper {
    /* margin-top: 80vh; */
    background-color: var(--white-color);
    width: 100%;
}
</style>
<body>
 <!-- navbar section -->
 <?php
include_once "navbar.php"
 ?>

   <!-- contact Section Start-->
   <section class="parallax parallax-main img2">
        <div class="main-wrapper wrapper pb-0">
            <div class="container">
                <div class="row mb-5 justify-content-center">
                    <div class="col-lg-9 mb-5">
                        <div class="sec-title">
                            <h1>GET IN TOUCH</h1>
                            <h4>DESIGN YOUR STORY</h4>
                            <p class="text-dark">Need an expert? you are more than welcomed to leave your contact info
                                and we will be in touch shortly</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container get-in-touch">
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="card">
                            <i class="fas fa-home"></i>
                            <h4>Visit Us</h4>
                            <p>New York, NY 3300</p>
                            <p>Data Technology</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="card">
                            <i class="fas fa-phone-alt"></i>
                            <h4>Call Us</h4>
                            <p>We're here to help and answer any question you might have. We look forward to hearing
                                from you 😊</p>
                            <p>(414) 586 - 3017</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="card">
                            <i class="fas fa-envelope-open"></i>
                            <h4>Contact Us</h4>
                            <p>For any questions you may have, you can reach me here:</p>
                            <p>DataTechnology@GMAIL.COM</p>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="form-wrapper wrapper ">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 mb-5">
                    <div class="sec-title">
                        <h1>LETS TALK</h1>
                        <p class="text-dark">Don’t Hesitate to contact with us for any kind of information!!</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="form-section">
                        <form>
                            <div class="mb-5">
                                <input type="text" class="form-control" placeholder="Name *" required>
                            </div>
                            <div class="mb-5">
                                <input type="email" class="form-control" placeholder="Email *" required>
                            </div>
                            <div class="mb-5">
                                <input type="email" class="form-control" placeholder="Subject">
                            </div>
                            <div class="mb-5">
                                <textarea class="form-control" rows="8" placeholder="Message...." required></textarea>
                            </div>
                            <div class="mb-5 text-end">
                               <button class=" main-btn">Submit</button>
                            </div>
                        </form>
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