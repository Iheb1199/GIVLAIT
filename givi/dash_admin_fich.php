<?php
  session_start(); 
  if (isset($_SESSION["cn"]) && $_SESSION["cn"] == "non") 
  {
    header('location:connexion.php');   
  }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title id="tt-pg">Dashboard Admin | Images</title> 
  <link rel="icon" type="image/x-icon" href="images/favicone.png">
  <link rel="stylesheet" href="styleadmin.css">
</head>
<body>
<div id="li">
  <a id='li-dc' href="dash_admin_dc.php">Documents</a>
  <a id="li-md" href="dash_admin_mdf.php">Modifier Site</a>
  <a id="li-ct" href="dash_admin_ct.php">Messages Form Contact</a>
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
<h1 id="tt-er">Choisir une image à enregistrer</h1>
<form id="form-fc" method="post" enctype="multipart/form-data">
  <input type="file" name="ftu" id="ftu" required><br>
  <input type="submit" id="btn-er" value="Enregistrer" name="btn-fc">
</form>

<?php


if(isset($_POST["btn-fc"])) 
{
  $target_dir = "images/";
  $target_file = $target_dir . basename($_FILES["ftu"]["name"]); 
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  if (!file_exists($target_file))
  {
    if ($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg" || $imageFileType == "gif")
    {
      if (move_uploaded_file($_FILES["ftu"]["tmp_name"], $target_file))
      { 
        $conn = new mysqli('localhost', 'root', '', 'givlait');
        mysqli_set_charset($conn,"utf8"); 
        $sql = "insert into images (nom_img) values('".basename($_FILES["ftu"]["name"])."');"; 
        if (mysqli_query($conn, "SET NAMES 'utf8'")) 
          echo "<div class='msg' id='msg-er'>image enregistrée !<br><br><a id='btn-el'>enlever message</a></div>";
        mysqli_query($conn,$sql);
        mysqli_close($conn);
      } 
      else 
        echo "<div class='msg' id='msg-ne'>image non enregistrée !<br><br><a id='btn-el'>enlever message</a></div>";
    }  
    else 
      echo "<div class='msg' id='msg-ex'>Ce n'est pas une image !<br><br><a id='btn-el'>enlever message</a></div>";
  }
  else 
    echo "<div class='msg' id='msg-ex'>image existante ou image de meme nom existante !<br><br><a id='btn-el'>enlever message</a></div>";
}

?>

<?php

  $conn = new mysqli('localhost', 'root', '', 'givlait');
  mysqli_set_charset($conn,"utf8"); 
  $sql = "select * from images ;";
  mysqli_query($conn, "SET NAMES 'utf8'"); 
  $res = mysqli_query($conn,$sql); 
  if (mysqli_num_rows($res) > 0) 
  {
    echo "<div id='tit-fc'>Les images existantes :  
    </div>";
    echo "<table id='fc'><tr><th>Nom image</th> <th>Action</th></tr>"; 
    while($row = mysqli_fetch_assoc($res)) 
      echo "<tr><td>".$row['nom_img']."</td>
      <td><form method='post'> 
        <input value='".$row['nom_img']."' type='hidden' name='nom_fich'> 
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
      $sql = "delete from images;";    
      mysqli_query($conn, "SET NAMES 'utf8'");
      mysqli_query($conn, $sql); 
      header("location:dash_admin_fich.php"); 
      $folder = 'images'; 
      $files = glob($folder . '/*');
      foreach($files as $file)
      {
        if(is_file($file))
        {
          unlink($file);
        }
      } 
    }
  }
  else 
    echo "<div style='margin-left:50px; margin-top:50px; font-size:20px; border:solid thin; width:145px; text-align:center;'>pas d'images !</div>"; 
   
  if (isset($_POST["btn-ef"])) 
  { 
    extract($_POST); 
    $sql = "delete from images where nom_img='$nom_fich';";  
    $fc = 'images/'.$_POST['nom_fich']; 
    unlink($fc);  
    mysqli_query($conn, "SET NAMES 'utf8'");
    if (mysqli_query($conn, $sql)) 
      echo "<script type='text/javascript'> window.location.href = 'dash_admin_fich.php';</script>";     
  }
  mysqli_close($conn);
?>




<script type="text/javascript">
  document.getElementById('btn-el').addEventListener('click', function()
  {
    const msg = document.getElementsByClassName('msg');
    msg[0].style.display = "none";  
  });   
</script>



</body>
</html>