<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Asset\alumni\dashStyle.css">
    <title>Alumni</title>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary bg-warning fixed-stop">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Alumni</a>
   
      <form class="d-flex ms-auto" role="search" >
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
        <div class="icon ms-4">
            <h5>
            <i class="fa-solid fa-envelope me-3" data-toggle="tooltip" title="Surat Masuk"></i>
            <i class="fa-solid fa-bell me-3" data-toggle="tooltip" title="Notifikasi"></i>
            <i class="fa-solid fa-right-from-bracket me-3" data-toggle="tooltip" title="Log Out"></i>
            </h5>
        </div>
      
    </div>
  </div>
</nav>

<div class="row no-gutters">
    <input type="checkbox" id="check">
    <label for="check">
        <div class="fitur bg-dark">
           
            <i class="fas fa-bars bg-dark" id="btn"></i>
               
        </div>
    </label>
    <div class="col-md-2  bg-dark pr-3 pt-4 pt-20">
    <ul class="nav flex-column ms-5 mb-5 ">
  <li class="nav-item  ">
    <a class="nav-link active text-white pt-10" aria-current="page" href="#"><i class="fa-solid fa-gauge me-2"></i>Dashboard</a><hr class="bg-secondary">
  </li>
  <li class="nav-item ">
    <a class="nav-link text-white" href="<?= base_url('contact') ?>">Noname</a><hr class="bg-secondary">
  </li>
  <li class="nav-item ">
    <a class="nav-link text-white" href="#">Noname</a><hr class="bg-secondary">
  </li>
  <li class="nav-item">
    <a class="nav-link text-white" href="#">Noname</a><hr class="bg-secondary">
  </li>
  <li class="nav-item ">
    <a class="nav-link text-white" href="#">Noname</a><hr class="bg-secondary">
  </li>
  
    
  
</ul>
    </div>
    <div class="col-md-10">

    </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/ceefbd64d0.js" crossorigin="anonymous"></script>
<script src="Asset\alumni\dashJS.js"></script>
</body>
</html>