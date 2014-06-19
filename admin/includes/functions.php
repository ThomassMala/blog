<?php
//connexion à la base de donnée
function connectDB($host, $username, $password, $db) 
  {
    $connect = mysql_connect($host, $username, $password);
    mysql_select_db($db, $connect);
  }

//fonction de login avec username securisé
function login($username, $password) 
  {
    $query = mysql_query("SELECT id_user, username FROM tblusers WHERE username ='" .mysql_real_escape_string($username) ."' 
	AND password ='" .sha1($password .'?BlogBlug?') ."'");
    
	$row = mysql_fetch_assoc($query);
    
	if ($row !== false) {
      return $row;
      }
    return false;	  
  }