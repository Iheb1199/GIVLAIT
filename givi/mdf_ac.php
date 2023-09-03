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
  <title id="tt-pg">Dashboard Admin | Mdf actualité</title> 
  <link rel="icon" type="image/x-icon" href="images/favicone.png">
  <link rel="stylesheet" href="styleadmin.css">
</head>
<body>
  <div style='margin-top: 10px;'>
  <a id='li-mi' href='dash_admin_mdf.php'>Modifier Site</a> 
  <form method='post' style='display: inline; margin-left: 30px;'>
    <input style='cursor:pointer;' type='submit' id='li-de' value='Déconnexion' name='dx'>
  </form>
  </div>
  <?php
    if (isset($_POST['dx'])) 
    {
      header('location:connexion.php');  
    } 
  ?>

  <?php
    if ($_SESSION['cp']=='date_ac') 
      echo "
        <form method='post' id='fo-md'>
          <input type='date' name='dt' style='margin-bottom:20px;' required><br> 
          <input type='submit' name='nv-dt' style='padding:5px; cursor:pointer;'> 
        </form>
    ";  
    else 
      echo "
        <form method='post' id='fo-md'>
          <input name='tx' style='margin-bottom:20px;' required><br>
          <input type='submit' name='nv-tx' style='padding:5px; cursor:pointer;'> 
        </form>
    "; 
  ?>
  <?php
    if (isset($_POST['nv-dt'])) 
    {
      extract($_POST); 
      $dt = date("Y-m-d", strtotime($dt));
      $conn = new mysqli('localhost', 'root', '', 'givlait');
      mysqli_set_charset($conn,"utf8"); 
      $sql = "update actualité set date_ac ='".$dt."' where id_ac = '".$_SESSION['id_ac']."';";
      mysqli_query($conn, "SET NAMES 'utf8'");
      if (mysqli_query($conn, $sql)) 
        echo "yes"; 
      else 
        echo "no"; 
      mysqli_close($conn); 
      header("location:dash_admin_mdf.php");   
    } 
    else if (isset($_POST['nv-tx'])) 
    {
      extract($_POST); 
      if (trim($tx)!='')
      {
        $conn = new mysqli('localhost', 'root', '', 'givlait');
        mysqli_set_charset($conn,"utf8"); 
        $sql = "update actualité set ".$_SESSION['cp']."='".$tx."' where id_ac = '".$_SESSION['id_ac']."';";
        mysqli_query($conn, "SET NAMES 'utf8'");
        mysqli_query($conn, $sql); 
        mysqli_close($conn); 
        header("location:dash_admin_mdf.php");
      }
      else 
        echo "<div id='ms'>données erronées !<br><br><a id='btn-el'>enlever message</a></div>"; 
    }
  ?>
</body>
<script type="text/javascript">
  document.getElementById('btn-el').addEventListener('click', function()
  {
    const msg = document.getElementById('ms');
    msg.style.display = "none";  
  }); 
</script>
</html>