<?php
session_start();
ini_set('display_errors','off');
require_once 'config/bdd.inc.php';
include_once 'include/header.inc.php';
require_once 'config/connexion.inc.php';

//***SMARTY****//
require_once('libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->setTemplateDir('template/');


if (isset($_POST['creer'])) {
    // Si le bouton connexion est posté, je traite les données
    $nom = addcslashes($_POST['nom'], "'%_");
    $prenom = addcslashes($_POST['prenom'], "'%_");
    $email = addcslashes($_POST['email'], "'%_");
    //Securisation des variables
    $mdp = addcslashes($_POST['mdp'], "'%_");

    $req_insertion = "INSERT INTO connexion (nom, prenom, email, mdp) VALUES ('$nom', '$prenom', '$email', $mdp) ";
    mysql_query($req_insertion); //Execution de la requete SQL
         
    $id_connexion = mysql_insert_id(); //Definition de l'id de l'article
   

   
  
} else {
   
$smarty->debugging = true;

$smarty->display('register.tpl');
    
 include_once 'include/menu.inc.php';
 include_once 'include/footer.inc.php';
    
}

?>
