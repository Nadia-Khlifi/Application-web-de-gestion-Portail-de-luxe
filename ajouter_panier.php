<?php
session_start();
if(isset($_POST['qtte']) )
{
	$id=$_POST['id_prod']; 
	$qte=$_POST['qtte']; 
	if( empty($_SESSION['panier'][$id]) )
		{
		    $_SESSION['panier'][$id]=$qte; 
		}
		else
		{ 
			$_SESSION['panier'][$id]+=$qte;
		}
	header("location: ".$_SERVER["HTTP_REFERER"]);
}

if(isset($_GET['modifier'])) 
{
	$qte=$_GET['modifier'];
	$id=$_GET['id'];
	if( $qte== 0 OR empty($qte) ){// si l'internaute à changé la quantité à 0
		unset($_SESSION['panier'][$id]);
	}
	else
	{
		$_SESSION['panier'][$id]=$qte;
	}
	header("location: ".$_SERVER["HTTP_REFERER"]);
}
if(isset($_GET['supprimer'])) 
{
	$id=$_GET['supprimer'];
	unset($_SESSION['panier'][$id]);
	header("location: ".$_SERVER["HTTP_REFERER"]);
}




?>