<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from craftohtml.themezaa.com/demo-business-services.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Sep 2024 09:29:38 GMT -->
<?php include('include/head.php'); ?>

<body data-mobile-nav-style="classic">
    <!-- start header -->
    <?php include('include/header.php'); ?>
    <!-- end header -->
    <!-- start page title -->
    <section class="page-title-big-typography bg-dark-gray ipad-top-space-margin" data-parallax-background-ratio="0.5" style="background-image: url(image/services.png)">
        <div class="opacity-extra-medium bg-dark-slate-blue"></div>
        <div class="container">
            <div class="row align-items-center justify-content-center extra-small-screen">
                <div class="col-12 position-relative text-center page-title-extra-large">
                    <h1 class="m-auto text-white text-shadow-double-large fw-500 ls-minus-3px xs-ls-minus-2px" data-anime='{ "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>SERVICES</h1>
                </div>
                <div class="down-section text-center" data-anime='{ "translateY": [-15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <a href="#down-section" aria-label="scroll down" class="section-link">
                        <div class="d-flex justify-content-center align-items-center mx-auto rounded-circle fs-30 text-white">
                            <i class="feather icon-feather-chevron-down"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->
    <!-- start section -->
    <section class="bg-solitude-blue">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center text-lg-start mb-6">
                <div class="col-xl-6 col-lg-7 col-md-9 md-mb-30px sm-mb-20px">
                    <h3 class="alt-font fw-600 text-dark-gray m-0 ls-minus-2px" data-anime='{ "el": "lines", "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>Professional and dedicated diagnostic services.</h3>
                </div>
                <div class="col-xl-5 offset-xl-1 col-lg-5 col-md-9 last-paragraph-no-margin">
                    <p class="w-90 lg-w-100" data-anime='{ "el": "lines", "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>At ALPHA DIAGNOSTICS, we prioritize patient care and provide accurate, timely test results. Our experienced team is committed to ensuring the highest standards of quality and service in all our diagnostic offerings.</p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <?php
                $sql = "select * from services";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <!-- start fancy text box item -->
                    <div class="col">
                        <div class="box-shadow-quadruple-large services-box-style-01 hover-box mb-30px border-radius-5px overflow-hidden">
                            <div class="position-relative box-image">
                                <img alt="" data-cfsrc="Uploads/services/<?php echo $row['image'] ?>" style="display:none;visibility:hidden;">
                                <img src="Uploads/services/<?php echo $row['image'] ?>" alt="<?php echo $row['image'] ?>">
                                <div class="box-overlay bg-dark-gray"></div>
                                <a href="services-details.php?url=<?php echo $row['url']; ?>" class="d-flex justify-content-center align-items-center mx-auto icon-box absolute-middle-center z-index-1 w-60px h-60px rounded-circle box-shadow-quadruple-large border border-2 border-color-white"><i class="feather icon-feather-arrow-right text-white icon-extra-medium"></i></a>
                            </div>
                            <div class="p-10 bg-white last-paragraph-no-margin text-center">
                                <a href="services-details.php?url=<?php echo $row['url']; ?>" class="d-inline-block fs-18 alt-font fw-500 text-dark-gray mb-5px"><?php echo $row['title'] ?></a>
                                <p><?php echo $row['short_description'] ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- end fancy text box item -->
                <?php  } ?>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start footer -->
    <?php include('include/footer.php'); ?>
    <!-- end scroll progress -->
    <!-- javascript libraries -->
    <?php include('include/foot.php'); ?>
</body>

<!-- Mirrored from craftohtml.themezaa.com/demo-business-services.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Sep 2024 09:29:40 GMT -->

</html>