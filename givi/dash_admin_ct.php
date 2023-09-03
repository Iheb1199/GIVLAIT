<?php
  session_start(); 
  if (isset($_SESSION["cn"]) && $_SESSION["cn"] == "non") 
    header('location:connexion.php');   
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title id="tt-pg">Dashboard Admin | Contact</title> 
  <link rel="icon" type="image/x-icon" href="images/favicone.png">
  <link rel="stylesheet" href="styleadmin.css">
</head>
<body>
<div id="li">
  <a id='li-im' style='margin-left: 780px;' href="dash_admin_fich.php">Images</a>
  <a id='li-ct' href="dash_admin_dc.php">Documents</a> 
  <a id='li-md' href="dash_admin_mdf.php">Modifier Site</a>
  <form method='post' style='display: inline;'>
    <input style='cursor:pointer;' type='submit' id='li-de' value='Déconnexion' name='dx'>
  </form>
  <?php
    if (isset($_POST['dx'])) 
    {
      header('location:connexion.php');  
    } 
  ?>
</div>

<?php

  $conn = new mysqli('localhost', 'root', '', 'givlait');
  mysqli_set_charset($conn,"utf8"); 
  $sql = "select * from contact ;";
  mysqli_query($conn, "SET NAMES 'utf8'"); 
  $res = mysqli_query($conn,$sql); 
  if (mysqli_num_rows($res) > 0) 
  {
    echo "<div style='font-size: 20px; margin-left: 50px; border-bottom: solid ; margin-bottom: 20px; margin-top: 20px; color: black; width: 220px;'>Les messages existants :  
    </div>";
    echo "<table id='fc'><tr><th>Nom et Prénom</th><th>Sujet</th><th>Message</th><th>Action</th></tr>"; 
    while($row = mysqli_fetch_assoc($res)) 
      echo "<tr><td>".$row['fullname']."</td>
      <td>".$row['sjt']."</td>".
      "<td>".$row['msg']."</td>".
      "<td><form method='post'> 
        <input value='".$row['id_msg']."' type='hidden' name='id_msg'> 
        <input type='submit' value='Effacer' class='ef' id='btn-ef' name='btn-ef'>
      </form></td></tr>"; 
    echo "</table>";
    echo "<form method='post'>
            <input type='submit' value='Effacer Tout' class='ef' id='btn-f' name='btn-f'>
          </form>
    "; 
    if (isset($_POST["btn-f"])) 
    {
      extract($_POST); 
      $sql = "delete from contact;";    
      mysqli_query($conn, "SET NAMES 'utf8'");
      mysqli_query($conn, $sql); 
      header("location:dash_admin_ct.php"); 
    }
  }
  else 
    echo "<div style='margin-left:50px; margin-top:50px; font-size:20px; border:solid thin; width:165px; text-align:center;'>pas de messages !</div>"; 
   
  if (isset($_POST["btn-ef"])) 
  { 
    extract($_POST); 
    $sql = "delete from contact where id_msg='$id_msg';";    
    mysqli_query($conn, "SET NAMES 'utf8'");
    if (mysqli_query($conn, $sql)) 
      echo "<script type='text/javascript'> window.location.href = 'dash_admin_ct.php';</script>";     
  }
  mysqli_close($conn);
?>
</body>
</html>


