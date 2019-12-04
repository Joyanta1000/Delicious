<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

 
    <title></title>

    
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
   
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

  
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Login</h2>
                   <?php
if(isset($_GET['msg'])){
    echo '<p style ="background-color:red;height:40px;text-align:center;font-size:30px;opacity:.8;border-radius : 40%;">'.$_GET['msg'].'</p>'; echo '<br>';
    
}
    
     ?>
                    <form method="POST" action="index.php">
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Email" name="email" required="required">
                        </div>
                       
                        <div class="input-group">
                            <input class="input--style-2" type="password" placeholder="Password" name="password" required="required">
                        </div>
                      
                        <div class="p-t-30">
                            <button class="btn btn--radius btn--green" type="submit" name="submit">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

   
    <script src="vendor/jquery/jquery.min.js"></script>
   
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

   
    <script src="js/global.js"></script>

</body>

</html>
