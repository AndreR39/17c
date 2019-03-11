<?php
include_once("php/conn.php");
if(isset($_POST['update']))
{
       $first_name = $_POST['first_name'];
       $last_name = $_POST['last_name'];
       $email = $_POST['email'];
       $address = $_POST['address'];
       $password = $_POST['password'];
       //$password_confirm = $_POST['password_confirm'];

       mysqli_query($conn, "UPDATE users SET first_name='$first_name', last_name='$last_name', address='$address', password='$password' WHERE email='$email'");

	   header('location: index.php');
       // mysql query to Update data
       /*$query = "UPDATE 'users' SET 'first_name'='".$first_name."','last_name'='".$last_name."','address'='".$address."','password'='".$password."' WHERE 'email' = $email";


       $result = mysqli_query($conn, $query);

      if($result)
       {
           echo 'Data Updated';
       }else{
          echo 'Data Not Updated';
      }*/
       mysqli_close($conn);
    }

 ?>
