<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="images/favicone.png">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="lait.css">
  <title id="tt-pg">GIVLAIT | Lait</title>
</head>
<body>
    <div id='info'>
    <div class="header-wrapper">
      <div class="logo-wrapper">
        <a href="index.php"><img src="images/Rectangle 89.png" class="logo"></a>
        <a href="index.php" class="logo-text">Groupement Interprofessionnel<br>des Viandes Rouges et du Lait</a>
      </div>
      <div class="flag-wrapper">
        <img class="flag" src="images/Tunisia flag.png">
        <div class="text-flag">République Tunisienne<br>Ministère de l’Agricultutre, des Ressources Hydrauliques et de la Pêche</div>
      </div>
    </div>
  </div>
  <nav>
      <ul id="br-nav">
        <li class="item-nav parent"><span class="it-hv"><a href="index.php" id="item-giv">GIVLAIT</a><img class="ic-dp" src="images/dropdown.png"></span>
          <div class="fils" id="dp-giv">
              <a href="prgiv.html#tt-org" class="item-dp" id="item-og" style="color: black; font-size: 15px; font-weight:bold;"><img class="icr-dp" src="images/right-arrow.png">Organigramme</a>
          </div> 
        </li>
        <li class="item-nav parent"><span class="it-hv"><a href="index.php#Programmes" id="item-pg">Programmes</a><img class="ic-dp" src="images/dropdown.png"></span>
          <div class="fils" id="dp-pg">
            <a href="reg.php#br-nav" id="item-rg" class="item-dp" style="color: black; font-size:15px;font-weight:bold;"><img class="icr-dp" src="images/right-arrow.png">Réglementations</a>
          </div>
        </li>
        <li id="anm-sl" class="item-nav"><a href="index.php#Missions" id="item-ms">Missions</a></li> 
        <li class="item-nav parent"><span class="it-hv"><a href="index.php#Élevage-Filières" id="item-el">Élevage</a><img id="icdp-el" class="ic-dp" src="images/dropdown.png"></span>
          <div class="fils" id="dp-el">
            <ul> 
              <li style="display: block; margin-bottom: 10px;"><a href="elevage.php#para-int" id="st-el" class="item-dp" style="color: black; font-size:15px;font-weight:bold;"><img class="icr-dp" src="images/right-arrow.png">Systèmes d'Élevage<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;et Types d'Exploitation</a></li>
              <li style="display: block;"><a href="elevage.php#tt-st" class="item-dp it-st" id="stel" style="color: black; font-size:15px;font-weight:bold;"><img class="icr-dp" src="images/right-arrow.png">Statistiques</a></li>
            </ul>
          </div>
        </li> 
        <li class="item-nav parent"><span class="it-hv"><a href="index.php#Élevage-Filières" id="item-vd">Viandes Rouges</a><img class="ic-dp" src="images/dropdown.png"></span>
          <div class="fils" id="dp-vd">
            <ul>
              <li style="display: block; margin-bottom: 10px;font-weight:bold;"><a href="viandes.php#tt-ml" class="item-dp itm-ml" id="ml-vd" style="color: black; font-size:15px;"><img class="icr-dp" src="images/right-arrow.png">Maillons<a/></li> 
              <li style="display: block; margin-bottom: 10px;font-weight:bold;"><a href="viandes.php#tt-asp" id="itm-asp" class="item-dp" style="color: black; font-size:15px;"><img class="icr-dp" src="images/right-arrow.png">Aspects Réglementaires<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;et Institutionnels</a></li>
              <li style="display: block; margin-bottom: 10px;font-weight:bold;"><a href="viandes.php#tt-st" id="st-vd" class="item-dp it-st" style="color: black; font-size:15px;"><img class="icr-dp" src="images/right-arrow.png">Statistiques</a></li>
              <li style="display: block;"><a href="viandes.php#tt-doc" id="dc-vd" class="item-dp it-dc" style="color: black; font-size:15px;font-weight:bold;"><img class="icr-dp" src="images/right-arrow.png">Documents</a></li>
            </ul>
          </div>
        </li> 
        <li id="it-lat" class="item-nav parent"><span class="it-hv"><a href="index.php#Élevage-Filières" id="item-lt">Lait</a><img id="ic-lt" class="ic-dp" src="images/dropdown.png"></span>
          <div id="dp-lt" class="fils">
            <ul>
               <li style="display: block; margin-bottom: 10px;font-weight:bold;"><a href="#ml" id="ml-lt" class="item-dp itm-ml" style="color: black; font-size:15px;"><img class="icr-dp" src="images/right-arrow.png">Maillons</a></li>
              <li style="display: block;"><a href="#tt-doc"  id="dc-lt" class="item-dp it-dc" style="color: black; font-size:15px;font-weight:bold;"><img class="icr-dp" src="images/right-arrow.png">Documents</a></li>
            </ul>
          </div>
        </li>
        <li id="lgs"><button id="im-ar" onclick="arabesttt();arabestt();arabest();arabe();">AR</button> | <a id="im-fr" style="cursor: pointer;">FR</a></li>
        <li id="contact"><a href="contact.php" id="item-ct">Contact</a></li>
      </ul>  
    </nav>
    <div class="lait-header">
      <h1 class="title pres" id='pr'>Présentation</h1>
      <hr class="line pres">
      <p class="header-text">       
        La filière laitière en Tunisie joue un rôle crucial dans l'économie nationale et dans la sécurité   alimentaire du pays. Elle représente l'un des secteurs agro-industriels les plus importants.
        <br>
        <br>
        Elle couvre un ensemble de maillons allant de la production à la Distribution et consommation
      </p>
    </div>
    <section style='height:650px;'>
      <h1 class="title maillons-title" id='ml'>Les différents maillons de la filière</h1>
      <hr class="line">
      <img class="maillons-image border" src="images/lait_maillons.png" alt="">
    </section>
    <div class="production" style="height: 550px;">
      <h5 class="sub-title">Production</h5>
      <hr class="sub-line" id='l-pro'>
      <p class="prod-text">En Tunisie l'élevage bovin représente une composante importante dans la production agricole et dans l'économie nationale. Il a été classé parmi les secteurs prioritaires du fait qu'il génère deux produits stratégiques (lait et viande).
      </p>
      <img class="border" id="prod-pic" src="images/cow.jpg" alt="">
    </div>
    <?php
      $conn = new mysqli('localhost', 'root', '', 'givlait');
      mysqli_set_charset($conn,"utf8"); 
      $sql = "select * from lait_pr order by année ASC;";
      mysqli_query($conn, "SET NAMES 'utf8'"); 
      $res = mysqli_query($conn,$sql); 
      if (mysqli_num_rows($res) > 0) 
      {
        echo "<h1 class='tit-sta'>Evolution des effectifs des bovins</h1>
              <div class='unt' id='uf'>Unité : Mille unités femelles</div>
        ";
        echo "<table class='tb-sta'><tr><th class='an'>Année</th><th id='trp'>Race Pure</th><th id='trl'>Race Locale Croisée</th><th id='ttl'>Total</th></tr>";  
        while($row = mysqli_fetch_assoc($res)) 
          echo "<tr><td>".$row['année']."</td><td>".$row['rc_pr']."</td><td>".$row['rc_lc']."</td><td>".($row['année'] + $row['rc_lc'] + $row['rc_lc'])."</td></tr>";
        echo "</table>"; 
        $sql = "select * from source where nom_tab = 'lait_pr';"; 
        mysqli_query($conn, "SET NAMES 'utf8'"); 
        $res = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($res);
        echo "<div class='sr'><span class='so'>Source</span>: ".$row['source']."</div>"; 
      }
      $sql = "select * from ev_pr order by année ASC;"; 
      mysqli_query($conn, "SET NAMES 'utf8'"); 
      $res = mysqli_query($conn,$sql); 
      if (mysqli_num_rows($res) > 0) 
        {
          echo "<h1 class='tit-pev'>Evolution de la production laitière</h1>"; 
          echo "<div class='prra'>La production laitière à connu un essor remarquable durant les dernières années suite à un ensemble de mesures d'incitation touchant tous les maillons de la filière.</div>"; 
          echo "
              <h1 class='tit-sta'>Evolution de la production laitière</h1>
              <div class='unt ml'>Unité : Million de litres</div>
          <table class='tb-sta'><tr><th class='an'>Année</th><th id='tpl'>Production de lait</th></tr>"; 
          while($row = mysqli_fetch_assoc($res)) 
            echo "<tr><td>".$row['année']."</td><td>".$row['prod']."</td></tr>"; 
          echo "</table>";
          $sql = "select * from source where nom_tab = 'ev_pr';"; 
          mysqli_query($conn, "SET NAMES 'utf8'"); 
          $res = mysqli_query($conn,$sql);
          $row = mysqli_fetch_assoc($res);
          echo "<div class='sr'><span class='so'>Source</span>: ".$row['source']."</div>";
        } 
       mysqli_close($conn); 
    ?>
    <div class="collecte" style='margin-top:  150px; height: 570px;'>
      <h1 class="sub-title">Collecte</h1>
      <hr class="sub-line" id='l-col'>
      <div class="coll-wrapper">
        <img class="border" src="images/collecte_img.jpg" >
      <p class="coll-text">
        L'activité de la collecte du lait constitue le deuxième maillon de la filière laitière. Il permet la valorisation de la production laitière en plus de son effet d'entraînement sur le développement du secteur.
        En 2022, près de 234 centres de collecte sont en activité (234 centres de collecte ont obtenu l'agriment sanitaire vétérinaire) avec une capacité globale de collecte dépassant les 2,9 millions de litres de lait par jour. Le lait collecté représente plus de 60.9 % du lait produit et les centrales laitières s'approvisionnent à hauteur de 84.5% du lait frais au près des centres de collecte.
      </p>
      </div>
    </div>
    <?php
      $conn = new mysqli('localhost', 'root', '', 'givlait');
      mysqli_set_charset($conn,"utf8"); 
      $sql = "select * from lait_col order by année ASC;";
      mysqli_query($conn, "SET NAMES 'utf8'"); 
      $res = mysqli_query($conn,$sql); 
      if (mysqli_num_rows($res) > 0) 
      {
        echo "<h1 class='tit-sta'>Evolution des quantités collectées</h1>
              <div class='unt ml'>Unité : Million de litres</div>
        ";
        echo "<table class='tb-sta'><tr><th class='an'>Année</th><th id='tqc'>Quantité Collectée</th></tr>";  
        while($row = mysqli_fetch_assoc($res)) 
          echo "<tr><td>".$row['année']."</td><td>".$row['quantité']."</td></tr>"; 
        echo "</table>"; 
        $sql = "select * from source where nom_tab = 'lait_col';"; 
        mysqli_query($conn, "SET NAMES 'utf8'"); 
        $res = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($res);
        echo "<div class='sr'><span class='so'>Source</span>: ".$row['source']."</div>"; 
      } 
    ?>

    <div class="transformation" style='margin-top: 150px; height: 590px;'>
      <h1 class="sub-title">Transformation</h1>
      <hr class="sub-line" id='l-tran'>
      <p class="tran-text">
        Ce maillon comporte plus de 45 unités industrielles d'une capacité de transformation de 5,6 millions de litres par jours ainsi que d'un réseau de transformateurs artisanaux repartis sur toute la République.
      </p>
      <div class="img-wrapper">
        <img class="border" src="images/tranformation-pic.jpg" >
      </div>
    </div>

    <?php
      $conn = new mysqli('localhost', 'root', '', 'givlait');
      mysqli_set_charset($conn,"utf8"); 
      $sql = "select * from lait_tr order by année ASC;";
      mysqli_query($conn, "SET NAMES 'utf8'"); 
      $res = mysqli_query($conn,$sql); 
      if (mysqli_num_rows($res) > 0) 
      {
        echo "<h1 class='tit-sta'>Les produits de la transformation du lait</h1>
              <div class='unt ml'>Unité : Million de litres</div>
        ";
        echo "<table class='tb-sta'><tr><th class='an'>Année</th><th id='tuht'>Lait UHT</th><th id='tyt'>Yaourt</th><th id='tfm'>Fromage</th><th id='tat'>Autres dérivés</th><th id='tlp'>Lait en poudre</th></tr>";  
        while($row = mysqli_fetch_assoc($res)) 
          echo "<tr><td>".$row['année']."</td><td>".$row['uht']."</td><td>".$row['yaourt']."</td><td>".$row['fromage']."</td><td>".$row['autre']."</td><td>".$row['poudre']."</td></tr>"; 
        echo "</table>"; 
        $sql = "select * from source where nom_tab = 'lait_tr';"; 
        mysqli_query($conn, "SET NAMES 'utf8'"); 
        $res = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($res);
        echo "<div class='sr'><span class='so'>Source</span>: ".$row['source']."</div>"; 
      } 
    ?>


    <div class="dist-cons" style='height: 230px;'>
      <h1 class="sub-title">Distribution et consommation</h1>
      <hr class="sub-line" style='margin-bottom: 40px;' id='l-dis'>
      <p class="dsit-text">
        Les circuits de distribution et de commercialisation du lait qui concerne les produits artisanaux sont mal connus et non identifiés.
        La consommation du lait et des produits laitiers a évolué suite aux changements des habitudes alimentaires, à l'amélioration du pouvoir d'achat et au développement de la production, elle est de l'ordre de 109,9 l/habitant Source INS 2017.
      </p>
    </div>

    <section style="margin-top: 30px;">
    <h1 id="tt-doc">Documents</h1>
    <hr id="li-doc"> 
    <?php
      $conn = new mysqli('localhost', 'root', '', 'givlait');
      mysqli_set_charset($conn,"utf8"); 
      $sql = "select * from documents ;";
      mysqli_query($conn, "SET NAMES 'utf8'"); 
      $res = mysqli_query($conn,$sql);
      if (mysqli_num_rows($res) > 0) 
      {
        echo "<ul id='ls-dc'>";
        while($row = mysqli_fetch_assoc($res))  
        {
          if ($row['lait'] == 'oui') 
            echo"<li><a class='m-dc' href='docs/".$row['nom_doc']."'>".substr($row['nom_doc'], 0, strlen($row['nom_doc'])-5)."</a></li>";
        }
        echo "</ul>";
      }
      mysqli_close($conn); 
    ?>
  </section>
    <footer> 
    <div id="ct-logo">   
      <img src="images/logo.png">
      <span id="grp-nm">  
        <span id="lb">GIV<span id="lr">L<span id="lv">AIT</span></span></span>
      </span>
    </div>
    <div id="ctn-ft">  
        <div id="liens-ft" class="item-ft"> 
          <a href="prgiv.html" id="li-gv" class="lien-gr lien">GIVLAIT</a>
          <a href="prgiv.html#br-nav" class="slien li-pr lien">Présentation</a>
          <a href="prgiv.html#tt-org" id="li-og" class="slien lien">Organigramme</a>
          <a href="programmes.html" id="li-pg" class="lien-gr lien">Programmes</a>
          <a href="programmes.html#br-nav" class="slien li-pr lien">Présentation</a>
          <a href="reg.php#br-nav" id="li-rg" class="slien lien">Réglementations</a>
          <a href="missions.html" id="li-ms" class="lien-gr lien">Missions</a>
          <a href="missions.html#br-nav" class="slien li-pr lien">Présentation</a>
          <a href="elevage.php" id="li-el" class="lien-gr lien">Élevage</a>
          <a href="elevage.php#br-nav" class="slien li-pr lien">Présentation</a>
          <a href="elevage.php#para-int" id="li-sy" class="slien lien">Systèmes d'élevage<br>et types d'exploitation</a> 
          <a href="elevage.php#tt-st"class="slien li-st lien">Statistiques</a> 
          <a href="viandes.php" id="li-vd" class="lien-gr lien">Viandes Rouges</a>
          <a href="viandes.php#br-nav" class="slien li-pr lien">Présentation</a>
          <a href="viandes.php#tt-ml" class="slien liml lien">Maillons</a> 
          <a href="viandes.php#tt-asp" id="li-asp" class="slien lien">Aspects Réglementaires<br>et Instituionnels</a>
          <a href="viandes.php#tt-doc"class="slien li-dc lien">Documents</a>
          <a href="viandes.php#tt-st"class="slien li-st lien">Statistiques</a>
          <a href="lait.php" id="li-lt" class="lien-gr lien">Lait</a>
          <a href="#info" class="slien li-pr lien">Présentation</a>
          <a href="#ml" class="slien liml lien">Maillons</a>
          <a href="#tt-doc"class="slien li-dc lien">Documents</a>  
        </div> 
        <div class="item-ft item-rs"> 
          <div id="ct" class="titre-pt">CONTACT</div> 
          <a href="contact.php" id="lien-cot">Contactez-nous</a> 
          <div class="cdn-gr"><img src="images/tel.png" class="img-cot"><span>+216 71 28 25 11<br>+216 71 28 62 48</span></div>
          <div class="cdn-gr"><img src="images/fax.png" class="img-cot">+216 71 28 98 57</div>
          <div class="cdn-gr"><img src="images/email.png" class="img-cot">givlait@planet.tn</div>
        </div> 
        <div class="item-ft item-rs"> 
          <div id="loc" class="titre-pt">LOCALISATION</div>
          <iframe id="ct-loca" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3193.8390413684915!2d10.180626775064088!3d36.822376766450375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd348f34c7acaf%3A0xcf1be98880f2a294!2sGIVLAIT!5e0!3m2!1sfr!2stn!4v1690826095925!5m2!1sfr!2stn" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <div id="adresse">8, rue Claude Bernard, cité jardins <br>1002-Tunis Belvédère-Tunisie</div>
        </div> 
    </div>
  </footer>
</body>
<script type="text/javascript">
  function arabe() 
  { 
    const ht = document.getElementsByTagName("html");
    ht.dir = "rtl"; 
    ht.lang = "ar";  
    const ttpg = document.getElementById("tt-pg");   
    ttpg.innerHTML = "GIVLAIT | قطاع الألبان";       
    const txlg = document.getElementsByClassName("logo-text");   
    txlg[0].innerHTML = "المجمع المهني المشترك<br> للحوم الحمراء و الألبان";
    txlg[0].style.fontSize = "15px"; 
    txlg[0].style.right = "105px"; 
    const txdp = document.getElementsByClassName("text-flag");    
    txdp[0].innerHTML = "الجمهورية التونسية<br> وزارة الــفــلاحــة والموارد المائية<br> والصيد البحري"; 
    txdp[0].style.fontSize = "14px";  
    const cntdp = document.getElementsByClassName("flag-wrapper"); 
    cntdp[0].style.width = "18%"; 
    const itgv = document.getElementById("item-giv"); 
    itgv.innerHTML = "المجمع"; 
    itgv.style.fontSize = "20px";  
    const itpg = document.getElementById("item-pg"); 
    itpg.innerHTML = "البرامج"; 
    itpg.style.fontSize = "20px";
    const itms = document.getElementById("item-ms");
    itms.innerHTML = "المهام"; 
    itms.style.fontSize = "20px";
    const itel = document.getElementById("item-el"); 
    itel.innerHTML = "تربية المواشي ";  
    itel.style.fontSize = "20px";
    const itvd = document.getElementById("item-vd");  
    itvd.innerHTML = "اللحوم الحمراء";
    itvd.style.fontSize = "20px"; 
    const itlt = document.getElementById("item-lt"); 
    itlt.innerHTML = "الألبان";
    itlt.style.fontSize = "20px";    
    const iclt = document.getElementById("ic-lt"); 
    iclt.style.position = "absolute"; 
    iclt.style.left = "302px"; 
    iclt.style.top = "22px";       
    const itmnv = document.getElementsByClassName("item-nav");    
    for(let i = 0 ; i < itmnv.length ; i++) 
    {
      itmnv[i].style.marginLeft = "120px"; 
      itmnv[i].style.fontWeight = "bold";   
    }
  }
  function arabest()
  {
    const itog = document.getElementById("item-og");
    itog.innerHTML = "الهيكل التنظيمي  <img class='icr-ar' src='images/right-arrow.png'>"; 
    itog.style.marginLeft = "8px";     
    const itdp = document.getElementsByClassName("item-dp"); 
    for(let i = 0 ; i < itdp.length ; i++) 
      itdp[i].style.fontSize = "17px";  
    const dpgv = document.getElementById("dp-giv");
    dpgv.style.left = "1202px"; 
    dpgv.style.top = "38px";
    dpgv.style.borderTopLeftRadius = "10px"; 
    dpgv.style.borderTopRightRadius = "0";  
    const icrdp = document.getElementsByClassName("icr-dp"); 
    for(let i = 0 ; i < icrdp.length ; i++)  
      icrdp[i].style.display = "none"; 
    const lgs = document.getElementById("lgs"); 
    lgs.style.marginLeft = "150px"; 
    const itrg = document.getElementById("item-rg"); 
    itrg.innerHTML = "القوانين  <img class='icr-ar' src='images/right-arrow.png'>";
    itrg.style.marginLeft = "4px";
    const dppg = document.getElementById("dp-pg");
    dppg.style.left = "1066px"; 
    dppg.style.top = "39px"; 
    dppg.style.borderTopLeftRadius = "10px"; 
    dppg.style.borderTopRightRadius = "0"; 
    const itdc = document.getElementsByClassName("it-dc"); 
    for(let i = 0 ; i < itdc.length ; i++) 
      itdc[i].innerHTML = "الوثائق  <img class='icr-ar' src='images/right-arrow.png'>";       
    const itst = document.getElementsByClassName("it-st"); 
    for(let i = 0 ; i < itst.length ; i++) 
      itst[i].innerHTML = "الإحصائيات  <img class='icr-ar' src='images/right-arrow.png'>";  
    const dpvd = document.getElementById("dp-vd");
    dpvd.style.top = "38px";
    dpvd.style.left = "386px";
    dpvd.style.borderTopLeftRadius = "10px"; 
    dpvd.style.borderTopRightRadius = "0";     
    const dplt = document.getElementById("dp-lt"); 
    dplt.style.top = "38px"; 
    dplt.style.left = "273px";
    dplt.style.borderTopLeftRadius = "10px"; 
    dplt.style.borderTopRightRadius = "0";  
    const imar = document.getElementById("im-ar"); 
    imar.innerHTML = "عربية";  
    imar.style.fontWeight = "bold";
    imar.style.fontSize = "15px";  
    const imfr = document.getElementById("im-fr");
    imfr.innerHTML = "فرنسية"; 
    imfr.style.fontWeight = "bold"; 
    imfr.style.fontSize = "15px"; 
    const itct = document.getElementById("item-ct"); 
    itct.innerHTML = "تواصل"; 
    const btct = document.getElementById("contact"); 
    btct.style.marginLeft = "50px"; 
    btct.style.fontWeight = "bold"; 
    itmct = document.getElementById("item-ct"); 
    itmct.style.fontSize = "18px";     
    const ls = document.getElementById("lgs"); 
    ls.style.marginLeft ="10px";
    ls.style.marginRight = "0"; 
    const icdpel = document.getElementById("icdp-el"); 
    icdpel.style.position = "absolute"; 
    icdpel.style.top = "24px"; 
    icdpel.style.left = "696px";  
    const itmml = document.getElementsByClassName("itm-ml"); 
    for(let i = 0 ; i < itmml.length ; i++)
      itmml[i].innerHTML = "الحلقات  <img class='icr-ar' src='images/right-arrow.png'>";  
    const itmasp = document.getElementById("itm-asp"); 
    itmasp.innerHTML = "الجوانب التنظيمية والمؤسسية <img class='icr-ar' src='images/right-arrow.png'>"; 
    itmasp.style.marginLeft = "4px";   
    const stel = document.getElementById("st-el"); 
    stel.innerHTML = "نظم تربية الماشية و أنواع المزارع  <img class='icr-ar' src='images/right-arrow.png'>"; 
    const mlvd = document.getElementById("ml-vd"); 
    mlvd.style.marginLeft = "125px";     
    const dcvd = document.getElementById("dc-vd"); 
    dcvd.style.marginLeft = "127px"; 
    const stvd = document.getElementById("st-vd"); 
    stvd.style.marginLeft = "102px"; 
    const mllt = document.getElementById("ml-lt"); 
    mllt.style.marginLeft = "7px";  
    const dclt = document.getElementById("dc-lt"); 
    dclt.style.marginLeft = "8px";
   }
   function arabestt() 
   {
    const stel = document.getElementById("stel"); 
    stel.style.marginLeft = "126px";  
    const stell = document.getElementById("st-el"); 
    stell.style.marginLeft = "5px"; 
    const dpel = document.getElementById("dp-el"); 
    dpel.style.position = "absolute";  
    dpel.style.left = "580px"; 
    dpel.style.top = "38px"; 
    dpel.style.borderTopLeftRadius = "10px"; 
    dpel.style.borderTopRightRadius = "0";
    const ft = document.getElementsByTagName("footer"); 
    ft[0].style.height = "790px";  
    const ct = document.getElementById("ct"); 
    ct.innerHTML ="التواصل"; 
    ct.style.textAlign = "right";
    ct.style.fontSize = "35px"; 
    ct.style.fontWeight = "bold"; 
    ct.style.position = "relative"; 
    ct.style.left = "-45px";   
    const lcot = document.getElementById("lien-cot"); 
    lcot.innerHTML = "اتصل بنا";
    lcot.style.textAlign = "right"; 
    lcot.style.fontSize = "30px"; 
    lcot.style.marginLeft = "166px"; 
    const loc = document.getElementById("loc"); 
    loc.innerHTML = "الموقع";
    loc.style.fontWeight = "bold"; 
    loc.style.textAlign = "right";
    loc.style.fontSize = "30px"; 
    loc.style.position = "relative"; 
    loc.style.left = "-22px";  
    const ad = document.getElementById("adresse"); 
    ad.innerHTML = "8، شارع كلود برنارد، حي الحدائق، 1002-تونس البلفيدار-تونس"; 
    ad.dir = "rtl";  
    ad.style.textAlign = "right"; 
    ad.style.fontWeight = "bold"; 
    ad.style.fontSize = "20px";   
    ad.style.width = "240px"; 
    ad.style.marginLeft = "66px"; 
    const ligv = document.getElementById("li-gv"); 
    ligv.innerHTML = "المجمع";   
    const ligr = document.getElementsByClassName("lien-gr"); 
    for(let i = 0 ; i < ligr.length ; i++)
    {
      ligr[i].style.textAlign = "right"; 
      ligr[i].style.fontSize = "20px"; 
      ligr[i].style.fontWeight = "bold"
      ligr[i].style.marginLeft = "30px"; 
      ligr[i].style.width = "200px"; 
    } 
    const lipg = document.getElementById("li-pg"); 
    lipg.innerHTML = "البرامج";
    const lims = document.getElementById("li-ms"); 
    lims.innerHTML = "المهام";  
    const liel = document.getElementById("li-el"); 
    liel.innerHTML = "تربية المواشي";
    const livd = document.getElementById("li-vd"); 
    livd.innerHTML = "اللحوم الحمراء"; 
    const lilt = document.getElementById("li-lt"); 
    lilt.innerHTML = "الألبان";  
    const slien = document.getElementsByClassName("slien"); 
    for(let i = 0 ; i < slien.length ; i++) 
    { 
      slien[i].style.width = "200px"; 
      slien[i].style.marginLeft = "10px";  
      slien[i].style.textAlign = "right"; 
      slien[i].style.fontSize = "18px";  
    }
    const lipr = document.getElementsByClassName("li-pr"); 
    for(let i = 0 ; i < lipr.length ; i++) 
      lipr[i].innerHTML = "التقديم"; 
    const liog = document.getElementById("li-og"); 
    liog.innerHTML = "الهيكل التنظيمي"; 
    const lirg = document.getElementById("li-rg"); 
    lirg.innerHTML = "القوانين";
    const lisy = document.getElementById("li-sy"); 
    lisy.innerHTML = "نظم تربية الماشية و أنواع المزارع";  
    const liml = document.getElementsByClassName("liml"); 
    for(let i = 0 ; i < liml.length ; i++) 
      liml[i].innerHTML = "الحلقات";
    const lidc = document.getElementsByClassName("li-dc"); 
    for(let i = 0 ; i < lidc.length ; i++) 
      lidc[i].innerHTML = "الوثائق";  
    const list = document.getElementsByClassName("li-st"); 
    for(let i = 0 ; i < list.length ; i++) 
      list[i].innerHTML = "الإحصائيات";
    const liasp = document.getElementById("li-asp"); 
    liasp.innerHTML = "الجوانب التنظيمية و المؤسسية";
    const title = document.getElementsByClassName("title");
    title[0].innerHTML = "تقديم القطاع";
    title[0].dir = "rtl";
    title[0].style.width = "200px";
    title[0].style.marginLeft = "1073px";
    const line = document.getElementsByClassName("line");
    line[0].style.marginLeft = "1207px";
    line[0].style.width = "67px";
    const headerText = document.getElementsByClassName("header-text");
    headerText[0].innerHTML = "يلعب قطاع الألبان في تونس دور حاسم في الاقتصاد الوطني وفي الأمن الغذائي للبلد. وهو يمثل أحد أهم القطاعات الصناعية الزراعية. <br><br>يتكون القطاع من مجموعة من الروابط من الإنتاج إلى التوزيع والاستهلاك.";
    headerText[0].dir = "rtl"
    headerText[0].style.fontSize = "30px";
    headerText[0].style.textAlign = "right";
    headerText[0].style.marginLeft = "750px";
    headerText[0].style.fontWeight = "bold";
    title[1].innerHTML = "حلقات القطاع";
    title[1].style.marginLeft = "1100px";
    line[1].style.marginLeft = "1160px"; 
    line[1].style.width = "150px"; 
    const img = document.getElementsByClassName("maillons-image");
    img[0].src = "images/maillonLait_AR.png";
    img[0].style.marginLeft = "90px"; 
    const subTitle = document.getElementsByClassName("sub-title");
    subTitle[0].innerHTML = "الإنتاج";
    subTitle[0].style.marginLeft = "1179px";
    subTitle[0].style.marginBottom = "100px";
    const subLine = document.getElementsByClassName("sub-line");
    subLine[0].style.marginLeft = "1180px";
    subLine[0].style.marginTop = "-100px";
    subLine[0].style.width = "78px";
    subLine[0].style.marginBottom = "150px";
    const prodText = document.getElementsByClassName("prod-text");
    prodText[0].innerHTML = "تمثل تربية الماشية عنصرا هاما في الإنتاج الزراعي وفي الاقتصاد الوطني. وقد تم تصنيفها ضمن القطاعات ذات الأولوية لأنها تنتج منتجين استراتيجيين (الحليب واللحوم).";
    prodText[0].style.textAlign = "right";
    prodText[0].style.fontSize = "34px";
    prodText[0].style.fontWeight = "bold";
    prodText[0].dir = "rtl";
    subTitle[1].innerHTML = "الجمع";
    subTitle[1].style.marginLeft = "1190px";
    subLine[1].style.marginLeft = "1192px";
    subLine[1].style.width = "70px";
    const collText = document.getElementsByClassName("coll-text");
    collText[0].innerHTML = "نشاط جمع الحليب هو الحلقة الثانية في سلسلة منتجات الألبان. وهو يسمح بتثمين إنتاج الحليب بالإضافة إلى تأثيره المتتالي على تنمية القطاع. في عام 2022، يعمل ما يقرب من 234 مركزًا للتجميع (حصل 234 مركزًا على موافقة بيطرية صحية) بسعة تجميع إجمالية تتجاوز 2.9 مليون لتر من الحليب يوميًا. يمثل الحليب الذي تم جمعه أكثر من 60.9٪ من الحليب المنتج و مراكز التجميع تحوي 84.5٪ من الحليب الطازج.";
    collText[0].style.fontSize = "28px";
    collText[0].style.fontWeight = "bold";
    collText[0].dir = "rtl";
    subTitle[2].innerHTML = "التحويل";
    subTitle[2].style.marginLeft = "1170px";
    subLine[2].style.marginLeft = "1170px";
    subLine[2].style.width = "95px";
    const trans = document.getElementsByClassName("tran-text");
    trans[0].innerHTML = "تشمل هذه الوصلة أكثر من 45 وحدة صناعية تبلغ طاقتها التجهيزية 5.6 ملايين لتر يوميا، فضلا عن شبكة من المحولات الحرفية الموزعة في جميع أنحاء الجمهورية.";
    trans[0].style.marginLeft = "150px";
    trans[0].dir = "rtl";
    trans[0].style.fontWeight = "bold";
    trans[0].style.fontSize = "30px";
    subTitle[3].innerHTML = "التوزيع والاستهلاك";
    subTitle[3].style.marginLeft = "1016px";
    subLine[3].style.marginLeft = "1018px";
    subLine[3].style.width = "240px";
    const dist = document.getElementsByClassName("dsit-text");
    dist[0].innerHTML = "قنوات توزيع وتسويق الحليب للمنتجات الحرفية غير معروفة وغير محددة. تطور استهلاك الحليب ومنتجات الألبان بسبب التغيرات في عادات الأكل، وتحسين القوة الشرائية وتطوير الإنتاج، وهو في حدود 109.9 لتر/ نسمة المصدر(INS 2017).";
    dist[0].style.fontSize = "30px";
    dist[0].style.fontWeight = "bold";
    dist[0].dir = "rtl";
    dist[0].style.marginLeft = "120px";
    const ttdoc = document.getElementById('tt-doc'); 
    ttdoc.dir = "rtl";
    ttdoc.style.marginRight = '40px';
    ttdoc.innerHTML = 'الوثائق';
    ttdoc.style.fontSize = '45px'; 
    const lidoc = document.getElementById('li-doc'); 
    lidoc.style.marginLeft = "1227px";  
    lidoc.style.width = "80px";
    const lsdc = document.getElementById('ls-dc');
    if (lsdc != null)
    {
      lsdc.dir = "rtl";
      lsdc.style.marginRight = '90px'; 
    }
  }
  function arabesttt() 
  {
      const titsta = document.getElementsByClassName('tit-sta'); 
      titsta[0].innerHTML = "تطور أعداد الماشية"; 
      titsta[1].innerHTML = "اتجاهات إنتاج الحليب"; 
      titsta[2].innerHTML = "الاتجاهات في الكميات المجمعة";
      titsta[3].innerHTML = "منتجات تجهيز الحليب";  
      for(let i = 0 ; i < titsta.length ; i++) 
      {
         titsta[i].dir = "rtl";
         titsta[i].style.fontWeight = "bold"; 
         titsta[i].style.marginRight = "120px";
         titsta[i].style.fontSize = "25px";
      }
      const an = document.getElementsByClassName('an'); 
      for(let i = 0 ; i < an.length ; i++) 
      {
        an[i].innerHTML = "السنة"; 
        an[i].style.fontWeight = "bold"; 
      } 
      const ml = document.getElementsByClassName('ml'); 
      for(let i = 0 ; i < ml.length ; i++) 
      {
        ml[i].innerHTML = "الوحدة: مليون لتر"; 
        ml[i].style.fontWeight = "bold";
        ml[i].dir = "rtl";
        ml[i].style.marginRight = "120px"; 
      }
      const uf = document.getElementById('uf'); 
      uf.innerHTML = "الوحدة: ألف وحدة نسائية"; 
      uf.style.fontWeight = "bold";
      uf.dir = "rtl";
      uf.style.marginRight = "120px";
      const sc = document.getElementsByClassName('sr'); 
      for(let i = 0 ; i < sc.length ; i++)
      {
        sc[i].dir = "rtl"; 
        sc[i].style.marginRight = "120px"; 
      } 
      const so = document.getElementsByClassName('so'); 
      for(let i = 0 ; i < so.length ; i++)
      {
        so[i].innerHTML = "المصدر";  
        so[i].style.fontWeight = "bold"; 
        so[i].style.fontSize = "17px";  
      }
      const trp = document.getElementById('trp'); 
      trp.innerHTML = "الأصيلة"; 
      trp.style.fontWeight = "bold";
      const trl = document.getElementById('trl'); 
      trl.innerHTML = "سلالة متقاطعة محلية"; 
      trl.style.fontWeight = "bold";  
      const ttl = document.getElementById('ttl'); 
      ttl.innerHTML = "مجموع"; 
      ttl.style.fontWeight = "bold";
      const tpl = document.getElementById('tpl'); 
      tpl.innerHTML = "إنتاج الحليب"; 
      tpl.style.fontWeight = "bold";
      const tqc = document.getElementById('tqc'); 
      tqc.innerHTML = "الكمية المجمعة";  
      tqc.style.fontWeight = "bold"; 
      titpev = document.getElementsByClassName('tit-pev');  
      titpev[0].innerHTML = "اتجاهات إنتاج الحليب"; 
      titpev[0].style.fontSize = "25px"; 
      titpev[0].style.fontWeight = "bold"; 
      titpev[0].dir = "rtl"; 
      titpev[0].style.marginRight = "120px";
      prra = document.getElementsByClassName('prra'); 
      prra[0].innerHTML = "ازداد إنتاج الألبان بشكل ملحوظ في السنوات الأخيرة نتيجة لسلسلة من الحوافز التي تؤثر على جميع الروابط في هذا القطاع."; 
      prra[0].style.fontSize = "20px"; 
      prra[0].style.fontWeight = "bold"; 
      prra[0].dir = "rtl"; 
      prra[0].style.position = "relative"; 
      prra[0].style.left = "130px";
      const tuht = document.getElementById('tuht'); 
      tuht.innerHTML = "حليب  UHT";  
      tuht.style.fontWeight = "bold";
      tuht.dir = "rtl";
      const tyt = document.getElementById('tyt'); 
      tyt.innerHTML = "الزبادي";  
      tyt.style.fontWeight = "bold";
      const tfm = document.getElementById('tfm'); 
      tfm.innerHTML = "الجبن";  
      tfm.style.fontWeight = "bold";
      const tat = document.getElementById('tat'); 
      tat.innerHTML = "مشتقات أخرى";  
      tat.style.fontWeight = "bold";
      const tlp = document.getElementById('tlp'); 
      tlp.innerHTML = "مسحوق الحليب";  
      tlp.style.fontWeight = "bold";
  }

  if (sessionStorage.getItem("slpo") !== null && sessionStorage.getItem("paglt") === 'oui') 
      window.scrollTo(0, parseInt(sessionStorage.getItem("slpo")));
  else if (sessionStorage.getItem("slpo") !== null) 
      sessionStorage.setItem("slpo", null);
  sessionStorage.setItem("paglt", "oui"); 
  window.addEventListener("scroll", function(){
      const scrollPosition = window.scrollY || window.pageYOffset;  
      sessionStorage.setItem('slpo', scrollPosition.toString());
    })
  sessionStorage.setItem("pagea", "non"); 
  sessionStorage.setItem("pgms", "non");
  sessionStorage.setItem("pagvd", "non");
  sessionStorage.setItem("paggv", "non");
  sessionStorage.setItem("pgct", "non");
  sessionStorage.setItem("pagrg", "non");
  document.getElementById("im-fr").addEventListener("click", function(){
    if (sessionStorage.getItem('buttonClicked') === 'true') 
      window.location.href = "lait.php";  
    sessionStorage.setItem('buttonClicked', 'false');
  }); 
  document.getElementById('im-ar').addEventListener('click', function(){
    sessionStorage.setItem('buttonClicked', 'true');
  });
  if (sessionStorage.getItem('buttonClicked') === 'true') 
  {
    arabe(); 
    arabest(); 
    arabestt(); 
  }
  sessionStorage.setItem('msg', null); 
  sessionStorage.setItem('fm', 'non');
</script>
</html>