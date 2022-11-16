<?php echo $this->extend('Layout/site'); ?>

<!-- Renderizar título -->
<?php echo $this->section('titulo'); ?>
<?php echo $titulo; ?>
<?php $this->endSection(); ?>


<!-- Custom styles -->
<?php echo $this->section('estilos'); ?>
<!-- Styles content here -->
<?php $this->endSection(); ?>

<!-- Custom header -->
<?php echo $this->section('header'); ?>
<?php $this->endSection(); ?>

<!-- Custom page content -->
<?php echo $this->section('conteudo'); ?>
<div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="page-banner ovbl-dark" style="background-image:url(<?php echo site_url('src/') ?>assets/images/banner/banner2.jpg);">
        <div class="container">
            <div class="page-banner-entry pt-5">
                <br><br>
                <h1 class="text-white mt-5"><?php echo $titulo; ?></h1>
                <h3 class="text-white"><?php echo $subtitulo; ?></h3>
            </div>
        </div>
    </div>
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="/"><i class="fa fa-home"></i> Home</a></li>
                <li><?php echo $titulo; ?></li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb row END -->
    <!-- inner page banner END -->

    <div class="content-block">
        <!-- About Us -->
        <div class="section-area section-sp1">
            <div class="container">
                <div class="row d-flex flex-row-reverse">
                    <div class="col-lg-3 col-md-4 col-sm-12 m-b30">
                        <div class="course-detail-bx">
                            <div class="course-price">
                                <!-- <del>R$ 300,00</del> -->
                                <h4 class="price">R$ 280,00</h4>
                            </div>
                            <div class="course-buy-now text-center">
                                <a href="#" class="btn radius-xl text-uppercase">Matricule-se já</a>
                            </div>
                            <div class="teacher-bx">
                                <div class="teacher-info">
                                    <div class="teacher-thumb">
                                        <img src="<?php echo site_url('src/') ?>assets/images/testimonials/pic1.jpg" alt="" />
                                    </div>
                                    <div class="teacher-name">
                                        <h5>Prª Eurides Obalski</h5>
                                        <span>Diretora</span>
                                    </div>
                                </div>
                                <div class="teacher-info">
                                    <div class="teacher-thumb">
                                        <img src="<?php echo site_url('src/') ?>assets/images/testimonials/pic3.jpg" alt="" />
                                    </div>
                                    <div class="teacher-name">
                                        <h5>Pr Sergio Filho</h5>
                                        <span>Coordenador</span>
                                    </div>
                                </div>
                            </div>
                            <div class="cours-more-info">
                                <div class="review">
                                    <span><i class="fa fa-bookmark"></i></span>
                                    <ul class="cours-star">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="price categories">
                                    <span>Categories</span>
                                    <h5 class="text-primary">Frontend</h5>
                                </div>
                            </div>
                            <div class="course-info-list scroll-page">
                                <ul class="navbar">
                                    <li><a class="nav-link" href="#overview"><i class="ti-zip"></i>Overview</a></li>
                                    <li><a class="nav-link" href="#curriculum"><i class="ti-bookmark-alt"></i>Curriculum</a></li>
                                    <li><a class="nav-link" href="#instructor"><i class="ti-user"></i>Instructor</a></li>
                                    <li><a class="nav-link" href="#reviews"><i class="ti-comments"></i>Reviews</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-9 col-md-8 col-sm-12">
                        <div class="courses-post">
                            <div class="ttr-post-media media-effect">
                                <a href="#"><img src="<?php echo site_url('src/') ?>assets/images/blog/default/thum1.jpg" alt=""></a>
                            </div>
                            <div class="ttr-post-info">
                                <div class="ttr-post-title ">
                                    <h2 class="post-title">Nvidia and UE4 Technologies Practice</h2>
                                </div>
                                <div class="ttr-post-text">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                            </div>
                        </div>
                        <div class="courese-overview" id="overview">
                            <h4>Overview</h4>
                            <div class="row">
                                <div class="col-md-12 col-lg-4">
                                    <ul class="course-features">
                                        <li><i class="ti-book"></i> <span class="label">Lectures</span> <span class="value">8</span></li>
                                        <li><i class="ti-help-alt"></i> <span class="label">Quizzes</span> <span class="value">1</span></li>
                                        <li><i class="ti-time"></i> <span class="label">Duration</span> <span class="value">60 hours</span></li>
                                        <li><i class="ti-stats-up"></i> <span class="label">Skill level</span> <span class="value">Beginner</span></li>
                                        <li><i class="ti-smallcap"></i> <span class="label">Language</span> <span class="value">English</span></li>
                                        <li><i class="ti-user"></i> <span class="label">Students</span> <span class="value">32</span></li>
                                        <li><i class="ti-check-box"></i> <span class="label">Assessments</span> <span class="value">Yes</span></li>
                                    </ul>
                                </div>
                                <div class="col-md-12 col-lg-8">
                                    <h5 class="m-b5">Course Description</h5>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    <h5 class="m-b5">Certification</h5>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    <h5 class="m-b5">Learning Outcomes</h5>
                                    <ul class="list-checked primary">
                                        <li>Over 37 lectures and 55.5 hours of content!</li>
                                        <li>LIVE PROJECT End to End Software Testing Training Included.</li>
                                        <li>Learn Software Testing and Automation basics from a professional trainer from your own desk.</li>
                                        <li>Information packed practical training starting from basics to advanced testing techniques.</li>
                                        <li>Best suitable for beginners to advanced level users and who learn faster when demonstrated.</li>
                                        <li>Course content designed by considering current software testing technology and the job market.</li>
                                        <li>Practical assignments at the end of every session.</li>
                                        <li>Practical learning experience with live project work and examples.cv</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="m-b30" id="curriculum">
                            <h4>Curriculum</h4>
                            <ul class="curriculum-list">
                                <li>
                                    <h5>First Level</h5>
                                    <ul>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>Lesson 1.</span> Introduction to UI Design
                                            </div>
                                            <span>120 minutes</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>Lesson 2.</span> User Research and Design
                                            </div>
                                            <span>60 minutes</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>Lesson 3.</span> Evaluating User Interfaces Part 1
                                            </div>
                                            <span>85 minutes</span>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <h5>Second Level</h5>
                                    <ul>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>Lesson 1.</span> Prototyping and Design
                                            </div>
                                            <span>110 minutes</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>Lesson 2.</span> UI Design Capstone
                                            </div>
                                            <span>120 minutes</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>Lesson 3.</span> Evaluating User Interfaces Part 2
                                            </div>
                                            <span>120 minutes</span>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <h5>Final</h5>
                                    <ul>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>Part 1.</span> Final Test
                                            </div>
                                            <span>120 minutes</span>
                                        </li>
                                        <li>
                                            <div class="curriculum-list-box">
                                                <span>Part 2.</span> Online Test
                                            </div>
                                            <span>120 minutes</span>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="" id="instructor">
                            <h4>Instructor</h4>
                            <div class="instructor-bx">
                                <div class="instructor-author">
                                    <img src="<?php echo site_url('src/') ?>assets/images/testimonials/pic1.jpg" alt="">
                                </div>
                                <div class="instructor-info">
                                    <h6>Eurides Obalski </h6>
                                    <span>Professora</span>
                                    <ul class="list-inline m-tb10">
                                        <li><a href="#" class="btn sharp-sm facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" class="btn sharp-sm twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="btn sharp-sm linkedin"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#" class="btn sharp-sm google-plus"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                    <p class="m-b0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                                </div>
                            </div>
                            <div class="instructor-bx">
                                <div class="instructor-author">
                                    <img src="<?php echo site_url('src/') ?>assets/images/testimonials/pic3.jpg" alt="">
                                </div>
                                <div class="instructor-info">
                                    <h6>Sergio Filho </h6>
                                    <span>Professor</span>
                                    <ul class="list-inline m-tb10">
                                        <li><a href="#" class="btn sharp-sm facebook"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" class="btn sharp-sm twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" class="btn sharp-sm linkedin"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#" class="btn sharp-sm google-plus"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                    <p class="m-b0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                                </div>
                            </div>
                        </div>
                        <div class="" id="reviews">
                            <h4>Reviews</h4>

                            <div class="review-bx">
                                <div class="all-review">
                                    <h2 class="rating-type">3</h2>
                                    <ul class="cours-star">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span>3 Rating</span>
                                </div>
                                <div class="review-bar">
                                    <div class="bar-bx">
                                        <div class="side">
                                            <div>5 star</div>
                                        </div>
                                        <div class="middle">
                                            <div class="bar-container">
                                                <div class="bar-5" style="width:90%;"></div>
                                            </div>
                                        </div>
                                        <div class="side right">
                                            <div>150</div>
                                        </div>
                                    </div>
                                    <div class="bar-bx">
                                        <div class="side">
                                            <div>4 star</div>
                                        </div>
                                        <div class="middle">
                                            <div class="bar-container">
                                                <div class="bar-5" style="width:70%;"></div>
                                            </div>
                                        </div>
                                        <div class="side right">
                                            <div>140</div>
                                        </div>
                                    </div>
                                    <div class="bar-bx">
                                        <div class="side">
                                            <div>3 star</div>
                                        </div>
                                        <div class="middle">
                                            <div class="bar-container">
                                                <div class="bar-5" style="width:50%;"></div>
                                            </div>
                                        </div>
                                        <div class="side right">
                                            <div>120</div>
                                        </div>
                                    </div>
                                    <div class="bar-bx">
                                        <div class="side">
                                            <div>2 star</div>
                                        </div>
                                        <div class="middle">
                                            <div class="bar-container">
                                                <div class="bar-5" style="width:40%;"></div>
                                            </div>
                                        </div>
                                        <div class="side right">
                                            <div>110</div>
                                        </div>
                                    </div>
                                    <div class="bar-bx">
                                        <div class="side">
                                            <div>1 star</div>
                                        </div>
                                        <div class="middle">
                                            <div class="bar-container">
                                                <div class="bar-5" style="width:20%;"></div>
                                            </div>
                                        </div>
                                        <div class="side right">
                                            <div>80</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- contact area END -->

</div>
<?php $this->endSection(); ?>


<!-- Custom scripts -->
<?php echo $this->section('scripts'); ?>
<!-- Scripts content here -->
<?php $this->endSection(); ?>