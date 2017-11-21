<div id="wrapper">

    <div class="bck">
        <br>
        <br>
    </div>

    <div id="extra" class="container">
        <h2>Liste des utilisateurs</h2>
        <span>Afficher la liste des utilisateurs enregistrés</span>
        <div>
            <div class="inscription">
                <form method="post">
                    <div class="inscription">
                        <input type="submit" cl value="Afficher la liste" name="submit"/>
                    </div>
                </form>
            </div>
        </div>

        <br/>
        <br/>
        <br/>
        <br/>
        <br/>

        <div class="mainContainerListe">

            <div class="rowUserTitle">
                <div class="itemListe"><h3 id="title">Liste des utilisateurs</h3></div>
            </div>
            <div id="rowUserTitle">
                <div class="itemListe"><h3>ID</h3></div>
                <div class="itemListe"><h3>IDENTIFIANT</h3></div>
                <div class="itemListe"><h3>EMAIL</h3></div>
                <div class="itemListe"><h3>MDP</h3></div>
            </div>
            <?php
            if (isset($_POST['submit'])) {
                $database = new DataBase();
                $reponse = $database->afficherListe();
                while($donnees = $reponse->fetch())
                {
                    $nom = $donnees["idU"];
                    $identifiant = $donnees["identifiant"];
                    $email = $donnees["email"];
                    $motdepasse = $donnees["motdepasse"];

                    echo "<div class=\"rowUser\">";
                    echo "<div class=\"itemListe\"><h2>".$nom."</h2></div>";
                    echo "<div class=\"itemListe\"><h2>".$identifiant."</h2></div>";
                    echo "<div class=\"itemListe\"><h2>".$email."</h2></div>";
                    echo "<div class=\"itemListe\"><h2>".$motdepasse."</h2></div>";
                    echo "</div>";
                }
                }
            ?>
        </div>

    </div>

</div>