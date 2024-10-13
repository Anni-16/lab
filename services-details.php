<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from craftohtml.themezaa.com/demo-business-blog-single-modern.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Sep 2024 09:32:08 GMT -->
<?php
include('include/head.php');
$url = $_GET['url'];
$sqli = "SELECT * FROM services where `url` = '$url'";
$result1 = mysqli_query($conn, $sqli);
$row1 = mysqli_fetch_assoc($result1);

?>

<body data-mobile-nav-style="classic">
    <!-- start header -->
    <?php include('include/header.php'); ?>
    <!-- end header -->
    <!-- start section -->
    <section class="one-fourth-screen bg-dark-gray ipad-top-space-margin sm-mb-50px" data-parallax-background-ratio="0.5" style="background-image: url(images/demo-business-blog-single-creative-bg.jpg)"></section>
    <!-- end section -->

    <!-- start section -->
    <section class="half-section pb-0">
        <div class="container">
            <div class="row justify-content-center" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="mb-6">
                    <img alt="" class="border-radius-5px" data-cfsrc="Uploads/services/<?php echo $row1['image'] ?>">
                    <img src="Uploads/services/<?php echo $row1['image'] ?>" alt="" class="border-radius-5px">
                </div>
                <div class="col-lg-9 last-paragraph-no-margin">
                    <h6 class="alt-font fw-500 text-dark-gray ls-minus-05px mb-15px"><?php echo $row1['title'] ?></h6>
                    <p><?php echo $row1['description'] ?></p>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <!-- <section class="half-section"> 
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <div class="row mb-30px">
                            <div class="tag-cloud col-md-9 text-center text-md-start sm-mb-15px">
                                <a href="demo-business-blog.html">Development</a> 
                                <a href="demo-business-blog.html">Event</a>
                                <a href="demo-business-blog.html">Multimedia </a>
                                <a href="demo-business-blog.html">Fashion</a>
                            </div> 
                            <div class="tag-cloud col-md-3 text-uppercase text-center text-md-end">
                                <a class="likes-count fw-500 mx-0" href="#"><i class="fa-regular fa-heart text-red me-10px"></i><span class="text-dark-gray text-dark-gray-hover">05 Likes</span></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mb-6">
                                <div class="d-block d-md-flex w-100 box-shadow-extra-large align-items-center border-radius-4px p-7 sm-p-35px">
                                    <div class="w-140px text-center me-50px sm-mx-auto">
                                        <img class="rounded-circle w-120px" alt="" data-cfsrc="images/team-25.jpg" style="display:none;visibility:hidden;"><img src="images/team-25.jpg" class="rounded-circle w-120px" alt="">
                                        <a href="demo-business-blog.html" class="text-dark-gray fw-500 mt-20px d-inline-block lh-20">Colene Landin</a>
                                        <span class="fs-15 lh-20 d-block sm-mb-15px">Co-founder</span>
                                    </div>
                                    <div class="w-75 sm-w-100 text-center text-md-start last-paragraph-no-margin">
                                        <p>Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer.</p>
                                        <a href="demo-business-blog.html" class="btn btn-link btn-large text-dark-gray mt-15px">All author posts</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-12 text-center elements-social social-icon-style-04">
                                <ul class="medium-icon dark">
                                    <li><a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i><span></span></a></li>
                                    <li><a class="twitter" href="https://www.twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i><span></span></a></li>
                                    <li><a class="instagram" href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i><span></span></a></li>
                                    <li><a class="linkedin" href="http://www.linkedin.com/" target="_blank"><i class="fa-brands fa-linkedin-in"></i><span></span></a></li> 
                                    <li><a class="behance" href="http://www.behance.com/" target="_blank"><i class="fa-brands fa-behance"></i><span></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
    <!-- end section -->
    <!-- start section -->
    <section class="bg-solitude-blue position-relative sm-pb-20px">
        <div class="container">
            <div class="row justify-content-center mb-1">
                <div class="col-lg-7 text-center">
                    <span class="bg-white box-shadow-quadruple-large text-uppercase fs-13 ps-25px pe-25px alt-font fw-600 text-base-color lh-40 sm-lh-55 border-radius-100px d-inline-block mb-25px" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "delay": 500, "staggervalue": 100, "easing": "easeOutQuad" }'>Services</span>
                    <h3 class="alt-font text-dark-gray fw-600 ls-minus-1px" data-anime='{ "el": "lines", "translateY": [30, 0], "opacity": [0,1], "delay": 500, "staggervalue": 100, "easing": "easeOutQuad" }'> Other Servies</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12 px-0">
                    <ul class="blog-classic blog-wrapper grid grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-double-extra-large" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <li class="grid-sizer"></li>
                        <?php
                        $sql = "select * from services";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <!-- start blog item -->
                            <li class="grid-item">
                                <div class="card bg-transparent border-0 h-100">
                                    <div class="blog-image position-relative overflow-hidden border-radius-4px">
                                        <a href="services-details.php?url=<?php echo $row['url']; ?>"><img alt="" data-cfsrc="Uploads/services/<?php echo $row['image'] ?>" style="display:none;visibility:hidden;" /><img src="Uploads/services/<?php echo $row['image'] ?>" alt="" /></a>
                                    </div>
                                    <div class="card-body px-0 pb-30px pt-30px xs-pb-15px last-paragraph-no-margin">
                                        <span class="fs-13 text-uppercase mb-5px d-block">
                                            <a href="services-details.php?url=<?php echo $row['url']; ?>" class="text-dark-gray fw-500 categories-text">Servies</a>
                                            <!-- <a href="#" class="blog-date">26 August 2023</a> -->
                                        </span>
                                        <a href="services-details.php?url=<?php echo $row['url']; ?>" class="card-title mb-0 fw-500 fs-18 lh-30 text-dark-gray d-inline-block"><?php echo $row['title'] ?></a>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item -->
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section id="comments">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 mb-3 sm-mb-6">
                    <h6 class="alt-font text-dark-gray fw-500 mb-5px">Write a comment</h6>
                    <div class="mb-5px">Your email address will not be published. Required fields are marked *</div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <form action="https://craftohtml.themezaa.com/email-templates/contact-form.php" method="post" class="row contact-form-style-02">
                        <div class="col-md-6 mb-30px">
                            <input class="input-name border-radius-4px form-control required" type="text" name="name" placeholder="Enter your name*">
                        </div>
                        <div class="col-md-6 mb-30px">
                            <input class="border-radius-4px form-control required" type="email" name="email" placeholder="Enter your email address*">
                        </div>
                        <div class="col-md-12 mb-30px">
                            <textarea class="border-radius-4px form-control" cols="40" rows="4" name="comment" placeholder="Your message"></textarea>
                        </div>
                        <div class="col-12">
                            <input type="hidden" name="redirect" value="">
                            <button class="btn btn-dark-gray btn-small btn-round-edge submit" type="submit">Post Comment</button>
                            <div class="form-results mt-20px d-none"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start footer -->

    <!-- end footer -->
    <!-- start scroll progress -->
    <?php include('include/footer.php'); ?>

    <!-- end scroll progress -->
    <!-- javascript libraries -->
    <?php include('include/foot.php'); ?>
</body>

<!-- Mirrored from craftohtml.themezaa.com/demo-business-blog-single-modern.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Sep 2024 09:32:10 GMT -->

</html>