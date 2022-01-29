<?php 
    include 'init.php';
    include 'header.php';
    ?>
    <div class="container pb-1">

        <div class="description w-100 mb-5 row" style="height: 70vh;background-color: #51716c;">
            <section class="float-start col-md-6" style="background-image: url('<?php echo $img .'Elearning.jpg'; ?>');
                    background-position: center;background-repeat: non-repeat;background-size: cover;">

            </section>

            <section class="float-end col-md-6 justify-content-center" style="height: 70vh;border-left: 5px solid #01b7f0;">
                    <div class="about-info justify-content-center mt-4" style="font-size: 2rem;color: #fff;">
                        <p style="color: #03c2f1;"><span class="title-s">Name: </span> <span>OAcademy</span></p>
                        <p style="color: #03c2f1;"><span class="title-s">Author: </span> <span>Peter Ondy</span></p>
                        <p style="color: #03c2f1;"><span class="title-s">Field: </span> <span>E-Learning</span></p>
                        <p style="color: #03c2f1;"><span class="title-s">Email: </span> <span>peter@freelancer@gmail.com</span></p>
                        <p style="color: #03c2f1;"><span class="title-s">LinkedIn: </span> <span>linkedin.com/peterondy</span></p>
                        <p style="color: #03c2f1;"><span class="title-s">Youtube: </span> <span>youtube.com/peterondy</span></p>
                        <p style="color: #03c2f1;"><span class="title-s">Github: </span> <span>github.com/peterondy</span></p>
                        <p style="color: #03c2f1;"><span class="title-s">Indeed: </span> <span>indeed.com/peterondy</span></p>
                      </div>
            </section>
        </div>
        

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
             <!--embassies-->
            <div class="embassies">
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


 
            <!--more link-->
            <div class="more justify-content-center text-center mt-4 mb-3">
                <p class="more-p mb-3">You can view more of services online</p>
                <a href="front-page.php?pos=marketing" class="more-link">view more</a>
            </div>
        </div>
    </div>

    <?php
    include 'sidebar.php';
?>
<?php
    include 'footer.php';
?>

