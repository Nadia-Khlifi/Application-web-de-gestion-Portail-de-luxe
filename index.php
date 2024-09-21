<?php
session_start();
include_once("connexion.php");
if (isset($_GET['m']))  $page=$_GET['m'];
else  $page="accueil";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Portail de Luxe</title>
<!-- // Stylesheets //-->
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/ddsmoothmenu.css" rel="stylesheet" type="text/css" />
<link href="css/jquery.fancybox-1.3.1.css" rel="stylesheet" type="text/css" />
 <link rel="stylesheet" href="css/alertbox.css">
<!-- // Javascripts //-->

<script type="text/javascript" src="/FashionLuxe/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="js/menu.js"></script>
<script type="text/javascript" src="js/contentslider.js"></script>
<script type="text/javascript" src="js/jcarousellite_1.0.1.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.1.js"></script>
<script type="text/javascript" src="js/scroll.js"></script>
<script type="text/javascript" src="js/ddaccordion.js"></script>
<script type="text/javascript" src="js/acordin.js"></script>
<script type="text/javascript" src="js/jquery.fancybox-1.3.1.js"></script>
<script type="text/javascript" src="js/lightbox.js"></script>
<script type="text/javascript" src="js/detailacord.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/jquery.jqprint-0.3.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400-Myriad_Pro_700-Myriad_Pro_italic_400-Myriad_Pro_italic_700.font.js"></script>
<script type="text/javascript">Cufon.replace('h1, h2, h3, h4, h5, h6, .cufontxt');</script>

    <script src="js/alertbox.js"></script>

    <script>
        $(function() {
            $('#desactiver_compt').alertBox({
                href: 'pages/desactive.php'
            });
        });
    </script>
<script type="text/javascript">
$(document).ready(function(){

$('#contenu_panier').load("pages/contenu_panier.php");
$('#menu_login').load("pages/menu_login.php");
 
})
</script>
 <script type="text/javascript">
        CKEDITOR.replace( 'desc' );
 	</script>
</head>
<body>
<!-- Wrapper -->
<div id="wrapper_sec">
  <!-- Header -->
  <div id="masthead" class="noise">
    <!-- Logo -->
    <div class="logo"> <a href="index.php"><img src="images/logo.png" alt="" /></a> </div>
    <!-- Right Header -->
    <div class="right_head">
      <ul>
        <li><a href="?m=compte">Mon compte</a></li>
		<span id="menu_login">
       <?php include("pages/menu_login.php"); ?>
	   </span>
      </ul>
      <ul class="clear cart">
        <li><a href="?m=voir_panier">Voir panier <span id="contenu_panier">(0 Produit(s) / 0&euro;)<span></a></li>
        <li class="last">Appel &agrave;: +21623456789</li>
      </ul>
      <div class="search clear">
	    <form action="?m=recherche" method="post">
        <input type="text" value="Entrer nom produit" id="recherche" name="recherche" onblur="if(this.value == '') { this.value = 'Entrer nom produit'; }" onfocus="if(this.value == 'Entrer nom produit') { this.value = ''; }" class="bar" />
         <input type="submit" value="chercher" class="bar1" /> 
		 </form>
		 </div>
		
    </div>
    <div class="clear"></div>
    <!-- Navigation -->
    <div class="navigation">
      <div id="smoothmenu1" class="ddsmoothmenu">
        <ul>
          <li><a href="?m=accueil">accueil</a></li>
          <li><a href="?m=marche">Place de marché </a></li>
          <li><a href="?m=magazine">Magazine</a></li>
          <li><a href="?m=gAnnonce">Annonce</a></li>
           <li><a href="forum/index.php">Forum</a></li>
          <li><a href="?m=contact">Contact</a></li>

        </ul>
        <div class="clear"></div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>
  <div id="main_page">

  <?php if (file_exists('pages/'.$page.'.php')) include('pages/'.$page.'.php'); else include('pages/accueil.php'); ?>
  
  </div>
  <div class="clear"></div>
  <div id="footer">
    <div class="footsec">
      <h5 class="colr about">A propos de nous</h5>
      <ul>
        <li><a href="#">Notre Histoire</a></li>
        <li><a href="#">Confidentialité et Sécurité</a></li>
        <li><a href="PDF/partennaire.pdf">Nos Partennaires</a></li>
        <li><a href="#">Conditions d'utilisation</a></li>
        <li><a href="#">FAQ</a></li>
        <li><a href="?m=contact">Contactez-Nous</a></li>
      </ul>
    </div>
    <div class="footsec">
      <h5 class="colr payment">Options de Paiement</h5>
      <ul>
        <li><a href="#">Notre promesse de crédit</a></li>
        <li><a href="?m=compte">Mon compte</a></li>
        <li><a href="#">Crédit Conseils et outils</a></li>
        <li><a href="#">Demande de crédit</a></li>
        <li><a href="#">Conditions de crédit Conditions</a></li>
        <li><a href="PDF/catalogue electronique.pdf">catalogues électroniques</a></li>
      </ul>
    </div>
    <div class="footsec followsec">
      <h5 class="colr follow">Suivez-Nous</h5>
      <ul>
        <li><a href="http://www.facebook.com/"><img src="images/facebook.gif" />Facebook</a></li>
        <li><a href="http://twitter.com/"><img src="images/twitter.gif" />Twitter</a></li>
        <li><a href="http://www.myspace.com/"><img src="images/myspace.gif" />MySpace</a></li>
        <li><a href="http://www.youtube.com/"><img src="images/youtube.gif" />Youtube</a></li>
        <li><a href="http://www.google.com/"><img src="images/google.gif" />Google</a></li>
      </ul>
    </div>
    <div class="newsletter">
      <h5 class="colr follow">S'abonner au Newsletter</h5>
      <p>Bénéficiez d'offres exclusives, les ventes et offres spéciales livré à votre boîte de réception!</p>
      <ul>
        <li>
          <input type="radio" name="a" />
        </li>
        <li>Hebdomadaire</li>
      </ul>
      <ul>
        <li>
          <input type="radio" name="a" />
        </li>
        <li>Mensuel</li>
      </ul>
      <ul class="inputsec">
        <li>
          <input type="text" value="Entrez ici Email" id="newsBox" name="s" onblur="if(this.value == '') { this.value = 'Enter Email Address Here'; }" onfocus="if(this.value == 'Enter Email Address Here') { this.value = ''; }" class="bar" />
        </li>
        <li><a href="#" class="go">Valider</a></li>
      </ul>
    </div>
  </div>
  <div class="clear"></div>
  <div class="shadow">&nbsp;</div>
  <!-- Copyrights -->
  <div class="copyrights">
    <p>© 2012 <span class="bold colr">Potail de Luxe</span> par Nadia Khlifi</p>
    <ul>
      <li><a href="#"><img src="images/card1.gif" alt="" /></a></li>
      <li><a href="#"><img src="images/card2.gif" alt="" /></a></li>
      <li><a href="#"><img src="images/card3.gif" alt="" /></a></li>
      <li><a href="#"><img src="images/card4.gif" alt="" /></a></li>
      <li><a href="#" class="top">Haut de page</a></li>
    </ul>
  </div>
</div>
</body>
</html>
