<?php
/**
 * Created by PhpStorm.
 * User: Samy
 * Date: 20/11/2017
 * Time: 13:52
 */

class DataBase
{
    private $pdo;
    /**
     * DataBase constructor.
     */
    public function __construct() {
        $this->pdo = null;
        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=utilisateurs;', 'root', '');
        } catch (Exception $exception) {
            echo $exception;
        }
    }

    public function insertUser(User $user) {
        $requete = "insert into utilisateur values (:idU, :identifiant, :motdepasse, :email)";
        $insert= $this->pdo->prepare ($requete);

        $insert->execute(array(
            ":idU" => null,
            ":identifiant" => $user->getIdentifiant(),
            ":motdepasse" => $user->getMotdepasse(),
            ":email" => $user->getEmail(),
        ));

        echo 'Utilisateur créé avec succes';

    }

    public function connexion($identifiant, $motdepasse) {

        $req = $this->pdo->prepare('SELECT idU FROM utilisateur WHERE identifiant = :identifiant AND motdepasse = :motdepasse');
        $req->execute(array(
            'identifiant' => $identifiant,
            'motdepasse' => $motdepasse));

        $resultat = $req->fetch();

        if (!$resultat)
        {
            echo 'Mauvais identifiant ou mot de passe !';
        }
        else
        {
            echo 'Vous êtes connecté !';
        }
    }

    function afficherListe() {
        if ($this->pdo != null) {
            $reponse = $this->pdo->query('SELECT * FROM utilisateur');
        }else {
            echo 'non';
        }
        return $reponse;
    }
}