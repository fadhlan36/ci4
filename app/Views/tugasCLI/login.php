<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
   
    <link rel="stylesheet"  type="text/css" href="<?= base_url('Asset\alumniCSSJS\login.css');?>">
    <title>Login</title>
</head>
<body>

<div class="container">

<form action="" method="" class="login-email">
<h2>Login</h2>
    <?php if(session()->getFlashdata('error')){?>
        <div class="alert alert-danger">
            <?php echo session()->getFlashdata('error')?>
        </div>
        <?php }?>
    <div class="input-grup">
        <label for="inputUsername" class="form-label">Username</label>
        <input type="text" class="form-control" name="member_username" value="<?php echo session()
        ->getFlashdata('member_username')?>" id="inputUsername" placeholder="Username">
        <div class="invalid-feedback">
            
        </div>

    </div>
    <div class="input-grup">
        <label for="inputPassword"></label>
        <input type="text" class="" name="member_password" id="inputPassword" placeholder="password">
        <div class="invalid-feedback">
            
        </div>

    </div>
    <div class="input-grup">
        
        <button type="submit" name="login" class="btn" value="LOGIN">Login</button>
       
    </div>
    <br>
    <p class="login-register-text">Tidak punya Akun? <a href="Sign In">Sign In</a></p>
</form>

</div>
<svg class="dekor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="0.6" 
d="M0,128L17.1,138.7C34.3,149,69,171,103,186.7C137.1,203,171,213,206,218.7C240,224,274,224,309,202.7C342.9,
181,377,139,411,138.7C445.7,139,480,181,514,218.7C548.6,256,583,288,617,304C651.4,320,686,320,720,304C754.3,288,789,256,823,250.7C857.1,245,891,267,926,282.7C960,299,994,309,1029,277.3C1062.9,245,1097,171,1131,133.3C1165.7,96,1200,96,1234,85.3C1268.6,75,1303,53,1337,42.7C1371.4,32,1406,32,1423,32L1440,32L1440,320L1422.9,320C1405.7,320,1371,320,1337,320C1302.9,320,1269,320,1234,320C1200,320,1166,320,1131,320C1097.1,320,1063,320,1029,320C994.3,320,960,320,926,320C891.4,320,857,320,823,320C788.6,320,754,320,720,320C685.7,320,651,320,617,320C582.9,320,549,320,514,320C480,320,446,320,411,320C377.1,320,343,320,309,320C274.3,320,240,
320,206,320C171.4,320,137,320,103,320C68.6,320,34,320,17,320L0,320Z"></path></svg>





<script src="https://kit.fontawesome.com/ceefbd64d0.js" crossorigin="anonymous"></script>
<script src="Asset\alumniCSSJS\scrip.js"></script>
</body>
</html>