<?php

//appel des variables de fonction
//-------------------------------
$config = require('config.php');
require_once ('functions.php');
connectDB($config['db']['host'], $config['db']['username'], $config['db']['password'], $config['db']['db']);


//action saisie du username et du motdpasse
//-----------------------------------------	
if (isset ($_POST['action']) && $_POST['action'] === 'login')
  {
    $username = $_POST['username'];
    $password = $_POST['motdpasse'];

    $login = login($username, $password);
	if ($login === false) 
	{ 
	    echo "Mauvais identifiant(s).";
	}
	else 
	{
	    session_start();
        $_SESSION['user'] = $login['username'];
        header("Location: index.php");
	}
  }
 
 
//action de validation des DEUX champs username et motdpasse
//----------------------------------------------------------
if (isset ($_POST['action']) && $_POST['action'] === 'login')
  {
    $username = $_POST['username'];
    $motdpasse = $_POST['motdpasse'];
	$messages = array();
	
	if (empty($username))
	  {
	    $messages['username'] = "Veuillez saisir un nom d'utilisateur";
	  }	
	if (empty($text))
	  {
	    $messages['motdpasse'] = 'Veuillez saisir votre mot de passe associé';
	  }	
  }
  
  
//action de déconnexion
//---------------------
if (isset ($_GET['action']) && $_GET['action'] === 'deconnexion')
  {
	unset($_SESSION['user']);
	header("Location: login.php");
  }

   
//action de validation d'article
//------------------------------
if (isset ($_POST['action']) && $_POST['action'] === 'addarticle')
  {
    $title = $_POST['title'];
    $text = $_POST['text'];
	$messages = array();
	
	if (empty($title))
	  {
	    $messages['title'] = 'Veuillez saisir un titre';
	  }	
	if (empty($text))
	  {
	    $messages['text'] = 'Veuillez saisir un article';
	  }	

	  
//enregistrement des articles sur msql
//------------------------------------
	if (count($messages) === 0) 
      {
	    mysql_query ("INSERT INTO tblarticles (title, text, date, auteurdelarticle) VALUES ('" .mysql_real_escape_string($title) ."', '" .mysql_real_escape_string($text) ."', NOW(), 1)");
        header ("Location: gestion_articles.php");
	  }	  
  }
