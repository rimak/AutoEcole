<div id="wrapper">

    <div class="bck">
        <p>aaaaaaa<br></p>
        <p>aaaaaaa<br></p>
        <p>aaaaaaa<br></p>
        <p>aaaaaaa<br></p>
        <p>aaaaaaa<br></p>
        <p>aaaaaaa<br></p>
        <p>aaaaaaa<br></p>
        <p>aaaaaaa<br></p>
    </div>

    <div id="extra" class="container">
        <h2>Rejoignez l'auto école de la réussite !</h2>
        <span>Inscription rapide en moins de 5 minutes !</span>
        <p>Inscrivez vous dans la meilleure auto-école de la région, l'accès au tableau de bord, les reservations etc sera immédiatement accessible</p>

        <form method="post">
            <label>Pseudo: <input type="text" name="pseudo"/></label><br/>
            <label>Mot de passe: <input type="password" name="passe"/></label><br/>
            <label>Confirmation du mot de passe: <input type="password" name="passe2"/></label><br/>
            <label>Adresse e-mail: <input type="text" name="email"/></label><br/>
            <input type="submit" value="M'inscrire"/>
        </form>

        <a href="#" class="button">S'inscrire !</a> </div>

</div>


<?php
if(!empty($_POST['pseudo']))
{
    echo "nique ta mere";
}
?>