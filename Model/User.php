<?php
/**
 * Created by PhpStorm.
 * User: Samy
 * Date: 20/11/2017
 * Time: 13:46
 */

class User
{
    private $identifiant, $motdepasse, $email;

    public function __construct ($userName, $password, $email){
        $this->identifiant = $userName;
        $this->motdepasse = $password;
        $this->email = $email;
    }

    public function renseigner ($tab){
        $this->identifiant = $tab['email'];
        $this->motdepasse = $tab['identifiant'];
        $this->email = $tab['motdepasse'];
    }

    public function serialiser ()
    {
        $tab = array(
            "email" => $this->email,
            "identifiant" => $this->identifiant,
            "motdepasse" => $this->motdepasse,
        );
        return $tab;
    }

    /**
     * @return mixed
     */
    public function getIdentifiant()
    {
        return $this->identifiant;
    }

    /**
     * @param mixed $identifiant
     */
    public function setIdentifiant($identifiant)
    {
        $this->identifiant = $identifiant;
    }

    /**
     * @return mixed
     */
    public function getMotdepasse()
    {
        return $this->motdepasse;
    }

    /**
     * @param mixed $motdepasse
     */
    public function setMotdepasse($motdepasse)
    {
        $this->motdepasse = $motdepasse;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }






}