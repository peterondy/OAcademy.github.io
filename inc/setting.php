<?php include '../init.php';?>
<?php include 'header.php';?>

    <?php if(isset($_GET['id'])):$id = $_GET['id'];endif;?>

    <?php 
        $stmt = $con->prepare("SELECT email,userName FROM oacademy WHERE userID = ?");
        $stmt->execute(array($id));
        $row = $stmt->fetch();
    ?>


    <div class="container">

        <form class="login w-100" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">

            <h4 class="text-center label">Settings Page</h4>

            <span style="margin: 2rem 47%;" t><i class="fas fa-sign-in-alt" style="font-size: 4rem;"></i></span>

            <?php //echo $err;?>

            <input style="width: 50%; margin: 1rem 25%;padding: .75rem 0;" type="text" name="email" placeholder="Email" value="<?php echo $row['email'];?>">

            <input style="width: 50%; margin: 1rem 25%;padding: .75rem 0;" t type="text" name="user" placeholder="User Name" value="<?php echo $row['userName'];?>">
            
            <input style="width: 50%; margin: 1rem 25%;padding: .75rem 0;" t type="password" name="pass" placeholder="Password">

            <input style="width: 50%; margin: 1rem 25%;padding: .75rem 0;" t type="submit" class="btn btn-primary btn-block" id="GO" value="GO"> 

        </form>
        
    </div>

<?php include 'sidebar.php';?>
<?php include 'footer.php';?>