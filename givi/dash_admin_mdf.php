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
  <title id="tt-pg">Dashboard Admin | Modification</title> 
  <link rel="icon" type="image/x-icon" href="images/favicone.png">
  <link rel="stylesheet" href="styleadmin.css">
</head>
<body>
<div id="li">
  <a id='li-im' style='margin-left: 700px;' href="dash_admin_fich.php">Images</a>
  <a id='li-ct' href="dash_admin_dc.php">Documents</a> 
  <a id='li-md' href="dash_admin_ct.php">Messages Form Contact</a>
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
<h1 id='tt-aj'>Ajouter une actualité</h1>
<form method='post' id='fm-aj'>
  <label>Nom Actualité</label><br>
  <input name='nom_ac' id='nom_ac' required><br>
  <label>Date Actualité</label><br>
  <input type='date' name='dt_ac' id='dt_ac' required><br> 
  <label>Nom Document</label><br>
  <input name='nom_dc' id='nom_dc' required><br>
  <label>Nom Image</label><br>
  <input name='nom_img' id='nom_img' required><br>
  <button type="submit" name="btn-aj" id='btn-aj'>ajouter</button>
</form>

<?php
  if (isset($_POST['btn-aj'])) 
  {
    extract($_POST); 
    if (trim($nom_ac)!='' && trim($nom_dc)!='')
    {
      $dt_ac = date("Y-m-d", strtotime($dt_ac)); 
      $conn = new mysqli('localhost', 'root', '', 'givlait');
      mysqli_set_charset($conn,"utf8"); 
      $sql = "select * from documents where nom_doc = '".$nom_dc."';";  
      $res = mysqli_query($conn,$sql);     
      $sql1 = "select * from images where nom_img ='".$nom_img."';"; 
      $res1 = mysqli_query($conn,$sql1);   
      if (mysqli_num_rows($res) > 0 && mysqli_num_rows($res1) > 0) 
      {
        $sql = "insert into actualité (nom_ac, date_ac, nom_doc, nom_img) values('".$nom_ac."','".$dt_ac."','".$nom_dc."','".$nom_img."');"; 
        mysqli_query($conn, "SET NAMES 'utf8'"); 
        if (mysqli_query($conn,$sql)) 
          echo "<div id='ms' style='margin-bottom:10px;'>actualité ajoutée !<br><br><a id='btn-el'>enlever message</a></div>";
      }
      else 
        echo "<div id='ms' style='margin-bottom:10px;'>document ou image inexistant(e) !<br><br><a id='btn-el'>enlever message</a></div>";
      mysqli_close($conn); 
    } 
    else 
      echo "<div id='ms' style='margin-bottom:10px;'>données erronées !<br><br><a id='btn-el'>enlever message</a></div>"; 
  } 
?>

<?php
  $conn = new mysqli('localhost', 'root', '', 'givlait');
  mysqli_set_charset($conn,"utf8"); 
  $sql = "select * from actualité ;";
  mysqli_query($conn, "SET NAMES 'utf8'"); 
  $res = mysqli_query($conn,$sql); 
  if (mysqli_num_rows($res) > 0) 
  {
    echo "<div id='tt-act'>Les actualités existantes :  
    </div>";
    echo "<table id='tab-ac'><tr><th>Nom actualité</th><th>Date actualité</th><th>Nom document</th><th>Nom Image</th><th>Action 1</th><th>Action 2</th></tr>"; 
    while($row = mysqli_fetch_assoc($res)) 
      echo "<tr><td>".$row['nom_ac']."</td><td>".$row['date_ac']."</td>"."<td>".$row['nom_doc']."</td>"."<td>".$row['nom_img']."</td>".
      "<td><form method='post'> 
        <input value='".$row['id_ac']."' type='hidden' name='nom_fich'> 
        <input type='submit' style='cursor:pointer;' value='Effacer'  name='btn-ef'></form></td>
        <td id='".$row['id_ac']."'>
        <form style='display:inline;' method='post'> 
        <input value='".$row['id_ac']."' type='hidden' name='nm'>
        <select name='choix'>
          <option value='nom_ac'>nom actualité</option>
          <option value='date_ac'>date actualité</option>
          <option value='nom_img'>nom image</option>
          <option value='nom_doc'>nom document</option>
        </select>
        <input type='submit' style='cursor:pointer;' value='Modifier' name='btn-md'>
        </form>
      </td></tr>"; 
    echo "</table>";
    echo "<form method='post'>
            <input type='submit' value='Effacer Tout' class='ef' id='btn-f' name='btn-f'>
          </form>";
    if (isset($_POST['btn-md'])) 
    {
      extract($_POST);  
      $_SESSION['id_ac'] = $nm; 
      $_SESSION['cp'] = $choix; 
      header('location:mdf_ac.php');
    }
    if (isset($_POST['btn-ef'])) 
    {
      extract($_POST); 
      $sql = "delete from actualité where id_ac='$nom_fich';"; 
      mysqli_query($conn, "SET NAMES 'utf8'");
      if (mysqli_query($conn, $sql)) 
        header("location:dash_admin_mdf.php"); 
    } 
    if (isset($_POST['btn-f'])) 
    {
      extract($_POST); 
      $sql = "delete from actualité;";     
      mysqli_query($conn, "SET NAMES 'utf8'");
      mysqli_query($conn, $sql); 
      header("location:dash_admin_mdf.php");
    }
  } 
  else 
    echo "<div style='margin-left:50px; margin-top:50px; font-size:20px; border:solid thin; width:178px; text-align:center;'>pas d'actualités !</div>";
  mysqli_close($conn); 
?>

<h1 id='tt-tel'>Modifier le tableau du nombre des eleveurs</h1>
<?php
  $conn = new mysqli('localhost', 'root', '', 'givlait');
  mysqli_set_charset($conn,"utf8"); 
  $sql1 = "select * from nb_eleveurs;";
  $sql2 = "select * from source where nom_tab = 'nb_eleveurs';";
  mysqli_query($conn, "SET NAMES 'utf8'"); 
  $res1 = mysqli_query($conn,$sql1); 
  $res2 = mysqli_query($conn,$sql2); 
  $row1 = mysqli_fetch_assoc($res1);
  $row2 = mysqli_fetch_assoc($res2);
  echo "<table id='tb-el'>
          <tr><th>bovins</th><th>ovins</th><th>caprins</th><th>camélidés</th><th>Source</th><th>Action</th></tr>
          <tr><td>".$row1['bovins']."</td><td>".$row1['ovins']."</td><td>".$row1['caprins']."</td><td>".$row1['camélidés']."</td><td>".
          $row2['source'].
          "<form method='post'>
            <input name='tx_sr' id='tx-sr' required>
            <input type='submit' style='cursor:pointer;' value='Modifier' id='btn-mdd' name='btn-mdd'>
          </form></td>
          <td><form method='post'>
            <select name='choix' id='cx'>
              <option value='bovins'>bovins</option>
              <option value='ovins'>ovins</option>
              <option value='caprins'>caprins</option>
              <option value='camélidés'>camélidés</option>
            </select>
            <input type='number' name='val_el' id='val-el' required><br>
            <input type='submit' style='cursor:pointer;' value='Modifier' id='bt-mdi' name='btn_mdi'>
          </form></td></tr></table>"; 
  if (isset($_POST['btn-mdd'])) 
  {
    extract($_POST); 
    if (trim($tx_sr)!='') 
    {
       $sql = "update source set source ='".$tx_sr."' where nom_tab = 'nb_eleveurs'";
       mysqli_set_charset($conn,"utf8"); 
       mysqli_query($conn,$sql);
       header("location:dash_admin_mdf.php"); 
    }
    else 
      echo "<div id='ms' style='margin-left:350px; margin-bottom:10px;'>source invalide !<br><br><a id='btn-el'>enlever message</a></div>"; 
  }

  if (isset($_POST['btn_mdi'])) 
  {
    extract($_POST); 
    if ($val_el >= 0)
    {
       $sql = "update nb_eleveurs set ".$choix." = ".$val_el." where id_nb = 1;";
       mysqli_set_charset($conn,"utf8"); 
       mysqli_query($conn,$sql); 
       header("location:dash_admin_mdf.php"); 
    } 
    else 
      echo "<div id='ms' style='margin-left:350px; margin-bottom:10px;'>nombre invalide !<br><br><a id='btn-el'>enlever message</a></div>"; 
  }
  mysqli_close($conn); 
?>

<h1 id='tt-rp'>Modifier le tableau de la répartition des effectifs</h1> 
<?php
  $conn = new mysqli('localhost', 'root', '', 'givlait');
  mysqli_set_charset($conn,"utf8"); 
  $sql = "select * from répartition;"; 
  mysqli_query($conn, "SET NAMES 'utf8'"); 
  $res= mysqli_query($conn,$sql);
  echo "<table id='tb-rp'><tr><th>région</th><th>bovins</th><th>ovins</th><th>caprins</th><th>Action</th></tr>"; 
  while($row = mysqli_fetch_assoc($res)) 
  {
    echo "<tr><td>".$row['region']."</td><td>".$row['bovins']."</td><td>".$row['ovins']."</td><td>".$row['caprins']."</td>
    <td><form id='fm-rp' method='post'> 
      <select name='choix' class='choix'>
              <option value='bovins'>bovins</option>
              <option value='ovins'>ovins</option>
              <option value='caprins'>caprins</option>
      </select>
      <input name='region' type='hidden' value='".$row['region']."'> 
      <input type='number' name='nb_rp' class='nb-rp'> 
      <input type='submit' name='btn_rp' style='cursor: pointer;' class='btn-rp' value='Modifier'>
    </form></td>
    </tr>"; 
  } 
  echo "</table>";
  $sql = "select * from source where nom_tab = 'répartition';";  
  mysqli_query($conn, "SET NAMES 'utf8'"); 
  $res= mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($res); 
  echo "
    <table id='tb-sc'>
    <tr><th>Source</th><th>Action</th></tr> 
    <tr><td>".$row['source'].
    "</td><td>
      <form method='post'> 
        <input name='tx_sc' id='tx-sc'>
        <input type='submit' id='bt-sc' value='Modifier' style='cursor: pointer;' name='bt_sc'> 
      </form>
    </td></tr>
    </table>
  "; 

  if (isset($_POST['bt_sc'])) 
  {
    extract($_POST); 
    if (trim($tx_sc)!='') 
    {
      $sql = "update source set source ='".$tx_sc."' where nom_tab = 'répartition'"; 
       mysqli_set_charset($conn,"utf8"); 
       mysqli_query($conn,$sql);
       echo "<script type='text/javascript'>
              window.location.href = 'dash_admin_mdf.php';  
            </script>
        "; 
    }
    else 
      echo "<div id='ms' style='margin-left:350px; margin-bottom:10px;'>source invalide !<br><br><a id='btn-el'>enlever message</a></div>"; 

  }

  if (isset($_POST['btn_rp'])) 
  {
    extract($_POST); 
    if ($nb_rp >=0) 
    {
      $sql = "update répartition set ".$choix." = ".$nb_rp." where region = '".$region."';";
      mysqli_query($conn, "SET NAMES 'utf8'"); 
      mysqli_query($conn,$sql);
      echo "<script type='text/javascript'>
              window.location.href = 'dash_admin_mdf.php';  
            </script>
      "; 
    }
    else 
      echo "<div id='ms' style='margin-left:150px; margin-bottom:10px;'>nombre invalide !<br><br><a id='btn-el'>enlever message</a></div>";
  } 
  mysqli_close($conn);
?>

<h1 id='tt-prv'>Ajouter une année dans le tableau de la production des viandes</h1>
<form method='post' id='fm-prv'>
  <label>Année</label><br>
  <input  type='number' name="an" required>
  <label>Viande Bovine</label><br>
  <input  type='number' step='0.001' name="bv" required><br>
  <label>Viande Ovine</label><br>
  <input  type='number' step='0.001' name="ov" required><br>
  <label>Viande Caprine</label><br>
  <input  type='number' step='0.001' name="cp" required><br>
  <label>Autres Viandes</label><br>
  <input  type='number' step='0.001' name="at" required><br> 
  <label>Importation</label><br>
  <input  type='number' step='0.001' name="imp" required><br>
  <label>Consommation</label><br>
  <input  type='number' step='0.001' name="cm" required><br>
  <label>Taux de couverture</label><br>
  <input  type='number' name="tc" required><br>
  <input type="submit" name="bto-pr" id='bto-pr' value='ajouter' style='cursor: pointer;'>
</form>

<?php
  if (isset($_POST['bto-pr'])) 
  {
    extract($_POST); 
    if ($an >= 0 && $ov >= 0 && $cp >= 0 && $at >= 0 && $imp >=0 && $cm >=0) 
    {
        $conn = new mysqli('localhost', 'root', '', 'givlait');
        mysqli_set_charset($conn,"utf8");
        $sql = "insert into stat_vd (année, bovin, ovin, caprin, autre, import, cons, taux) values(".$an.",".$bv.",".$ov.",".$cp.",".$at.",".$imp.",".$cm.",".$tc.");"; 
        mysqli_query($conn,$sql);
        echo "</table>";
        mysqli_close($conn); 
    } 
    else 
      echo "<div id='ms' style='margin-left:350px; margin-bottom:10px;'>une ou plusieurs valeurs est(sont) invalide(s) !<br><br><a id='btn-el'>enlever message</a></div>";
  } 
?>

<?php
  $conn = new mysqli('localhost', 'root', '', 'givlait');
  mysqli_set_charset($conn,"utf8"); 
  $sql = "select * from stat_vd ;"; 
  mysqli_query($conn, "SET NAMES 'utf8'"); 
  $res = mysqli_query($conn,$sql); 
  if (mysqli_num_rows($res) > 0) 
  {
    echo "<h1 class='tit-an'>Les années existantes : </h1>"; 
    echo "<table id='tb-mdat'><tr><th>Année</th><th>Viande Bovine</th><th>Viande Ovine</th><th>Viande Caprine</th><th>Autres Viandes</th><th>Importation</th><th>Consommation</th><th>Taux de couverture</th><th>Modifer année ou taux</th><th>Modifier le reste</th><th>Action</th></tr>"; 
    while($row = mysqli_fetch_assoc($res)) 
      echo "<tr><td>".$row['année']."</td><td>".$row['bovin']."</td><td>".$row['ovin']."</td><td>".$row['caprin']."</td><td>".$row['autre']."</td><td>".$row['import']."</td><td>".$row['cons']."</td><td>".$row['taux']."</td>
      <td><form method='post'>
            <select name='choix' class='elm' style='margin-bottom: 10px'>
              <option value='année'>année</option>
              <option value='taux'>taux</option>
            </select>
            <input type='hidden' value='".$row['année']."' name='ane'>
            <input type='number' class='elm' name='at' style='margin-bottom: 10px' required>
            <input type='submit' style='cursor: pointer;' class='elm' value='Modifier' name='mdat'>
          </form>
      </td>
      <td>
        <form method='post'>
            <select name='choix' class='elm' style='margin-bottom: 10px'>
              <option value='bovin'>bovin</option>
              <option value='ovin'>ovin</option>
              <option value='caprin'>caprin</option>
              <option value='autre'>autre</option>
              <option value='import'>import</option>
              <option value='cons'>consm</option>
            </select>
            <input type='hidden' value='".$row['année']."' name='ane'>
            <input type='number' class='elm' style='margin-bottom: 10px' step='0.001' name='at' required>
            <input type='submit' style='cursor: pointer;' class='elm' value='Modifier' name='mdrs'> 
        </form>
      </td>
      <td>
        <form method='post'>
          <input type='hidden' value='".$row['année']."' name='ane'>
          <input type='submit' class='elm' style='cursor:pointer;' value='Effacer' name='efat'>
        </form>
      </td>
      </tr>"; 
      echo "</table>";
      echo "<form method='post'>
              <input type='submit' style='cursor: pointer;' value='Effacer Tout' class='ef' id='efat' name='fat'>
            </form>";   
      $sql = "select * from source where nom_tab = 'stat_vd';";  
      mysqli_query($conn, "SET NAMES 'utf8'"); 
      $res= mysqli_query($conn,$sql);
      $row = mysqli_fetch_assoc($res); 
      echo "
          <table id='sc-pr'>
          <tr><th>Source</th><th>Action</th></tr> 
          <tr><td>".$row['source'].
          "</td><td>
          <form method='post' > 
            <input name='tx_sc' class='elm' required>
            <input type='submit' class='elm' value='Modifier' style='cursor: pointer;' name='sc_pr'> 
          </form>
          </td></tr>
          </table>
      ";  
      if (isset($_POST['sc_pr'])) 
      {
        extract($_POST); 
      if (trim($tx_sc)!='') 
      {
        $sql = "update source set source ='".$tx_sc."' where nom_tab = 'stat_vd';";  
        mysqli_set_charset($conn,"utf8"); 
        mysqli_query($conn,$sql);
        echo "<script type='text/javascript'>
              window.location.href = 'dash_admin_mdf.php';  
            </script>
        "; 
      }
      else 
        echo "<div id='ms' style='margin-left:350px; margin-bottom:10px;'>source invalide !<br><br><a id='btn-el'>enlever message</a></div>"; 
      }
  }
  else 
    echo "<div style='margin-left:50px; margin-top:50px; font-size:20px; border:solid thin; width:178px; text-align:center;'>pas d'années !</div>";

  if (isset($_POST['mdat'])) 
  {
    extract($_POST); 
    if ($at > 0) 
    {
      $sql = "update stat_vd set ".$choix." = ".$at." where année = ".$ane.";";
      mysqli_set_charset($conn,"utf8"); 
      mysqli_query($conn,$sql);
      echo "<script type='text/javascript'>
              window.location.href = 'dash_admin_mdf.php';  
            </script>
      "; 

    }
    else 
      echo "<div id='ms' style='margin-left:350px; margin-bottom:10px;'>une ou plusieurs valeurs est(sont) invalide(s) !<br><br><a id='btn-el'>enlever message</a></div>";
  }

  if (isset($_POST['mdrs'])) 
  {
    extract($_POST); 
    if ($at > 0) 
    {
      $sql = "update stat_vd set ".$choix." = ".$at." where année = ".$ane.";";
      mysqli_set_charset($conn,"utf8"); 
      mysqli_query($conn,$sql);
      echo "<script type='text/javascript'>
              window.location.href = 'dash_admin_mdf.php';  
            </script>
      ";  
    }
    else 
      echo "<div id='ms' style='margin-left:350px; margin-bottom:10px;'>une ou plusieurs valeurs est(sont) invalide(s) !<br><br><a id='btn-el'>enlever message</a></div>";
  }

  if (isset($_POST['efat']))  
  {
    extract($_POST); 
    $sql = "delete from stat_vd where année = ".$ane.";";
    mysqli_set_charset($conn,"utf8"); 
    mysqli_query($conn,$sql);
    echo "<script type='text/javascript'>
              window.location.href = 'dash_admin_mdf.php';  
            </script>
      ";  
  }

  if (isset($_POST['fat']))  
  {
    extract($_POST); 
    $sql = "delete from stat_vd ;";
    mysqli_set_charset($conn,"utf8"); 
    mysqli_query($conn,$sql);
    echo "<script type='text/javascript'>
              window.location.href = 'dash_admin_mdf.php';  
            </script>
      "; 
  }
  mysqli_close($conn);
?>

<h1 id='tit-bv'>Ajouter une année dans le tableau des effectifs de bovins</h1> 
<form method='post' id='fr-bv'>
  <label>Année</label><br>
  <input type='number' name='an' required><br>
  <label>Race Pure</label><br>
  <input type='number' name='rc' required><br>
  <label>Race Local Croisée</label><br>
  <input type='number' name='lc' required><br>
  <input type='submit' id='md-bv' value='ajouter' style='cursor: pointer;'name='mdbv' id=''>
</form>

<?php 
  if (isset($_POST['mdbv'])) 
  {
    extract($_POST); 
    if ($an >=0 && $rc >= 0 && $lc >= 0) 
    {
      $conn = new mysqli('localhost', 'root', '', 'givlait');
      mysqli_set_charset($conn,"utf8"); 
      $sql = "insert into lait_pr (année, rc_pr, rc_lc) values(".$an.",".$rc.",".$lc.");"; 
      mysqli_query($conn, "SET NAMES 'utf8'"); 
      mysqli_query($conn,$sql);
      mysqli_close($conn); 
    } 
    else 
      echo "<div id='ms' style='margin-left:350px; margin-bottom:10px;'>une des valeurs est invalide !<br><br><a id='btn-el'>enlever message</a></div>";
  }

?>

<?php
  $conn = new mysqli('localhost', 'root', '', 'givlait');
  mysqli_set_charset($conn,"utf8"); 
  $sql = "select * from lait_pr;"; 
  mysqli_query($conn, "SET NAMES 'utf8'"); 
  $res = mysqli_query($conn,$sql);
  if (mysqli_num_rows($res) > 0) 
  {
    echo "<h1 class='tit-an'>Les années existantes : </h1>";
    echo "<table id='tbl-bv'><tr><th>Année</th><th>Race pure</th><th>Race Locale Croisée</th><th>Action 1</th><th>Action 2</th></tr>";
    while($row = mysqli_fetch_assoc($res)) 
      echo "<tr><td>".$row['année']."</td><td>".$row['rc_pr']."</td><td>".$row['rc_lc']."</td>
      <td><form method='post'>
            <input type='hidden' value='".$row['année']."' name='ane'>
            <select name='choix' class='elm' style='margin-bottom: 10px'>
              <option value='année'>année</option>
              <option value='rc_pr'>pure</option>
              <option value='rc_lc'>locale croisée</option>
            </select>
            <input type='number' name='val' class='elm' required> 
            <input type='submit' value = 'Modifier' style='cursor: pointer' class='elm' name='bbv'>
      </td>
      <td>
        <form method='post'>
          <input type='hidden' value='".$row['année']."' name='ane'>
          <input type='submit' class='elm' style='cursor:pointer;' value='Effacer' name='fbv'> 
        </form>
      </td> 
    </tr>"; 
    echo "</table>";
    echo "<form method='post'>
              <input type='submit' style='cursor: pointer; margin-left:200px; margin-bottom:20px;' value='Effacer Tout' class='ef' name='atbv'>
          </form>";

    $sql = "select * from source where nom_tab = 'lait_pr';";  
    mysqli_query($conn, "SET NAMES 'utf8'"); 
    $res= mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($res); 
    echo "
          <table id='sc-lpr'>
          <tr><th>Source</th><th>Action</th></tr> 
          <tr><td>".$row['source'].
          "</td><td>
          <form method='post' > 
            <input name='tx_sc' class='elm' required>
            <input type='submit' class='elm' value='Modifier' style='cursor: pointer;' name='sc_lpr'> 
          </form>
          </td></tr>
          </table>
      ";  
      if (isset($_POST['sc_lpr'])) 
      {
        extract($_POST); 
        if (trim($tx_sc)!='') 
        {
          $sql = "update source set source ='".$tx_sc."' where nom_tab = 'lait_pr';";  
          mysqli_set_charset($conn,"utf8"); 
          mysqli_query($conn,$sql);
          echo "<script type='text/javascript'>
              window.location.href = 'dash_admin_mdf.php';  
            </script>
          "; 
        }
        else 
        echo "<div id='ms' style='margin-left:350px; margin-bottom:10px;'>source invalide !<br><br><a id='btn-el'>enlever message</a></div>";
      }   
  }
  else 
    echo "<div style='margin-left:50px; margin-top:50px; margin-bottom: 20px;font-size:20px; border:solid thin; width:178px; text-align:center;'>pas d'années !</div>"; 

  if (isset($_POST['bbv'])) 
  {
    extract($_POST); 
    if ($val > 0) 
    {
      $sql = "update lait_pr set ".$choix." = ".$val." where année = ".$ane.";"; 
      mysqli_query($conn, "SET NAMES 'utf8'"); 
      mysqli_query($conn, $sql);
      echo "<script type='text/javascript'>
              window.location.href = 'dash_admin_mdf.php';  
            </script>
      "; 
    }
    else 
      echo "<div id='ms' style='margin-left:350px; margin-bottom:10px;'>nombre invalide !<br><br><a id='btn-el'>enlever message</a></div>";   
  }

  if (isset($_POST['fbv'])) 
  {
    extract($_POST); 
    $sql = "delete from lait_pr where année = ".$ane.";";
    mysqli_set_charset($conn,"utf8"); 
    mysqli_query($conn,$sql);
    echo "<script type='text/javascript'>
              window.location.href = 'dash_admin_mdf.php';  
            </script>
      "; 
  }

  if (isset($_POST['atbv'])) 
  {
    extract($_POST); 
    $sql = "delete from lait_pr ;";
    mysqli_set_charset($conn,"utf8"); 
    mysqli_query($conn,$sql);
    echo "<script type='text/javascript'>
              window.location.href = 'dash_admin_mdf.php';  
            </script>
      "; 
  } 
  mysqli_close($conn);  
?>

<h1 id='tit-ev'>Ajouter une année dans le tableau de l'évolution de la production</h1> 
<form method='post' id='fr-ev'>
  <label>Année</label><br>
  <input type='number' name='an' required><br>
  <label>Production</label><br>
  <input type='number' step='0.001' name='prod' required><br>
  <input type='submit' id='md-ev' value='ajouter' style='cursor: pointer;' name='mdev'>
</form>

<?php
  if (isset($_POST['mdev']))
  {
    extract($_POST); 
    if ($an >= 0 && $prod >= 0)
    {
      $conn = new mysqli('localhost', 'root', '', 'givlait');
      mysqli_set_charset($conn,"utf8"); 
      $sql = "insert into ev_pr (année, prod) values(".$an.",".$prod.");";  
      mysqli_query($conn, "SET NAMES 'utf8'"); 
      mysqli_query($conn,$sql);
      mysqli_close($conn);
    }
    else 
      echo "<div id='ms' style='margin-left:350px; margin-bottom:10px;'>une ou plusieurs valeurs est(sont) invalide(s) !<br><br><a id='btn-el'>enlever message</a></div>";
  } 
?>

<?php
  $conn = new mysqli('localhost', 'root', '', 'givlait');
  mysqli_set_charset($conn,"utf8"); 
  $sql = "select * from ev_pr;";  
  mysqli_query($conn, "SET NAMES 'utf8'"); 
  $res = mysqli_query($conn,$sql);
  if (mysqli_num_rows($res) > 0) 
  {
    echo "<h1 class='tit-an'>Les années existantes : </h1>";
    echo "<table id='tbl-ev'><tr><th>Année</th><th>Production</th><th>Modifier Année</th><th>Modifier Production</th><th>Action 3</th></tr>"; 
    while($row = mysqli_fetch_assoc($res))  
    {
      echo "<tr><td>".$row['année']."</td><td>".$row['prod']."</td><td>
      <form method = 'post'>
        <input type='hidden' name='an' value='".$row['année']."'>
        <input type='number' class='elm' name='val' required>  
        <input type='submit' class='elm' value = 'Modifier' style='cursor: pointer;' name='bot_ev'> 
      </form>
      </td>
      <td>
      <form method = 'post'>
        <input type='hidden' name='an' value='".$row['année']."'>
        <input type='number' class='elm' step='0.001' name='val' required>  
        <input type='submit' class='elm' value = 'Modifier' style='cursor: pointer;' name='botn_ev'> 
      </form>
      </td>
      <td>
        <form method='post'>
          <input type='hidden' value='".$row['année']."' name='ane'>
          <input type='submit' class='elm' style='cursor:pointer;' value='Effacer' name='fev'>
        </form>
      </td>
      </tr>";
    }
    echo "</table>";
    echo "<form method='post'>
              <input type='submit' style='cursor: pointer; margin-left:65px; margin-bottom:20px;' value='Effacer Tout' class='ef' name='atev'>
          </form>";
    $sql = "select * from source where nom_tab = 'ev_pr';";  
    mysqli_query($conn, "SET NAMES 'utf8'"); 
    $res= mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($res); 
    echo "
          <table id='sc-ev'>
          <tr><th>Source</th><th>Action</th></tr> 
          <tr><td>".$row['source'].
          "</td><td>
          <form method='post' > 
            <input name='tx_sc' class='elm' required>
            <input type='submit' class='elm' value='Modifier' style='cursor: pointer;' name='sc_ev'> 
          </form>
          </td></tr>
          </table>
      ";  
      if (isset($_POST['sc_ev'])) 
      {
        extract($_POST); 
        if (trim($tx_sc)!='') 
        {
          $sql = "update source set source ='".$tx_sc."' where nom_tab = 'ev_pr';";  
          mysqli_set_charset($conn,"utf8"); 
          mysqli_query($conn,$sql);
          echo "<script type='text/javascript'>
              window.location.href = 'dash_admin_mdf.php';  
            </script>
          "; 
        }
        else 
        echo "<div id='ms' style='margin-left:350px; margin-bottom:10px;'>source invalide !<br><br><a id='btn-el'>enlever message</a></div>";
      }   
  }
  else 
    echo "<div style='margin-left:50px; margin-top:50px; font-size:20px; border:solid thin; margin-bottom: 20px; width:178px; text-align:center;'>pas d'années !</div>";


  if (isset($_POST['bot_ev'])) 
  {
    extract($_POST); 
    if ($val >=0)
    {
      $sql = "update ev_pr set année = ".$val." where année = ".$an; 
      mysqli_query($conn, "SET NAMES 'utf8'"); 
      mysqli_query($conn,$sql); 
      echo "<script type='text/javascript'>
              window.location.href = 'dash_admin_mdf.php';  
            </script>
      "; 
    } 
    else 
      echo "<div id='ms' style='margin-left:350px; margin-bottom:10px;'>nombre invalide !<br><br><a id='btn-el'>enlever message</a></div>";
  }

  if (isset($_POST['botn_ev'])) 
  {
    extract($_POST); 
    if ($val >=0)
    {
      $sql = "update ev_pr set prod = ".$val." where année = ".$an; 
      mysqli_query($conn, "SET NAMES 'utf8'"); 
      mysqli_query($conn,$sql); 
      echo "<script type='text/javascript'>
              window.location.href = 'dash_admin_mdf.php';  
            </script>
      "; 
    } 
    else 
      echo "<div id='ms' style='margin-left:350px; margin-bottom:10px;'>nombre invalide !<br><br><a id='btn-el'>enlever message</a></div>";
  }

  if (isset($_POST['fev'])) 
  {
    extract($_POST); 
    $sql = "delete from ev_pr where année = ".$ane.";";
    mysqli_set_charset($conn,"utf8"); 
    mysqli_query($conn,$sql);
    echo "<script type='text/javascript'>
              window.location.href = 'dash_admin_mdf.php';  
            </script>
      ";
  }

    if (isset($_POST['atev'])) 
  {
    extract($_POST); 
    $sql = "delete from ev_pr ;";
    mysqli_set_charset($conn,"utf8"); 
    mysqli_query($conn,$sql);
    echo "<script type='text/javascript'>
              window.location.href = 'dash_admin_mdf.php';  
            </script>
      "; 
  }

  mysqli_close($conn);
?>


<h1 id='tit-qt'>Ajouter une année dans le tableau de l'évolution des quantités</h1> 
<form method='post' id='fr-qt'>
  <label>Année</label><br>
  <input type='number' name='an' required><br>
  <label>Quantité collectée</label><br>
  <input type='number' step='0.001' name='qt' required><br>
  <input type='submit' id='md-qt' value='ajouter' style='cursor: pointer;' name='mdqt'> 
</form>

<?php
  if (isset($_POST['mdqt']))
  {
    extract($_POST); 
    if ($an >= 0 && $qt >= 0)
    {
      $conn = new mysqli('localhost', 'root', '', 'givlait');
      mysqli_set_charset($conn,"utf8"); 
      $sql = "insert into lait_col (année, quantité) values(".$an.",".$qt.");";  
      mysqli_query($conn, "SET NAMES 'utf8'"); 
      mysqli_query($conn,$sql);
      mysqli_close($conn);
    }
    else 
      echo "<div id='ms' style='margin-left:350px; margin-bottom:10px;'>une ou plusieurs valeurs est(sont) invalide(s) !<br><br><a id='btn-el'>enlever message</a></div>";
  } 
?>


<?php
  $conn = new mysqli('localhost', 'root', '', 'givlait');
  mysqli_set_charset($conn,"utf8"); 
  $sql = "select * from lait_col;";  
  mysqli_query($conn, "SET NAMES 'utf8'"); 
  $res = mysqli_query($conn,$sql);
  if (mysqli_num_rows($res) > 0) 
  {
    echo "<h1 class='tit-an'>Les années existantes : </h1>";
    echo "<table id='tbl-cl'><tr><th>Année</th><th>Quantité</th><th>Modifier Année</th><th>Modifier Quantité</th><th>Action</th></tr>"; 
    while($row = mysqli_fetch_assoc($res))  
    {
      echo "<tr><td>".$row['année']."</td><td>".$row['quantité']."</td><td>
      <form method = 'post'>
        <input type='hidden' name='an' value='".$row['année']."'>
        <input type='number' class='elm' name='val' required>  
        <input type='submit' class='elm' value = 'Modifier' style='cursor: pointer;' name='bot_cl'> 
      </form>
      </td>
      <td>
      <form method = 'post'>
        <input type='hidden' name='an' value='".$row['année']."'>
        <input type='number' class='elm' step='0.001' name='val' required>  
        <input type='submit' class='elm' value = 'Modifier' style='cursor: pointer;' name='botn_cl'> 
      </form>
      </td>
      <td>
        <form method='post'>
          <input type='hidden' value='".$row['année']."' name='ane'>
          <input type='submit' class='elm' style='cursor:pointer;' value='Effacer' name='fev_cl'>
        </form>
      </td>
      </tr>";
    }
    echo "</table>";
    echo "<form method='post'>
              <input type='submit' style='cursor: pointer; margin-left:65px; margin-bottom:20px;' value='Effacer Tout' class='ef' name='atcl'>
          </form>";
    $sql = "select * from source where nom_tab = 'lait_col';";  
    mysqli_query($conn, "SET NAMES 'utf8'"); 
    $res= mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($res); 
    echo "
          <table id='sc-cl'>
          <tr><th>Source</th><th>Action</th></tr> 
          <tr><td>".$row['source'].
          "</td><td>
          <form method='post' > 
            <input name='tx_sc' class='elm' required>
            <input type='submit' class='elm' value='Modifier' style='cursor: pointer;' name='sc_cl'> 
          </form>
          </td></tr>
          </table>
      ";  
      if (isset($_POST['sc_cl'])) 
      {
        extract($_POST); 
        if (trim($tx_sc)!='') 
        {
          $sql = "update source set source ='".$tx_sc."' where nom_tab = 'lait_col';";  
          mysqli_set_charset($conn,"utf8"); 
          mysqli_query($conn,$sql);
          echo "<script type='text/javascript'>
              window.location.href = 'dash_admin_mdf.php';  
            </script>
          "; 
        }
        else 
        echo "<div id='ms' style='margin-left:350px; margin-bottom:10px;'>source invalide !<br><br><a id='btn-el'>enlever message</a></div>";
      }   
  }
  else 
    echo "<div style='margin-left:50px; margin-top:50px; font-size:20px; border:solid thin; margin-bottom: 20px; width:178px; text-align:center;'>pas d'années !</div>";


  if (isset($_POST['bot_cl'])) 
  {
    extract($_POST); 
    if ($val >=0)
    {
      $sql = "update lait_col set année = ".$val." where année = ".$an; 
      mysqli_query($conn, "SET NAMES 'utf8'"); 
      mysqli_query($conn,$sql); 
      echo "<script type='text/javascript'>
              window.location.href = 'dash_admin_mdf.php';  
            </script>
      "; 
    } 
    else 
      echo "<div id='ms' style='margin-left:350px; margin-bottom:10px;'>nombre invalide !<br><br><a id='btn-el'>enlever message</a></div>";
  }

  if (isset($_POST['botn_cl'])) 
  {
    extract($_POST); 
    if ($val >=0)
    {
      $sql = "update lai_col set quantité = ".$val." where année = ".$an; 
      mysqli_query($conn, "SET NAMES 'utf8'"); 
      mysqli_query($conn,$sql); 
      echo "<script type='text/javascript'>
              window.location.href = 'dash_admin_mdf.php';  
            </script>
      "; 
    } 
    else 
      echo "<div id='ms' style='margin-left:350px; margin-bottom:10px;'>nombre invalide !<br><br><a id='btn-el'>enlever message</a></div>";
  }

  if (isset($_POST['fev_cl'])) 
  {
    extract($_POST); 
    $sql = "delete from lait_col where année = ".$ane.";";
    mysqli_set_charset($conn,"utf8"); 
    mysqli_query($conn,$sql);
    echo "<script type='text/javascript'>
              window.location.href = 'dash_admin_mdf.php';  
            </script>
      ";
  }

    if (isset($_POST['atcl'])) 
  {
    extract($_POST); 
    $sql = "delete from lait_col ;";
    mysqli_set_charset($conn,"utf8"); 
    mysqli_query($conn,$sql);
    echo "<script type='text/javascript'>
              window.location.href = 'dash_admin_mdf.php';  
            </script>
      "; 
  }

  mysqli_close($conn);
?>

<h1 id='tit-tr'>Ajouter une année dans le tableau de la transformation</h1> 
<form method='post' id='fr-tr'>
  <label>Année</label><br>
  <input type='number' name='an' required><br>
  <label>Lait UHT</label><br>
  <input type='number' step='0.001' name='uht' required><br>
  <label>Yaourt</label><br>
  <input type='number' step='0.001' name='yt' required><br>
  <label>Fromage</label><br>
  <input type='number' step='0.001' name='fr' required><br>
  <label>Autres dérivés</label><br>
  <input type='number' step='0.001' name='at'><br>
  <label>Lait en poudre</label><br>
  <input type='number' step='0.001' name='pd' required><br>
  <input type='submit' id='md-tr' value='ajouter' style='cursor: pointer;' name='mdtr'> 
</form>


<?php
  if (isset($_POST['mdtr']))
  {
    extract($_POST); 
    if ($an >= 0 && $uht >= 0 && $yt >= 0 && $fr >= 0 && $at >= 0 && $pd >= 0) 
    {
      $conn = new mysqli('localhost', 'root', '', 'givlait');
      mysqli_set_charset($conn,"utf8"); 
      $sql = "insert into lait_tr (année, uht, yaourt, fromage, autre, poudre) values(".$an.",".$uht.",".$yt.",".$fr.",".$at.",".$pd.");"; 
      mysqli_query($conn, "SET NAMES 'utf8'"); 
      mysqli_query($conn,$sql);
      mysqli_close($conn);
    }
    else 
      echo "<div id='ms' style='margin-left:350px; margin-bottom:10px;'>une ou plusieurs valeurs est(sont) invalide(s) !<br><br><a id='btn-el'>enlever message</a></div>";
  } 
?>

<?php
  $conn = new mysqli('localhost', 'root', '', 'givlait');
  mysqli_set_charset($conn,"utf8"); 
  $sql = "select * from lait_tr;";  
  mysqli_query($conn, "SET NAMES 'utf8'"); 
  $res = mysqli_query($conn,$sql);
  if (mysqli_num_rows($res) > 0) 
  {
    echo "<h1 class='tit-an'>Les années existantes : </h1>";
    echo "<table id='tbl-tr'><tr><th>Année</th><th>Lait UHT</th><th>Yaourt</th><th>Fromage</th><th>Autres dérivés</th><th>Lait en poudre</th><th>Action 1</th><th>Action 2</th><th>Action 3</th></tr>"; 
    while($row = mysqli_fetch_assoc($res))  
    {
      echo "<tr><td>".$row['année']."</td><td>".$row['uht']."</td><td>".$row['yaourt']."</td><td>".$row['fromage']."</td><td>".$row['autre']."</td><td>".$row['poudre'].
      "<td><form method = 'post'>
        <input type='hidden' name='an' value='".$row['année']."'>
        <input type='number' class='elm' name='val' style='margin-bottom: 10px;' required>  
        <input type='submit' class='elm' value = 'Modifier' style='cursor: pointer;' name='bot_tr'> 
      </form>
      </td>
      <td>
      <form method = 'post'>
        <input type='hidden' name='an' value='".$row['année']."'>
        <select name='choix' class='elm' style='margin-bottom: 10px;'>
          <option value='uht'>uht</option>
          <option value='yaourt'>yaourt</option>
          <option value='fromage'>fromage</option>
          <option value='autre'>autre</option>
          <option value='poudre'>poudre</option>
        </select>
        <input type='number' class='elm' step='0.001' name='val' style='margin-bottom: 10px;' required>  
        <input type='submit' class='elm' value = 'Modifier' style='cursor: pointer;' name='botn_tr'> 
      </form>
      </td>
      <td>
        <form method='post'>
          <input type='hidden' value='".$row['année']."' name='ane'>
          <input type='submit' class='elm' style='cursor:pointer;' value='Effacer' name='fev_tr'>
        </form>
      </td>
      </tr>";
    }
    echo "</table>";
    echo "<form method='post'>
              <input type='submit' style='cursor: pointer; margin-left:65px; margin-bottom:20px;' value='Effacer Tout' class='ef' name='attr'>
          </form>";
    $sql = "select * from source where nom_tab = 'lait_tr';";  
    mysqli_query($conn, "SET NAMES 'utf8'"); 
    $res= mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($res); 
    echo "
          <table id='sc-tr'>
          <tr><th>Source</th><th>Action</th></tr> 
          <tr><td>".$row['source'].
          "</td><td>
          <form method='post' > 
            <input name='tx_sc' class='elm' required>
            <input type='submit' class='elm' value='Modifier' style='cursor: pointer;' name='sc_tr'> 
          </form>
          </td></tr>
          </table>
      ";  
      if (isset($_POST['sc_tr'])) 
      {
        extract($_POST); 
        if (trim($tx_sc)!='') 
        {
          $sql = "update source set source ='".$tx_sc."' where nom_tab = 'lait_tr';";  
          mysqli_set_charset($conn,"utf8"); 
          mysqli_query($conn,$sql);
          echo "<script type='text/javascript'>
              window.location.href = 'dash_admin_mdf.php';  
            </script>
          "; 
        }
        else 
        echo "<div id='ms' style='margin-left:350px; margin-bottom:10px;'>source invalide !<br><br><a id='btn-el'>enlever message</a></div>";
      }   
  }
  else 
    echo "<div style='margin-left:50px; margin-top:50px; font-size:20px; border:solid thin; margin-bottom: 20px; width:178px; text-align:center;'>pas d'années !</div>";


  if (isset($_POST['bot_tr'])) 
  {
    extract($_POST); 
    if ($val >=0)
    {
      $sql = "update lait_tr set année = ".$val." where année = ".$an; 
      mysqli_query($conn, "SET NAMES 'utf8'"); 
      mysqli_query($conn,$sql); 
      echo "<script type='text/javascript'>
              window.location.href = 'dash_admin_mdf.php';  
            </script>
      "; 
    } 
    else 
      echo "<div id='ms' style='margin-left:350px; margin-bottom:10px;'>nombre invalide !<br><br><a id='btn-el'>enlever message</a></div>";
  }

  if (isset($_POST['botn_tr'])) 
  {
    extract($_POST); 
    if ($val >=0)
    {
      $sql = "update lait_tr set ".$choix." = ".$val." where année = ".$an; 
      mysqli_query($conn, "SET NAMES 'utf8'"); 
      mysqli_query($conn,$sql); 
      echo "<script type='text/javascript'>
              window.location.href = 'dash_admin_mdf.php';  
            </script>
      "; 
    } 
    else 
      echo "<div id='ms' style='margin-left:350px; margin-bottom:10px;'>nombre invalide !<br><br><a id='btn-el'>enlever message</a></div>";
  }

  if (isset($_POST['fev_tr'])) 
  {
    extract($_POST); 
    $sql = "delete from lait_tr where année = ".$ane.";";
    mysqli_set_charset($conn,"utf8"); 
    mysqli_query($conn,$sql);
    echo "<script type='text/javascript'>
              window.location.href = 'dash_admin_mdf.php';  
            </script>
      ";
  }

    if (isset($_POST['attr'])) 
  {
    extract($_POST); 
    $sql = "delete from lait_tr ;";
    mysqli_set_charset($conn,"utf8"); 
    mysqli_query($conn,$sql);
    echo "<script type='text/javascript'>
              window.location.href = 'dash_admin_mdf.php';  
            </script>
      "; 
  }

  mysqli_close($conn);
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