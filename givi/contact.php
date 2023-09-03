<!DOCTYPE html>
<html dir="ltr" lang="fr">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title id="tt-pg">GIVLAIT | Contact</title> 
  <link rel="icon" type="image/x-icon" href="images/favicone.png">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="contact.css">
</head>
<body>
  <div id="info">
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
        <li class="item-nav parent"><span class="it-hv"><a href="index.php#info" id="item-giv">GIVLAIT</a><img class="ic-dp" src="images/dropdown.png"></span>
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
              <li style="display: block;"><a href="elevage.php#tt-st" class="item-dp it-st" id="stel" style="color: black; font-size:15px;font-weight:bold; "><img class="icr-dp" src="images/right-arrow.png">Statistiques</a></li>
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
               <li style="display: block; margin-bottom: 10px;font-weight:bold;"><a href="lait.php#tt-ml" id="ml-lt" class="item-dp itm-ml" style="color: black; font-size:15px;"><img class="icr-dp" src="images/right-arrow.png">Maillons</a></li>
              <li style="display: block;"><a href="lait.php#tt-doc"  id="dc-lt" class="item-dp it-dc" style="color: black; font-size:15px;font-weight:bold;"><img class="icr-dp" src="images/right-arrow.png">Documents</a></li>
            </ul>
          </div>
        </li>
        <li id="lgs"><button id="im-ar" onclick="arabestt();arabest();arabe();">AR</button> | <a id="im-fr" style="cursor: pointer;" onclick=''>FR</a></li> 
        <li id="contact"><a href="#info" id="item-ct">Contact</a></li>
      </ul>  
    </nav>
    <div id='tt-ct'>
      NOUS CONTACTER
    </div>
    <form id='fm-ct' method="post"> 
      <label id='lbnp'>Nom et prénom<span class='et'>*</span></label><br>
      <input name='nmpm' id='nmpm' required><br>
      <label id='lbsj'>Sujet<span span class='et'>*</span></label><br>
      <input name='sjt' id='st'><br>
      <label id='lbmsg'>Message<span span class='et'>*</span></label><br>
      <textarea name='msg' id='msg'></textarea>
      <div id='nt'>*: indique un champ obligatoire</div> 
      <input onclick='fb();' type="submit" name="btn-ct" id='btn-ct'>
    </form>

    <?php
      if (isset($_POST["btn-ct"])) 
      {
        if (trim($_POST["nmpm"])!="" && trim($_POST["sjt"])!="" && trim($_POST["msg"])!="")
        {
          extract($_POST); 
          $conn = new mysqli('localhost', 'root', '', 'givlait');
          mysqli_set_charset($conn,"utf8"); 
          $sql = "insert into contact (fullname, sjt, msg) values('$nmpm', '$sjt', '$msg');";  
          mysqli_query($conn, "SET NAMES 'utf8'"); 
          if (mysqli_query($conn,$sql)) 
          {
            echo "<div class='msge' id='msg-en'>message envoyé !<br><br><a onclick='cb();' id='btn-el'>enlever remarque</a></div>
            <script type='text/javascript'>
              sessionStorage.setItem('msg', 'en');
            </script>
            ";
          }
          else
            echo "<div class='msge' id='msg-ne'>message non envoyé !<br><br><a style='margin-left:10px;' onclick='cb();' id='btn-el'>enlever remarque</a></div>
              <script type='text/javascript'>
                sessionStorage.setItem('msg', 'ne'); 
              </script>"; 
          mysqli_close($conn);
        }  
        else 
          echo "<div class='msge' id='msg-ne'>message non envoyé !<br><br><a style='margin-left:10px;' onclick='cb();' id='btn-el'>enlever remarque</a></div>
            <script type='text/javascript'>
              sessionStorage.setItem('msg', 'ne');  
            </script>";
        echo "<script type='text/javascript'>
                const msg = document.getElementsByClassName('msge'); 
                if (sessionStorage.getItem('buttonClicked') === 'true') 
                {
                  msg[0].style.transform = 'translateY(-560px)'; 
                  msg[0].style.fontWeight = 'bold'; 
                  msg[0].style.fontSize = '17px'; 
                  if (msg[0].id == 'msg-en')
                    msg[0].innerHTML = '! تم الإرسال <br><br><a onclick='cb();'id='btn-el'>إزالة الملاحظة</a>'; 
                  else 
                    msg[0].innerHTML = '!لم يتم الإرسال<br><br><a onclick='cb();'id='btn-el'>إزالة الملاحظة</a>';
                }
               </script>";  
      } 
    ?>

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
          <a href="viandes.php#tt-st"class="slien li-st lien">Statistiques</a>
          <a href="viandes.php#tt-doc"class="slien li-dc lien">Documents</a>
          <a href="lait.php" id="li-lt" class="lien-gr lien">Lait</a>
          <a href="lait.php#br-nav" class="slien li-pr lien">Présentation</a>
          <a href="lait.php#ml" class="slien liml lien">Maillons</a>
          <a href="lait.php#tt-doc"class="slien li-dc lien">Documents</a> 
        </div> 
        <div class="item-ft item-rs"> 
          <div id="ct" class="titre-pt">CONTACT</div> 
          <a href="#info" id="lien-cot">Contactez-nous</a> 
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
    ttpg.innerHTML = "GIVLAIT | التواصل";       
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
    const ttct = document.getElementById("tt-ct"); 
    ttct.innerHTML = "تواصل معنا"; 
    ttct.dir = "rtl"; 
    ttct.style.fontSize = "45px"; 
    ttct.style.fontWeight = "bold"; 
    const lbnp = document.getElementById('lbnp'); 
    lbnp.innerHTML = "الاسم واللقب<span class='et'>*</span>"; 
    lbnp.dir = "rtl"; 
    lbnp.style.marginLeft = "1100px"; 
    const lbsj = document.getElementById('lbsj'); 
    lbsj.innerHTML = "الموضوع<span class='et'>*</span>"; 
    lbsj.dir = "rtl"; 
    lbsj.style.marginLeft = "1123px"; 
    const lbmsg = document.getElementById('lbmsg'); 
    lbmsg.innerHTML = "الرسالة<span class='et'>*</span>"; 
    lbmsg.dir = "rtl"; 
    lbmsg.style.marginLeft = "1138px"; 
    const lb = document.getElementsByTagName('label'); 
    for(let i = 0 ; i < lb.length ; i++) 
    {
      lb[i].style.fontWeight = "bold";
      lb[i].style.fontSize = "25px"; 
    }
    const ip = document.getElementsByTagName('input'); 
    for(let i = 0 ; i < ip.length ; i++) 
    {
      ip[i].dir = "rtl";
      ip[i].style.fontWeight = "bold";
      ip[i].style.fontSize = "20px";  
    }
    const btnct = document.getElementById('btn-ct'); 
    btnct.value = "إرسال"; 
    btnct.style.fontWeight = "bold"; 
    btnct.style.fontSize = "30px";
    const nt = document.getElementById('nt'); 
    nt.innerHTML = "*: يشير إلى خانة إلزامية"; 
    nt.dir = "rtl"; 
    nt.style.fontWeight = "bold"; 
    nt.style.fontSize = "20px";
    const tx = document.getElementsByTagName('textarea'); 
    tx[0].dir = "rtl"; 
    tx[0].style.fontWeight = "bold";
    tx[0].style.fontSize = "20px"; 
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
    const msg = document.getElementsByClassName('msge'); 
    if (msg != null) 
    {
      msg[0].style.transform = 'translateY(-560px)'; 
      msg[0].style.fontWeight = 'bold'; 
      msg[0].style.fontSize = '17px'; 
      if (msg[0].id == "msg-en")
        msg[0].innerHTML = "! تم الإرسال <br><br><a onclick='cb();'id='btn-el'>إزالة الملاحظة</a>"; 
      else 
        msg[0].innerHTML = "!لم يتم الإرسال<br><br><a onclick='cb();' id='btn-el'>إزالة الملاحظة</a>"; 
    }
} 
</script>
<script type="text/javascript">
  function cb() 
  {
    const msg = document.getElementsByClassName('msge'); 
    msg[0].style.display = 'none';
    sessionStorage.setItem('msg', null);  
    sessionStorage.setItem('fm', 'non'); 
  }
  function fb() 
  {
    sessionStorage.setItem('fm', 'oui'); 
  }
  if (sessionStorage.getItem("pssc") !== null && sessionStorage.getItem("pgct") === 'oui') 
    if (sessionStorage.getItem('fm') == 'non') 
      window.scrollTo(0, parseInt(sessionStorage.getItem("pssc")));
  else if (sessionStorage.getItem("pssc") !== null) 
      sessionStorage.setItem("pssc", null); 
  window.addEventListener("scroll", function(){
      const scrollPosition = window.scrollY || window.pageYOffset;  
      sessionStorage.setItem('pssc', scrollPosition.toString());
  }); 
  sessionStorage.setItem("pagea", "non");
  sessionStorage.setItem("pagpg", "non");
  sessionStorage.setItem("pagvd", "non");
  sessionStorage.setItem("paggv", "non");
  sessionStorage.setItem("pagel", "non");
  sessionStorage.setItem("pgms", "non");
  sessionStorage.setItem("paglt", "non");
  sessionStorage.setItem("pagrg", "non");
  document.getElementById('im-fr').addEventListener('click', function()
  {
    if (sessionStorage.getItem('buttonClicked') === 'true') 
      window.location.href = "contact.php";
    sessionStorage.setItem('buttonClicked', 'false'); 
  });
  document.getElementById('im-ar').addEventListener('click', function()
  {
    sessionStorage.setItem('buttonClicked', 'true');
  }); 
  if (sessionStorage.getItem('buttonClicked') === 'true') 
  {
    arabe(); 
    arabest(); 
    arabestt();
  } 
</script>
<script type="text/javascript">
  if (document.getElementById('msg-en') == null && sessionStorage.getItem('msg') === 'en' && sessionStorage.getItem('pgct') === 'oui') 
  {
    const newElement = document.createElement('div'); 
    newElement.innerHTML = "message envoyé !<br><br><a onclick='cb();' id='btn-el'>enlever remarque</a>"; 
    newElement.classList.add('msge'); 
    newElement.setAttribute('id', 'msg-en'); 
    newElement.style.transform = 'translateY(-1335px)'; 
    document.body.appendChild(newElement);   
    if (sessionStorage.getItem('buttonClicked') === 'true') 
    { 
      newElement.style.transform = 'translateY(-1393px)'; 
      newElement.style.fontWeight = 'bold'; 
      newElement.style.fontSize = '17px'; 
      newElement.innerHTML = "! تم الإرسال <br><br><a onclick='cb();'id='btn-el'>إزالة الملاحظة</a>"; 
    }
  }
  else if (document.getElementById('msg-ne') == null && sessionStorage.getItem('msg') === 'ne' && sessionStorage.getItem('pgct') === 'oui') 
  {
    const newElement = document.createElement('div')
    newElement.innerHTML = "message non envoyé !<br><br><a onclick='cb();' style='margin-left:10px;' id='btn-el'>enlever remarque</a>"; 
    newElement.classList.add('msge'); 
    newElement.setAttribute('id', 'msg-ne');
    newElement.style.transform = 'translateY(-1335px)';  
    document.body.appendChild(newElement); 
    if (sessionStorage.getItem('buttonClicked') === 'true') 
    { 
      newElement.style.transform = 'translateY(-1393px)'; 
      newElement.style.fontWeight = 'bold'; 
      newElement.style.fontSize = '17px'; 
      newElement.innerHTML = "!لم يتم الإرسال<br><br><a onclick='cb();'id='btn-el'>إزالة الملاحظة</a>"; 
    }
  }
  sessionStorage.setItem("pgct", "oui");
</script>
</html>