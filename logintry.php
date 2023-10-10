<?php
if($_POST)
{
    $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "test";
    $username=$_POST['username'];
    $password=$_POST['password'];
   $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

    // For Security 
    $query="SELECT * From register where username='$username' and password='$password'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1)
    {
        session_start();
        $_SESSION['test']='true';
      echo "Successful";
      header("Location: option.html");
    }
    else{
        echo 'wrong username or pass';
        header("Location: form.html");
    }
}

?>
<link rel="stylesheet" type="text/css" href="try.css">

<form method="POST">
Username:<br>
    <input type="text" name="username"><br>
    Password:<br>
    <input type="password" name="password"><br>
    <a href="option.html">
          <center><button id="signIn" class="proceed">signin</button></center>
        </a>

</form>