<?php
session_start();
$type_vehicule = trim(filter_var($_POST['type'],FILTER_SANITIZE_STRING));
$nom_vehicule = trim(filter_var($_POST['vhl'],FILTER_SANITIZE_STRING));
$affection_text = "Affection pour le " . $nom_vehicule;
$text_heure = "Prise de garde du " . date("d/m",time());

$webhookurl = "https://discord.com/api/webhooks/819731204366401547/Ff3BmGZ_lLf2WMcqeV_QyZMe_6sjFOaSFOgwd5wmTG2jtSzLinwcccKVaoIcbffSvtSF";
$timestamp = date("c", strtotime("now"));

$redir_url = 'https://g-ski.com/theo/index.php';

$err = false;

switch($type_vehicule) {
	case "vsav":
		$conducteur = trim(filter_var($_POST['cond'],FILTER_SANITIZE_STRING));
		$chefagres = trim(filter_var($_POST['ca'],FILTER_SANITIZE_STRING));
		$equipier = trim(filter_var($_POST['eq'],FILTER_SANITIZE_STRING));
		require_once("webhook_vsav.php");
		break;
	case "fpt":
		$conducteur = trim(filter_var($_POST['cond'],FILTER_SANITIZE_STRING));
		$chefagres = trim(filter_var($_POST['ca'],FILTER_SANITIZE_STRING));
		$premierchef = trim(filter_var($_POST['pc'],FILTER_SANITIZE_STRING));
		$premierservant = trim(filter_var($_POST['ps'],FILTER_SANITIZE_STRING));
		require_once("webhook_fpt.php");
		break;
	case "divers":
		$conducteur = trim(filter_var($_POST['cond'],FILTER_SANITIZE_STRING));
		$chefagres = trim(filter_var($_POST['ca'],FILTER_SANITIZE_STRING));
		require_once("webhook_divers.php");
		break;
	case "golf":
		$operateur = trim(filter_var($_POST['op'],FILTER_SANITIZE_STRING));
		$ticket = trim(filter_var($_POST['tik'],FILTER_SANITIZE_STRING));
		require_once("webhook_golf.php");
		break;
	default:
		$err = true;
}

if ($err) {
    $_SESSION['msg_usr'] = '<p>Une erreur est survenue... Réessayez</p>';
} else {
    $_SESSION['msg_usr'] = '<p>Prise de garde enregistrée !</p>';
}

header('Location:' . $redir_url);
