{if isset($_SESSION['connexion'])}

    {$email} = addcslashes($_POST['email'], "'%_");
    $mdp = addcslashes($_POST['mdp'], "'%_");
    $select_connexion = "SELECT * FROM `connexion` WHERE email = '$email' AND mdp = '$mdp'";
    $req = mysql_query($select_connexion);
    $tableau = mysql_fetch_array($req);
{/if}

<h1>Connexion</h1>
    <form action="connexion.php" method="post" enctype="multipart/form-data" id="form_connexion" name="form_connexion">

        <div class="clearfix">
            <label for="email">Email </label>
            <div class="input">
                <input type="text" name="email" id="email" value=""/>
            </div>
        </div>
        <div class="clearfix">
            <label for="mdp">Mot de passe </label>
            <div class="input">
                <input type="password" name="mdp" id="mdp"></textarea>
            </div>
        </div>

        <div class="form-actions">
            <input type="submit" name="connexion" value="connexion" class="btn btn-large btn-primary"/>
        </div>
    </form> 