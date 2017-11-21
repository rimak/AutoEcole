<div id="wrapper">

    <div class="bck">
            <br>
            <h2>Incription</h2>
            <br>
    </div>

    <div id="extra" class="container">
        <h2>Rejoignez l'auto école de la réussite !</h2>
        <span>Inscription rapide en moins de 5 minutes !</span>
        <p>Inscrivez vous dans la meilleure auto-école de la région, l'accès au tableau de bord, les reservations etc sera immédiatement accessible</p>

        <div class="inscription">
            <form method="post">

                <div class="inscription">
                    <div class="element"><span>Nom d'utilisateur : </span><input type="text" name="pseudo"/></div>
                    <div class="element"><span>Mot de passe : </span><input type="password" name="password"/></div>
                    <div class="element"><span>Confirmation du mot de passe : </span><input type="password" name="password2"/></div>
                    <div class="element"><span>Adresse email </span><input type="email" name="email"/></div>
                </div>
            </form>

        </div>
        <div>
            <input type="submit" cl value="M'inscrire" name="submit"/>

        </div>
    </div>

</div>

<?php
    if (isset($_POST['submit'])){
        if (isset($_POST['pseudo']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['password2'])) {
            if ($_POST['password'] == $_POST['password2']) {
                $database = new DataBase();
                $user = new User($_POST['pseudo'], $_POST['password'], $_POST['email']);
                $database->insertUser($user);
            } else {
                echo 'mots de passe ne correspondent pas';
            }
        }else {
            echo "Les champs ne sont pas tous replis";
        }
    }
?>