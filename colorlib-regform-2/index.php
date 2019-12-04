 <style type="text/css">
  ul
  { margin: 0px;
    padding: 0px;
    list-style: none;
  }
  ul li
  {
    float: left;
    width: 212px;
    height: 40px;
    background-color: black;
    opacity: .8;
    line-height: 40px;
    text-align: center;
    font-size: 20px;
    margin-right: 2px;
  }
  ul li a
  {
    text-decoration: none;
    color: white;
    display: block;
  }
  ul li a:hover
  {
    background-color: yellow;
  }
  ul li ul li
  {
    display: none;
  }
  ul li:hover ul li
  {
    display: block;
  }
</style>




<?php

session_start();

$con = mysqli_connect('localhost','root','','food');

if (isset($_POST['submit'])) {

    $email = $_POST['email'];

    $password = $_POST['password'];

    $sql = "SELECT * FROM `user` WHERE `email` LIKE '$email' AND `password` LIKE '$password'";

    if($result = mysqli_query($con, $sql)){

    if (mysqli_num_rows( $result)) {

while($row = mysqli_fetch_array($result)){

	 header('Location: index.php?msg= Wellcome');

 $_SESSION['email']=$row['email'];

 $_SESSION['password']=$row['password'];

 $_SESSION['birthday']=$row['birthday'];

 $_SESSION['gender']=$row['gender'];

}

 mysqli_free_result($result);

}

   else
   {
   header('Location: log.php?msg= Wrong Password or Email !');
   }
}
   

}
?>
                 
                  <?php
if(isset($_GET['msg'])){
    echo '<p style ="background-color:green;height:40px;text-align:center;font-size:30px;opacity:.8;border-radius : 40%;">'.$_GET['msg'].'</p>'; echo '<br>';
    
}
    
     ?>


    


    <!DOCTYPE html>
    <html>
    <head>
    	<title></title>
    </head>
    <body>
    	 <ul style="opacity: .8;"><li><a href="#"></a></li>
    <li><a href="#"></a></li>
    <li><a href="#"></a></li>
    <li><a href="#"></a></li>
            <li><a style="text-decoration: none; color: white; background-color: red;" href="logout.php"> Logout !</a></li></ul>
    <td>Email</td> :: <td> <?php echo $_SESSION['email'];?> </td> <br>
    <td>Birthdate</td> :: <td> <?php echo $_SESSION['birthday'];?> </td> <br>
    <td>Gender</td> :: <td> <?php echo $_SESSION['gender'];?> </td> <br>
   
     
    <!-- <h2 style="margin-left: 900px;"> <button type="button" class="btn btn-success" style="background-color: red;"> <a style="text-decoration: none; color: white;" href="logout.php"> Logout !</a> </button>  </h2> -->
    </body>
    </html>