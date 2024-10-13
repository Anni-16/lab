<!doctype html>
<html class="no-js" lang="en">
    
<!-- Mirrored from craftohtml.themezaa.com/demo-business-blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Sep 2024 09:29:44 GMT -->
<?php include('include/head.php');?>
    <body data-mobile-nav-style="classic">  
        <!-- start header -->
        <?php include('include/header.php');?>
        <!-- end header --> 
        <!-- start page title -->
        <section class="page-title-big-typography bg-dark-gray ipad-top-space-margin" data-parallax-background-ratio="0.5" style="background-image: url(image/blog.jpg)">
            <div class="opacity-extra-medium bg-dark-slate-blue"></div>
            <div class="container">
                <div class="row align-items-center justify-content-center extra-small-screen">
                    <div class="col-12 position-relative text-center page-title-extra-large">
                        <h1 class="m-auto text-white text-shadow-double-large fw-500 ls-minus-3px xs-ls-minus-2px" data-anime='{ "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>BLOGS</h1>
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
        <section id="down-section">
            <div class="container">  
                <div class="row">
                    <div class="col-12 px-0">
                        <ul class="blog-classic blog-wrapper grid-loading grid grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-double-extra-large" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                            <li class="grid-sizer"></li>
                            <?php
                            $sql = "select * from blogs";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <!-- start blog item -->
                            <li class="grid-item">
                                <div class="card bg-transparent border-0 h-100">
                                    <div class="blog-image position-relative overflow-hidden border-radius-4px">
                                        <a href="blog-details.php?blog_url=<?php echo $row['blog_url'] ?>">
                                            <img alt="" data-cfsrc="Uploads/blogs/<?php echo $row['image'] ?>" style="display:none;visibility:hidden;">
                                            <img src="Uploads/blogs/<?php echo $row['image'] ?>" alt=""></a>
                                    </div>
                                    <div class="card-body px-0 pt-30px pb-30px xs-pb-15px last-paragraph-no-margin">
                                        <span class="fs-14 text-uppercase"><a href="blog-details.php?blog_url=<?php echo $row['blog_url'] ?>" class="text-dark-gray fw-600 categories-text">Blog</a><a href="#" class="blog-date"><?php 
                                        $date = $row['createdAt'];
                                        $date = date('d M Y', strtotime($date));
                                        echo $date;
                                         ?></a></span>
                                        <a href="blog-details.php?blog_url=<?php echo $row['blog_url'] ?>" class="card-title mb-15px fw-500 fs-18 lh-30 text-dark-gray d-inline-block"><?php echo $row['title'] ?></a>
                                        <p class="w-95 sm-w-100"><?php echo $row['short_description'] ?></p>
                                    </div>
                                </div>
                            </li>
                            <!-- end blog item --> 
                            <?php  } ?>
                        </ul>
                    </div>
                </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start footer -->
        <?php include('include/footer.php');?>
        <!-- end scroll progress -->
        <!-- javascript libraries -->
        <?php include('include/foot.php');?>
    </body>

<!-- Mirrored from craftohtml.themezaa.com/demo-business-blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 21 Sep 2024 09:29:45 GMT -->
</html>