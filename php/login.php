<?php
  if (isset($_POST["entrar"])) {

    header("Refresh:0; url=login.php");

  }


  $servername = "localhost";
  $db_username = "root";
  $db_password = "";

  // Create connection
  $conn = mysqli_connect($servername, $db_username, $db_password);

  // Check connection
  /*if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
  }
  echo "Connected successfully";*/

    if(isset($_POST['entrar'])){

      if (empty($_POST["username"])) //if username field is empty echo below statement
          {
              ?>
              <script type="text/javascript">
                alert("Nome de utilizador precisa ser preenchido!")
              </script>
              <?php
          }
          if (empty($_POST["password"])) //if password 1 field is empty echo below statement
          {
              ?>
              <script type="text/javascript">
                alert("Password precisa de ser preenchida!")
              </script>
              <?php
          }
          else
          {
            
          }

    }
    ?>
