<!-- Nav tabs 
==============================================================
                    nav tab togle
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#home">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#menu1">Menu 1</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#menu2">Menu 2</a>
  </li>
</ul>

 Tab panes 
<div class="tab-content">
  <div class="tab-pane container active" id="home">...</div>
  <div class="tab-pane container fade" id="menu1">...</div>
  <div class="tab-pane container fade" id="menu2">...</div>
</div>
==============================================================
-->
<?php 
    include 'init.php';
    include 'header.php';
    ?>
    <div class="container pb-1">        


        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-header bg-danger">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="card" style="width: 18rem;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-center bg-danger mb-1"> <a href="?pos=marketing" class="w-100 text-center" style="color: #fff !important;">Marketing</a> </li>
                        <li class="list-group-item text-center bg-danger mb-1"> <a href="?pos=web-developpement" class="w-100 text-center" style="color: #fff !important;">Web Developpement</a> </li>
                        <li class="list-group-item text-center bg-danger"> <a href="logout.php" class="w-100 text-center" style="color: #fff !important;">Logout</a> </li>
                    </ul>
                </div>
            </div>
        </div>

        <?php if(isset($_GET['pos'])):  //if isset request == pos ?>

            <?php if(isset($_GET['option'])):   //if isset request == option show the course details?>

                <?php if($_GET['pos'] == 'marketing'):  //if request pos == marketing ?>

                    <?php if($_GET['option'] == 'seo'):     //if request pos == marketing && option == SEO show seo details?>
                    
                        <div class="description w-100 mb-5 row">
                            <section class="float-start col-md-6">
                                <img src="<?php echo $img .'seo.jpg'; ?>" alt="" style="width: 100%; height: 100%;">
                            </section>

                            <section class="float-end col-md-6 justify-content-center" style="height: 70vh;border-left: 5px solid #01b7f0;">
                                <div class="about-info justify-content-center mt-4" style="font-size: 2rem;color: #fff;">
                                    <p style="color: #03c2f1;" class="text-center"><span class="title-s">About This Course</span> <span></span></p>
                                    <p style="color: #03c2f1;"><span class="title-s">Title : </span> <span>SEO</span></p>
                                    <p style="color: #03c2f1;"><span class="title-s">Author : </span> <span>Peter Ondy</span></p>
                                    <p style="color: #03c2f1;"><span class="title-s">Field : </span> <span>E-Learning</span></p>
                                    <p style="color: #03c2f1;"><span class="title-s">Certifications : </span> <span> Yes </span></p>
                                    <p style="color: #03c2f1;"><span class="title-s">Tags : </span> <span> SEO </span> <span> |  Marketing </span></p>
                                </div>
                            </section>

                            <section class="col-md-12">
                                <h1 class="text-center mt-5">About This Course</h1>
                                <div class="about text-center mt-5" style="font-size: 2rem;">
                                    pdfkjofkneokfnelkfvn,dlfvkdf,v,jdfvkdpdfkjofkneokfnelkfvn,dlfvkdf,v,jdfvkd
                                    pdfkjofkneokfnelkfvn,dlfvkdf,v,jdfvkdpdfkjofkneokfnelkfvn,dlfvkdf,v,jdfvkd
                                    pdfkjofkneokfnelkfvn,dlfvkdf,v,jdfvkdpdfkjofkneokfnelkfvn,dlfvkdf,v,jdfvkd.
                                </div>
                                <div class="feedback">
                                    <h1 class="text-center mt-5">Clients Feedbacks</h1>
                                    <div class="container">
                                        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                            </div>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active" data-bs-interval="3000">
                                                <img src="<?php echo $img .'men1.jpg'; ?>" class="d-block w-100" alt="" height="700" data-bs-toggle="tooltip" data-bs-placement="top" title="Some representative placeholder content for the third slide.">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5 style="color: #03c2f1;">@ User Name</h5>
                                                </div>
                                                </div>
                                                <div class="carousel-item" data-bs-interval="3000">
                                                <img src="<?php echo $img .'men2.jpg'; ?>" class="d-block w-100" alt="" height="700" data-bs-toggle="tooltip" data-bs-placement="top" title="Some representative placeholder content for the third slide.">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5 style="color: #03c2f1;">@ User Name</h5>
                                                </div>
                                                </div>
                                                <div class="carousel-item" data-bs-interval="3000">
                                                <img src="<?php echo $img .'men3.jpg'; ?>" class="d-block w-100" alt="" height="700" data-bs-toggle="tooltip" data-bs-placement="top" title="Some representative placeholder content for the third slide.">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5 style="color: #03c2f1;">@ User Name</h5>
                                                </div>
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </section> 
                        </div>

                        <div class="text-center">
                            <a href="<?php echo $inc . 'dashboard.php?pos=marketing&option=seo';?>" style="font-size: 2rem;">Start With This Course</a>
                        </div>

                    <?php elseif($_GET['option'] == 'google-ads'):  //if request pos == marketing && option == google ads show seo details?>
                    
                                            
                        <div class="description w-100 mb-5 row">
                            <section class="float-start col-md-6">
                                <img src="<?php echo $img .'googleads.jpg'; ?>" alt="" style="width: 100%; height: 100%;">
                            </section>

                            <section class="float-end col-md-6 justify-content-center" style="height: 70vh;border-left: 5px solid #01b7f0;">
                                <div class="about-info justify-content-center mt-4" style="font-size: 2rem;color: #fff;">
                                    <p style="color: #03c2f1;" class="text-center"><span class="title-s">About This Course</span> <span></span></p>
                                    <p style="color: #03c2f1;"><span class="title-s">Title : </span> <span>Google Ads</span></p>
                                    <p style="color: #03c2f1;"><span class="title-s">Author : </span> <span>Peter Ondy</span></p>
                                    <p style="color: #03c2f1;"><span class="title-s">Field : </span> <span>E-Learning</span></p>
                                    <p style="color: #03c2f1;"><span class="title-s">Certifications : </span> <span> Yes </span></p>
                                    <p style="color: #03c2f1;"><span class="title-s">Tags : </span> <span> Google Ads </span> <span> |  Marketing </span></p>
                                </div>
                            </section>

                            <section class="col-md-12">
                                <h1 class="text-center mt-5">About This Course</h1>
                                <div class="about text-center mt-5" style="font-size: 2rem;">
                                    pdfkjofkneokfnelkfvn,dlfvkdf,v,jdfvkdpdfkjofkneokfnelkfvn,dlfvkdf,v,jdfvkd
                                    pdfkjofkneokfnelkfvn,dlfvkdf,v,jdfvkdpdfkjofkneokfnelkfvn,dlfvkdf,v,jdfvkd
                                    pdfkjofkneokfnelkfvn,dlfvkdf,v,jdfvkdpdfkjofkneokfnelkfvn,dlfvkdf,v,jdfvkd.
                                </div>
                                <div class="feedback">
                                    <h1 class="text-center mt-5">Clients Feedbacks</h1>
                                    <div class="container">
                                        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                            </div>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active" data-bs-interval="3000">
                                                <img src="<?php echo $img .'men1.jpg'; ?>" class="d-block w-100" alt="" height="700" data-bs-toggle="tooltip" data-bs-placement="top" title="Some representative placeholder content for the third slide.">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5 style="color: #03c2f1;">@ User Name</h5>
                                                </div>
                                                </div>
                                                <div class="carousel-item" data-bs-interval="3000">
                                                <img src="<?php echo $img .'men2.jpg'; ?>" class="d-block w-100" alt="" height="700" data-bs-toggle="tooltip" data-bs-placement="top" title="Some representative placeholder content for the third slide.">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5 style="color: #03c2f1;">@ User Name</h5>
                                                </div>
                                                </div>
                                                <div class="carousel-item" data-bs-interval="3000">
                                                <img src="<?php echo $img .'men3.jpg'; ?>" class="d-block w-100" alt="" height="700" data-bs-toggle="tooltip" data-bs-placement="top" title="Some representative placeholder content for the third slide.">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5 style="color: #03c2f1;">@ User Name</h5>
                                                </div>
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>

                        <div class="text-center">
                            <a href="<?php echo $inc . 'dashboard.php?pos=marketing&option=google-ads';?>" style="font-size: 2rem;">Start With This Course</a>
                        </div>


                    <?php elseif($_GET['option'] == 'facebook-ads'):     //if request pos == marketing && option == facebook ads show seo details?>
                    
                                            
                        <div class="description w-100 mb-5 row">
                            <section class="float-start col-md-6">
                                <img src="<?php echo $img .'facebookads.jpg'; ?>" alt="" style="width: 100%; height: 100%;">
                            </section>

                            <section class="float-end col-md-6 justify-content-center" style="height: 70vh;border-left: 5px solid #01b7f0;">
                                <div class="about-info justify-content-center mt-4" style="font-size: 2rem;color: #fff;">
                                    <p style="color: #03c2f1;" class="text-center"><span class="title-s">About This Course</span> <span></span></p>
                                    <p style="color: #03c2f1;"><span class="title-s">Title : </span> <span>Facebook Ads</span></p>
                                    <p style="color: #03c2f1;"><span class="title-s">Author : </span> <span>Peter Ondy</span></p>
                                    <p style="color: #03c2f1;"><span class="title-s">Field : </span> <span>E-Learning</span></p>
                                    <p style="color: #03c2f1;"><span class="title-s">Certifications : </span> <span> Yes </span></p>
                                    <p style="color: #03c2f1;"><span class="title-s">Tags : </span> <span> Facebook Ads </span> <span> |  Marketing </span></p>
                                </div>
                            </section>

                            <section class="col-md-12">
                                <h1 class="text-center mt-5">About This Course</h1>
                                <div class="about text-center mt-5" style="font-size: 2rem;">
                                    pdfkjofkneokfnelkfvn,dlfvkdf,v,jdfvkdpdfkjofkneokfnelkfvn,dlfvkdf,v,jdfvkd
                                    pdfkjofkneokfnelkfvn,dlfvkdf,v,jdfvkdpdfkjofkneokfnelkfvn,dlfvkdf,v,jdfvkd
                                    pdfkjofkneokfnelkfvn,dlfvkdf,v,jdfvkdpdfkjofkneokfnelkfvn,dlfvkdf,v,jdfvkd.
                                </div>
                                <div class="feedback">
                                    <h1 class="text-center mt-5">Clients Feedbacks</h1>
                                    <div class="container">
                                        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                            </div>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active" data-bs-interval="3000">
                                                <img src="<?php echo $img .'men1.jpg'; ?>" class="d-block w-100" alt="" height="700" data-bs-toggle="tooltip" data-bs-placement="top" title="Some representative placeholder content for the third slide.">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5 style="color: #03c2f1;">@ User Name</h5>
                                                </div>
                                                </div>
                                                <div class="carousel-item" data-bs-interval="3000">
                                                <img src="<?php echo $img .'men2.jpg'; ?>" class="d-block w-100" alt="" height="700" data-bs-toggle="tooltip" data-bs-placement="top" title="Some representative placeholder content for the third slide.">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5 style="color: #03c2f1;">@ User Name</h5>
                                                </div>
                                                </div>
                                                <div class="carousel-item" data-bs-interval="3000">
                                                <img src="<?php echo $img .'men3.jpg'; ?>" class="d-block w-100" alt="" height="700" data-bs-toggle="tooltip" data-bs-placement="top" title="Some representative placeholder content for the third slide.">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5 style="color: #03c2f1;">@ User Name</h5>
                                                </div>
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>

                        <div class="text-center">
                            <a href="<?php echo $inc . 'dashboard.php?pos=marketing&option=facebook-ads';?>" style="font-size: 2rem;">Start With This Course</a>
                        </div>


                    <?php else:     //if not isset request option show error message?>

                        <h2 class="text-center alert alert-danger"> Page Not Found <h2>

                    <?php endif;?>

                <?php elseif($_GET['pos'] == 'web-developpement'):?>

                    <?php if($_GET['option'] == 'front-end'):     //if request pos == web-developpement && option == front-end show front-end course details?>
                    
                                            
                                            
                        <div class="description w-100 mb-5 row">
                            <section class="float-start col-md-6">
                                <img src="<?php echo $img .'frontend.jpg'; ?>" alt="" style="width: 100%; height: 100%;">
                            </section>

                            <section class="float-end col-md-6 justify-content-center" style="height: 70vh;border-left: 5px solid #01b7f0;">
                                <div class="about-info justify-content-center mt-4" style="font-size: 2rem;color: #fff;">
                                    <p style="color: #03c2f1;" class="text-center"><span class="title-s">About This Course</span> <span></span></p>
                                    <p style="color: #03c2f1;"><span class="title-s">Title : </span> <span>Front End</span></p>
                                    <p style="color: #03c2f1;"><span class="title-s">Author : </span> <span>Peter Ondy</span></p>
                                    <p style="color: #03c2f1;"><span class="title-s">Field : </span> <span>E-Learning</span></p>
                                    <p style="color: #03c2f1;"><span class="title-s">Certifications : </span> <span> Yes </span></p>
                                    <p style="color: #03c2f1;"><span class="title-s">Tags : </span> <span> Front End </span> <span> |  Web Developpement </span></p>
                                </div>
                            </section>

                            <section class="col-md-12">
                                <h1 class="text-center mt-5">About This Course</h1>
                                <div class="about text-center mt-5" style="font-size: 2rem;">
                                    pdfkjofkneokfnelkfvn,dlfvkdf,v,jdfvkdpdfkjofkneokfnelkfvn,dlfvkdf,v,jdfvkd
                                    pdfkjofkneokfnelkfvn,dlfvkdf,v,jdfvkdpdfkjofkneokfnelkfvn,dlfvkdf,v,jdfvkd
                                    pdfkjofkneokfnelkfvn,dlfvkdf,v,jdfvkdpdfkjofkneokfnelkfvn,dlfvkdf,v,jdfvkd.
                                </div>
                                <div class="feedback">
                                    <h1 class="text-center mt-5">Clients Feedbacks</h1>
                                    <div class="container">
                                        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                            </div>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active" data-bs-interval="3000">
                                                <img src="<?php echo $img .'men1.jpg'; ?>" class="d-block w-100" alt="" height="700" data-bs-toggle="tooltip" data-bs-placement="top" title="Some representative placeholder content for the third slide.">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5 style="color: #03c2f1;">@ User Name</h5>
                                                </div>
                                                </div>
                                                <div class="carousel-item" data-bs-interval="3000">
                                                <img src="<?php echo $img .'men2.jpg'; ?>" class="d-block w-100" alt="" height="700" data-bs-toggle="tooltip" data-bs-placement="top" title="Some representative placeholder content for the third slide.">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5 style="color: #03c2f1;">@ User Name</h5>
                                                </div>
                                                </div>
                                                <div class="carousel-item" data-bs-interval="3000">
                                                <img src="<?php echo $img .'men3.jpg'; ?>" class="d-block w-100" alt="" height="700" data-bs-toggle="tooltip" data-bs-placement="top" title="Some representative placeholder content for the third slide.">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5 style="color: #03c2f1;">@ User Name</h5>
                                                </div>
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>

                        <div class="text-center">
                            <a href="<?php echo $inc . 'dashboard.php?pos=web-developpement&option=front-end';?>" style="font-size: 2rem;">Start With This Course</a>
                        </div>



                    <?php elseif($_GET['option'] == 'back-end'):  //if request pos == web-developpement && option == back-end show back-end course details?>
                                        
                                            
                                            
                        <div class="description w-100 mb-5 row">
                            <section class="float-start col-md-6">
                                <img src="<?php echo $img .'backend.jpg'; ?>" alt="" style="width: 100%; height: 100%;">
                            </section>

                            <section class="float-end col-md-6 justify-content-center" style="height: 70vh;border-left: 5px solid #01b7f0;">
                                <div class="about-info justify-content-center mt-4" style="font-size: 2rem;color: #fff;">
                                    <p style="color: #03c2f1;" class="text-center"><span class="title-s">About This Course</span> <span></span></p>
                                    <p style="color: #03c2f1;"><span class="title-s">Title : </span> <span>Back End</span></p>
                                    <p style="color: #03c2f1;"><span class="title-s">Author : </span> <span>Peter Ondy</span></p>
                                    <p style="color: #03c2f1;"><span class="title-s">Field : </span> <span>E-Learning</span></p>
                                    <p style="color: #03c2f1;"><span class="title-s">Certifications : </span> <span> Yes </span></p>
                                    <p style="color: #03c2f1;"><span class="title-s">Tags : </span> <span> Back End </span> <span> |  Web Developpement </span></p>
                                </div>
                            </section>

                            <section class="col-md-12">
                                <h1 class="text-center mt-5">About This Course</h1>
                                <div class="about text-center mt-5" style="font-size: 2rem;">
                                    pdfkjofkneokfnelkfvn,dlfvkdf,v,jdfvkdpdfkjofkneokfnelkfvn,dlfvkdf,v,jdfvkd
                                    pdfkjofkneokfnelkfvn,dlfvkdf,v,jdfvkdpdfkjofkneokfnelkfvn,dlfvkdf,v,jdfvkd
                                    pdfkjofkneokfnelkfvn,dlfvkdf,v,jdfvkdpdfkjofkneokfnelkfvn,dlfvkdf,v,jdfvkd.
                                </div>
                                <div class="feedback">
                                    <h1 class="text-center mt-5">Clients Feedbacks</h1>
                                    <div class="container">
                                        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                            </div>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active" data-bs-interval="3000">
                                                <img src="<?php echo $img .'men1.jpg'; ?>" class="d-block w-100" alt="" height="700" data-bs-toggle="tooltip" data-bs-placement="top" title="Some representative placeholder content for the third slide.">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5 style="color: #03c2f1;">@ User Name</h5>
                                                </div>
                                                </div>
                                                <div class="carousel-item" data-bs-interval="3000">
                                                <img src="<?php echo $img .'men2.jpg'; ?>" class="d-block w-100" alt="" height="700" data-bs-toggle="tooltip" data-bs-placement="top" title="Some representative placeholder content for the third slide.">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5 style="color: #03c2f1;">@ User Name</h5>
                                                </div>
                                                </div>
                                                <div class="carousel-item" data-bs-interval="3000">
                                                <img src="<?php echo $img .'men3.jpg'; ?>" class="d-block w-100" alt="" height="700" data-bs-toggle="tooltip" data-bs-placement="top" title="Some representative placeholder content for the third slide.">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5 style="color: #03c2f1;">@ User Name</h5>
                                                </div>
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>

                        <div class="text-center">
                            <a href="<?php echo $inc . 'dashboard.php?pos=web-developpement&option=back-end';?>" style="font-size: 2rem;">Start With This Course</a>
                        </div>


                    <?php elseif($_GET['option'] == 'other'):     //if request pos == web-developpement && option == other show other courses details details?>
                                                                
                                            
                        <div class="description w-100 mb-5 row">
                            <section class="float-start col-md-6">
                                <img src="<?php echo $img .'framworks.jpg'; ?>" alt="" style="width: 100%; height: 100%;">
                            </section>

                            <section class="float-end col-md-6 justify-content-center" style="height: 70vh;border-left: 5px solid #01b7f0;">
                                <div class="about-info justify-content-center mt-4" style="font-size: 2rem;color: #fff;">
                                    <p style="color: #03c2f1;" class="text-center"><span class="title-s">About This Course</span> <span></span></p>
                                    <p style="color: #03c2f1;"><span class="title-s">Title : </span> <span>Other Framworks</span></p>
                                    <p style="color: #03c2f1;"><span class="title-s">Author : </span> <span>Peter Ondy</span></p>
                                    <p style="color: #03c2f1;"><span class="title-s">Field : </span> <span>E-Learning</span></p>
                                    <p style="color: #03c2f1;"><span class="title-s">Certifications : </span> <span> Yes </span></p>
                                    <p style="color: #03c2f1;"><span class="title-s">Tags : </span> <span> Other Framworks </span> <span> |  Web Developpement </span></p>
                                </div>
                            </section>

                            <section class="col-md-12">
                                <h1 class="text-center mt-5">About This Course</h1>
                                <div class="about text-center mt-5" style="font-size: 2rem;">
                                    pdfkjofkneokfnelkfvn,dlfvkdf,v,jdfvkdpdfkjofkneokfnelkfvn,dlfvkdf,v,jdfvkd
                                    pdfkjofkneokfnelkfvn,dlfvkdf,v,jdfvkdpdfkjofkneokfnelkfvn,dlfvkdf,v,jdfvkd
                                    pdfkjofkneokfnelkfvn,dlfvkdf,v,jdfvkdpdfkjofkneokfnelkfvn,dlfvkdf,v,jdfvkd.
                                </div>
                                <div class="feedback">
                                    <h1 class="text-center mt-5">Clients Feedbacks</h1>
                                    <div class="container">
                                        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                            <div class="carousel-indicators">
                                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                            </div>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active" data-bs-interval="3000">
                                                <img src="<?php echo $img .'men1.jpg'; ?>" class="d-block w-100" alt="" height="700" data-bs-toggle="tooltip" data-bs-placement="top" title="Some representative placeholder content for the third slide.">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5 style="color: #03c2f1;">@ User Name</h5>
                                                </div>
                                                </div>
                                                <div class="carousel-item" data-bs-interval="3000">
                                                <img src="<?php echo $img .'men2.jpg'; ?>" class="d-block w-100" alt="" height="700" data-bs-toggle="tooltip" data-bs-placement="top" title="Some representative placeholder content for the third slide.">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5 style="color: #03c2f1;">@ User Name</h5>
                                                </div>
                                                </div>
                                                <div class="carousel-item" data-bs-interval="3000">
                                                <img src="<?php echo $img .'men3.jpg'; ?>" class="d-block w-100" alt="" height="700" data-bs-toggle="tooltip" data-bs-placement="top" title="Some representative placeholder content for the third slide.">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5 style="color: #03c2f1;">@ User Name</h5>
                                                </div>
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>

                        <div class="text-center">
                            <a href="<?php echo $inc . 'dashboard.php?pos=web-developpement&option=other';?>" style="font-size: 2rem;">Start With This Course</a>
                        </div>

                    <?php else:     //if not isset request option show error message?>

                        <h2 class="text-center alert alert-danger"> Page Not Found <h2>

                    <?php endif;?>

                <?php else:?>
                <?php endif;?>

            <?php else:    //if not isset request == option show list of courses in pos request?>

                <?php if($_GET['pos'] == 'marketing'):?>
                    <div class="content">
                        <!--merketing-->
                        <div class="merketing">
                            <h3 class="mt-3 mb-3 text-center color-w">1- Marketing</h3>

                            <div class="card-group">
                                <div class="card mr-1">
                                    <img class="card-img-top" src="<?php echo $img .'seo.jpg'; ?>" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">SEO</h5>
                                        <p class="card-text">On this course you will to learn SEO basics and you can get certification .</p>
                                        <a href="front-page.php?pos=marketing&option=seo" class="btn btn-primary">Find out more</a>
                                    </div>
                                </div>
                                <div class="card mr-1">
                                    <img class="card-img-top" src="<?php echo $img .'googleads.jpg'; ?>" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Google Ads</h5>
                                        <p class="card-text">On this course you will to learn Google Ads basics and you can get certification .</p>
                                        <a href="front-page.php?pos=marketing&option=google-ads" class="btn btn-primary">Find out more</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="<?php echo $img .'facebookads.jpg'; ?>" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Facebook Ads</h5>
                                        <p class="card-text">On this course you will to learn Facebook Ads basics for your business, 
                                            and you can get certification .</p>
                                        <a href="front-page.php?pos=marketing&option=facebook-ads" class="btn btn-primary">Find out more</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                <?php elseif($_GET['pos'] == 'web-developpement'):?>
                    <div class="content">
                        <!--web-developemen-->
                        <div class="web-developement">
                            <h3 class="mt-3 mb-3 text-center color-w">2- Web Develppement</h3>

                            <div class="card-group">
                                <div class="card mr-1">
                                    <img class="card-img-top" src="<?php echo $img .'frontend.jpg'; ?>" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Front End</h5>
                                        <p class="card-text">On this course you can learn front end developpement techniques (HTML, CSS, JS, JQuery, Bootstrap, React, Angular ...).</p>
                                        <a href="front-page.php?pos=web-developpement&option=front-end" class="btn btn-primary">Find out more</a>
                                    </div>
                                </div>
                                <div class="card mr-1">
                                    <img class="card-img-top" src="<?php echo $img .'backend.jpg'; ?>" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Back End</h5>
                                        <p class="card-text">On this course you can learn back end developpement techniques (PHP, Mysql, NodeJS, MongoDB...).</p>
                                        <a href="front-page.php?pos=web-developpement&option=back-end" class="btn btn-primary">Find out more</a>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="<?php echo $img .'framworks.jpg'; ?>" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Other Techniques</h5>
                                        <p class="card-text">On this course you can learn front end developpement techniques (HTML, CSS, JS, JQuery, Bootstrap, React, Angular ...).</p>
                                        <a href="front-page.php?pos=web-developpement&option=other" class="btn btn-primary">Find out more</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                <?php else:?>
                    <h2 class="text-center alert alert-danger"> Page Not Found <h2>
                <?php endif;?>

            <?php endif;?>
        <?php else:?>
            <h2 class="text-center alert alert-danger"> Page Not Found <h2>
        <?php endif;?>

    </div>

    <?php
    include 'sidebar.php';
?>
<?php
    include 'footer.php';
?>

