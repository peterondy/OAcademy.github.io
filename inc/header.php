<?php include '../init.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <link rel="stylesheet" href="<?php echo '../' . $css . 'main.css'; ?>">
    <link rel="stylesheet" href="<?php echo '../' . $css . 'style.css'; ?>">

    <title>OAcademy</title>
</head>
<style>
  .list-nav-scroll{
    cursor: pointer;
  }
  .list-nav-scroll:hover{
    background-color: #ab464f !important;
  }
</style>
<body>
    
<header class="row">
  
  <nav class="navbar float-start navbar-expand-lg navbar-light bg-light col-md-12 pt-2">
    <div class="container-fluid col-md-12 col-sm-12">
      <a href="index.php" class="float-start fs-2 mt-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Go To Dashboard">OAcademy</a>
      <button class="btn btn-primary mb-4 mt-4" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
          <i class="bi bi-caret-right-fill" style="font-size: 1rem !important;"></i>
      </button>
    </div>
  </nav>      

</header>