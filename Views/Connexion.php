<div id="wrapper">

    <div class="bck">
        <br>
        <h2>Page de connexion</h2>
        <br>
    </div>

    <div id="extra" class="container">
        <h2>Connexion</h2>
        <span>Accedez à votre espace personnel</span>

        <div class="inscription">
            <form method="post">
                <div class="inscription">
                    <div class="element"><span>Nom d'utilisateur : </span><input type="text" name="pseudo"/></div>
                    <div class="element"><span>Mot de passe : </span><input type="password" name="password"/></div>
                </div>
            </form>
        </div>
        <div>
            <input type="submit" cl value="Se connecter" name="submit"/>
        </div>
    </div>
</div>

<?php
if (isset($_POST['submit'])){
    if (isset($_POST['pseudo']) && isset($_POST['password'])) {
            $database = new DataBase();
            $database->connexion($_POST['pseudo'], $_POST['password']);
        } else {
            echo 'mots de passe ne correspondent pas';
        }
    }else {
        echo "Les champs ne sont pas tous replis";

    }
?>