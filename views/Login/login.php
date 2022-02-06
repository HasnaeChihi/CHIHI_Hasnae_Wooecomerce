<?php include 'views/includes/header1.php';
?>

<?php
require __DIR__ . '/../../controllers/LoginController.php';


if(isset($_POST["submit"]))
{
    $login=new LoginController();
    $login->auth();
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Baloo+Bhaijaan">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lemonada">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
</head>


<body class="bg-gradient-primary" style=" background: linear-gradient(to bottom, #f0f8ff 40%, #000000 100%);height:800px;">
    <div class="container">
        <div class="row justify-content-center">
            
            <div class=" col-xl-10">
                <div class=" shadow-lg my-5">
                    <div class="card-body p-0">
                        <div >
                            
                            <div >
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-4" style="font-family: 'Baloo Bhaijaan', cursive;">WELCOME to VenteHasnae !</h4>
                                        <h5  style="font-family: 'Baloo Bhaijaan', cursive; ">Du Bonheur à Tous Les Etages</h5>
                                    </div>
                                    <form class="user" method="post">
                                 
                                        <div class="form-group" >
                                          <label for="Consumer key">Your Site</label>
                                           <input type="text" name="site" class="form-control" id="Consumer key" placeholder="Enter site url">

                                         </div>
  <div class="form-group" >
    <label for="Consumer key">Consumer key</label>
    <input type="password" name="ck" class="form-control" id="Consumer key" placeholder="Enter Consumer key">

  </div>
  <div class="form-group">
    <label for="secret key">Secret key</label>
    <input type="password" name="cs" class="form-control" id="secret key" aria-describedby="emailHelp" placeholder="Enter secret key">
  </div>
   <button class="btn btn-primary btn-block text-white btn-user" type="submit" name="submit" style="background-color: rgb(0,0,0);font-size: 25px;">Login</button>

                                          
                                        
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>





</div>
</div>
</div>
</div>

