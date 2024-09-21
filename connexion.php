<?php
$connexion=mysql_connect("localhost","root","")or die("erreur de connexion");			
mysql_select_db("LuxeFashion",$connexion)  or die("erreur de connexion ala base");
?>