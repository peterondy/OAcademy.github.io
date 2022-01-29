<?php include 'header.php';?>

    <?php if(isset($_GET['id'])):$id = $_GET['id'];endif;?>

                                            <!--off canvas strat-->

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header bg-danger">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="card" style="width: 18rem;">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item text-center bg-danger"> <a href="../index.php" class="w-100 text-center" style="color: #fff !important;">See All Courses</a> </li>
                    <li class="list-group-item text-center bg-danger mt-1"> <a href="setting.php?id=<?php echo $id;?>" class="w-100 text-center" style="color: #fff !important;">Settings</a> </li>
                    <li class="list-group-item text-center bg-danger mt-1"> <a href="../logout.php" class="w-100 text-center" style="color: #fff !important;">Logout</a> </li>
                </ul>
            </div>
        </div>
    </div>

                                            <!--off canvas strat-->

    <div class="container">
        
        <div class="description w-100 mb-5 row">
                
            <?php if(isset($_GET['pos'])):  //if isset request == pos ?>

                <?php if(isset($_GET['option'])):   //if isset request == option show the course details?>

                    <?php if($_GET['pos'] == 'marketing'):  //if request pos == marketing ?>

                        <?php if($_GET['option'] == 'seo'):     //if request pos == marketing && option == SEO show seo details?>
                            <section class="float-start col-md-12 mb-5">
                                <img src="../<?php echo $img .'seo.jpg'; ?>" alt="" style="width: 100%; height: 100%;">
                            </section>
                            <?php $option = 'seo';?>
                        <?php elseif($_GET['option'] == 'google-ads'):  //if request pos == marketing && option == google ads show seo details?>
                            <section class="float-start col-md-12 mb-5">
                                <img src="../<?php echo $img .'googleads.jpg'; ?>" alt="" style="width: 100%; height: 100%;">
                            </section>
                            <?php $option = 'googleads';?>
                        <?php elseif($_GET['option'] == 'facebook-ads'):     //if request pos == marketing && option == facebook ads show seo details?>
                            <section class="float-start col-md-12 mb-5">
                                <img src="../<?php echo $img .'facebookads.jpg'; ?>" alt="" style="width: 100%; height: 100%;">
                            </section>
                            <?php $option = 'facebookads';?>
                        <?php else:     //if not isset request option show error message?>

                            <h2 class="text-center alert alert-danger"> Page Not Found <h2>

                        <?php endif;?>

                    <?php elseif($_GET['pos'] == 'web-developpement'):?>

                        <?php if($_GET['option'] == 'front-end'):     //if request pos == web-developpement && option == front-end show front-end course details?>
                            <section class="float-start col-md-12 mb-5">
                                <img src="../<?php echo $img .'frontend.jpg'; ?>" alt="" style="width: 100%; height: 100%;">
                            </section>
                            <?php $option = 'frontend';?>
                        <?php elseif($_GET['option'] == 'back-end'):  //if request pos == web-developpement && option == back-end show back-end course details?>
                            <section class="float-start col-md-12 mb-5">
                                <img src="../<?php echo $img .'backend.jpg'; ?>" alt="" style="width: 100%; height: 100%;">
                            </section>
                            <?php $option = 'backend';?>
                        <?php elseif($_GET['option'] == 'other'):     //if request pos == web-developpement && option == other show other courses details details?>
                            <section class="float-start col-md-12 mb-5">
                                <img src="../<?php echo $img .'framworks.jpg'; ?>" alt="" style="width: 100%; height: 100%;">
                            </section>
                            <?php $option = 'framworks';?>
                        <?php else:     //if not isset request option show error message?>

                            <h2 class="text-center alert alert-danger"> Page Not Found <h2>

                        <?php endif;?>

                    <?php else:?>
                        <h2 class="text-center alert alert-danger"> Page Not Found <h2>
                    <?php endif;?>

                <?php else:    //if not isset request == option show list of courses in pos request?>

                    <h2 class="text-center alert alert-danger"> Page Not Found <h2>

                <?php endif;?>
            <?php else:?>
                <h2 class="text-center alert alert-danger"> Page Not Found <h2>
            <?php endif;?>



            <section class="nav-scroll mt-5">
                <div class="card">
                    <ul class="list-group list-group-flush">

                        <li class="list-group-item list-nav-scroll text-center bg-danger" style="border-bottom: 1px solid #000;height: 100px;"> 
                            <img src="../<?php echo $img . $option .'.jpg'; ?>" alt="" style="width: 100px; height: 80px;" class="float-start"> 
                            <a href="&v=1" class="w-100 text-center" style="color: #fff !important;">Video 2</a> 
                        </li>

                        <li class="list-group-item list-nav-scroll text-center bg-danger" style="border-bottom: 1px solid #000;height: 100px;"> 
                            <img src="../<?php echo $img . $option .'.jpg'; ?>" alt="" style="width: 100px; height: 80px;" class="float-start"> 
                            <a href="&v=1" class="w-100 text-center" style="color: #fff !important;">Video 2</a> 
                        </li>

                        <li class="list-group-item list-nav-scroll text-center bg-danger" style="border-bottom: 1px solid #000;height: 100px;"> 
                            <img src="../<?php echo $img . $option .'.jpg'; ?>" alt="" style="width: 100px; height: 80px;" class="float-start"> 
                            <a href="&v=1" class="w-100 text-center" style="color: #fff !important;">Video 3</a> 
                        </li>

                        <li class="list-group-item list-nav-scroll text-center bg-danger" style="border-bottom: 1px solid #000;height: 100px;"> 
                            <img src="../<?php echo $img . $option .'.jpg'; ?>" alt="" style="width: 100px; height: 80px;" class="float-start"> 
                            <a href="&v=1" class="w-100 text-center" style="color: #fff !important;">Video 4</a> 
                        </li>

                        <li class="list-group-item list-nav-scroll text-center bg-danger" style="border-bottom: 1px solid #000;height: 100px;"> 
                            <img src="../<?php echo $img . $option .'.jpg'; ?>" alt="" style="width: 100px; height: 80px;" class="float-start"> 
                            <a href="&v=1" class="w-100 text-center" style="color: #fff !important;">Video 5</a> 
                        </li>
                    </ul>
                </div>
            </section>

        </div>

    </div>

<?php include 'sidebar.php';?>
<?php include 'footer.php';?>
