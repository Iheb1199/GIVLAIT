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
  <title id="tt-pg">Dashboard Admin | Documents</title> 
  <link rel="icon" type="image/x-icon" href="images/favicone.png">
  <link rel="stylesheet" href="styleadmin.css">
</head>
<body>
<div id="li">
  <a id='li-im' href="dash_admin_fich.php">Images</a>
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
<h1 id="tt-dr">Choisir un document à enregistrer</h1>
<form id="form-fc" method="post" enctype="multipart/form-data">
  <input type="file" name="ftu" id="ftu" required><br>
  <input type="submit" id="btn-er" value="Enregistrer" name="btn-fc">
</form>

<?php

if(isset($_POST["btn-fc"])) 
{
  $target_dir = "docs/";
  $target_file = $target_dir . basename($_FILES["ftu"]["name"]); 
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  if (!file_exists($target_file))
  {
    if ($imageFileType == "pdf")
    {
      if (move_uploaded_file($_FILES["ftu"]["tmp_name"], $target_file))
      {
        $conn = new mysqli('localhost', 'root', '', 'givlait');
        mysqli_set_charset($conn,"utf8"); 
        $sql = "insert into documents (nom_doc) values('".basename($_FILES["ftu"]["name"])."');"; 
        if (mysqli_query($conn, "SET NAMES 'utf8'")) 
          echo "<div class='msg' id='msg-er'>document enregistré !<br><br><a id='btn-el'>enlever message</a></div>";
        mysqli_query($conn,$sql);
        mysqli_close($conn);
      }  
      else 
        echo "<div class='msg' id='msg-ne'>document non enregistré !<br><br><a id='btn-el'>enlever message</a></div>";
    }  
    else 
      echo "<div class='msg' id='msg-ex'>Ce n'est pas un pdf !<br><br><a id='btn-el'>enlever message</a></div>";
  }
  else 
    echo "<div class='msg' id='msg-ex'>document existant ou document de meme nom existant !<br><br><a id='btn-el'>enlever message</a></div>";
}

?>



<?php

  $conn = new mysqli('localhost', 'root', '', 'givlait');
  mysqli_set_charset($conn,"utf8"); 
  $sql = "select * from documents ;";
  mysqli_query($conn, "SET NAMES 'utf8'"); 
  $res = mysqli_query($conn,$sql); 
  if (mysqli_num_rows($res) > 0) 
  {
    echo "<div id='tit-dc'>Les documents existants :  
    </div>";
    echo "<table id='fc'><tr><th>Nom document</th><th>lait</th><th>viande</th><th>réglementation</th><th>Action 1</th><th>Ajout Lait</th><th>Ajout Viande</th><th>Ajout Réglementation</th></tr>"; 
    while($row = mysqli_fetch_assoc($res)) 
      echo "<tr><td>".$row['nom_doc']."</td><td>".$row['lait']."</td><td>".$row['viande']."</td><td>".$row['reg']."</td>".
      "<td><form method='post'> 
        <input value='".$row['nom_doc']."' type='hidden' name='nom_fich'> 
        <input type='submit' value='Effacer' class='ef' name='btn-ef'>
      </form></td>
      <td>
        <form method='post'>
          <input value='".$row['nom_doc']."' type='hidden' name='nom_fich'>
          <input type='submit' value='Oui' class='ef blt' name='btn_lt'>
          <input type='submit' value='Non' class='ef blt' name='btn_lt'>
        </form>
      </td>
      <td>
        <form method='post'>
          <input value='".$row['nom_doc']."' type='hidden' name='nom_fich'>
          <input type='submit' value='Oui' class='ef blt' name='btn_vd'>
          <input type='submit' value='Non' class='ef blt' name='btn_vd'>
        </form>
      </td>
      <td>
        <form method='post'>
          <input value='".$row['nom_doc']."' type='hidden' name='nom_fich'>
          <input type='submit' value='Oui' class='ef blt' name='btn_rg'>
          <input type='submit' value='Non' class='ef blt' name='btn_rg'>
        </form>
      </td>
      </tr>"; 
    echo "</table>";
    if (isset($_POST['btn_lt'])) 
    {
      extract($_POST); 
      if ($btn_lt == 'Oui')
        $sql = "update documents set lait = 'oui' where nom_doc ='".$nom_fich."';"; 
      else 
        $sql = "update documents set lait = 'non' where nom_doc ='".$nom_fich."';"; 
      mysqli_query($conn, "SET NAMES 'utf8'"); 
      mysqli_query($conn, $sql); 
      header("location:dash_admin_dc.php"); 
    }

    if (isset($_POST['btn_vd'])) 
    {
      extract($_POST);
      if ($btn_vd == 'Oui') 
        $sql = "update documents set viande = 'oui' where nom_doc ='".$nom_fich."';"; 
      else 
         $sql = "update documents set viande = 'non' where nom_doc ='".$nom_fich."';";
      mysqli_query($conn, "SET NAMES 'utf8'"); 
      mysqli_query($conn, $sql);
      header("location:dash_admin_dc.php"); 
    }

    if (isset($_POST['btn_rg'])) 
    {
      extract($_POST);
      if ($btn_rg == 'Oui') 
        $sql = "update documents set reg = 'oui' where nom_doc ='".$nom_fich."';"; 
      else 
         $sql = "update documents set reg = 'non' where nom_doc ='".$nom_fich."';";
      mysqli_query($conn, "SET NAMES 'utf8'"); 
      mysqli_query($conn, $sql);
      header("location:dash_admin_dc.php"); 
    }
    echo "<form method='post'>
            <input type='submit' value='Effacer Tout' class='ef' id='btn-f' name='btn-f'>
          </form>
    "; 
    if (isset($_POST["btn-f"])) 
    {
      extract($_POST); 
      $sql = "delete from documents;";    
      mysqli_query($conn, "SET NAMES 'utf8'");
      mysqli_query($conn, $sql); 
      $folder = 'docs'; 
      $files = glob($folder . '/*');
      foreach($files as $file)
      {
        if(is_file($file))
        {
          unlink($file);
        }
      } 
      header("location:dash_admin_dc.php"); 
    }
  }
  else 
    echo "<div style='margin-left:50px; margin-top:50px; font-size:20px; border:solid thin; width:178px; text-align:center;'>pas de documents !</div>"; 
   
  if (isset($_POST["btn-ef"])) 
  { 
    extract($_POST); 
    $sql = "delete from documents where nom_doc='$nom_fich';";  
    $fc = 'docs/'.$_POST['nom_fich']; 
    unlink($fc);  
    mysqli_query($conn, "SET NAMES 'utf8'");
    if (mysqli_query($conn, $sql)) 
      echo "<script type='text/javascript'> window.location.href = 'dash_admin_dc.php';</script>";     
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