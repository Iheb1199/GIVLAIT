<?php

include("connection.php"); 
session_start(); 
$_SESSION["cn"] = "non"; 

if($_SERVER['REQUEST_METHOD'] == "POST")
{
  $user_name = $_POST['user_name'];
  $password = $_POST['password'];
  
  if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
  {
    $query = "select * from admins where user_name = '$user_name' limit 1";
	  $result = mysqli_query($con, $query);
    if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
        {  
					$user_data = mysqli_fetch_assoc($result);
          if($password === $user_data['password'] && $user_name === $user_data['user_name'])
          {
            $_SESSION["cn"] = "oui";
            header('location:dash_admin_fich.php');  
          }
          else
          {
            echo "<div style='position: absolute; transform: translate(570px, 100px); border:solid thin;'>veuillez vérifier vos données</div>";
          }   
        }
      }   
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="connexion.css">
  <link rel="icon" type="image/x-icon" href="images/favicone.png">
  <title>Dashboard Admin | Connexion</title>
</head>
<body>
  <div class="wrapper">
    <div class="container">
      <h4 id="title">Connexion</h4>
      <img src="images/connect.png" alt="">
      <form method="post">
        <input type="text" name="user_name" id="user_name" placeholder="username" required><br>
        <input type="password" name="password" id="password" placeholder="password" required>
        <button type="submit" style='cursor: pointer;'>Se Connecter</button>
      </form>
    </div>
  </div>
</body>
</html>