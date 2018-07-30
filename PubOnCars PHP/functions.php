<?php 

function connect_db(){
	$link = mysql_connect('localhost', 'david', 'david');
	if (!$link) {
		die('Connexion impossible : ' . mysql_error());
	}

	$db_selected = mysql_select_db('puboncars', $link);
	if (!$db_selected) {
		die('Impossible de sélectionner la base de données : ' . mysql_error());
	}
}

?>