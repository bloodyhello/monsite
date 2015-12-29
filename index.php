<?php
session_start();
ini_set('display_errors','off');
//***SMARTY****//
require_once('libs/Smarty.class.php');
$smarty = new Smarty();
$smarty->setTemplateDir('template/');

require_once 'config/connexion.inc.php';
require_once 'config/bdd.inc.php';
include_once 'include/header.inc.php';

$compteur = "SELECT COUNT(*) as nbarticles FROM articles WHERE publie = 1";
$requestcompteur = mysql_query($compteur);

$resultcompt = mysql_fetch_array($requestcompteur);
$nbarticles = $resultcompt['nbarticles'];

$nbartparpage = 2;
$_page = (isset($_GET['page']) ? $_GET['page'] : 1);
$debut = (($_page - 1) *$nbartparpage);  
$nbpage = ceil($nbarticles/$nbartparpage);

$select_all_post = "SELECT id, titre, texte, DATE_FORMAT(date, '%d/%m/%Y') as date_fr FROM `articles` WHERE publie = 1 LIMIT $debut,$nbartparpage ";
$request = mysql_query($select_all_post); //on crée une variable dans laquelle on va pousser les elements de la requete sql






if (isset($_SESSION['msg_reussi'])) {
    ?><div class="alert alert-success" id="notif">
        <?php echo $_SESSION['msg_reussi']; ?></div><?php
    unset($_SESSION['msg_reussi']);
}
while ($result_request = mysql_fetch_array($request)) {
    echo '<h1>' . $result_request['titre'] . '</h1>'; //On parcours le tableau $result_request pour afficher les éléments de l'article
    echo '<p>' . $result_request['texte'] . '</p>';
    echo '<img src="img/' . $result_request['id'] . '.jpg" alt="" width="200px"/>';
    echo '<p>' . $result_request['date_fr'] . '</p>';
}

include_once 'include/menu.inc.php';

?>
    <div class="pagination">
    <ul>
        <li><a>Page : </a> 
                <?php    
                       for($i=1;$i<=$nbpage;$i++)
               { echo "<a href='index.php?page=$i'>$i </a>"; }
            ?>  
        </li>
    </ul>
<?php     
include_once 'include/footer.inc.php';

?>