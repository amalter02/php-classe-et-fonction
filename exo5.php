<?php
class Perso{                                                 

    private $_nom;
    private $_vie;
    private $_degat;
    private $_id;

public function __construct($idperso)
    {
        try{
            //execution du code sur la BDD 
            $BDD = new PDO('mysql:host=192.168.64.186; dbname=exo5; charset=utf8','root', 'root');
            echo "SELECT * FROM exo5 WHERE ID_perso = '".$idperso."' ";
            $resultat = $BDD->query("SELECT * FROM personnage WHERE ID_perso = '".$idperso."' ");
            $resultat = $resultat->fetch();
            
            $this->_perso = $resultat['perso'];
           $this->_vie =$resultat['vie'];
        
        }
        catch (Exception $erreur)
            {
                echo 'Erreur : '.$erreur->getmessage();
            }
        $this->_id = $idperso;
    }
public function AfficherPersonnage()    // affiche les deux personnages
    {
        echo  '<p> mon prenom est '.$this->_perso.' est j ai '.$this->_vie. 'HP </p>';
    }

public function getnom()
    {
        return $this->_perso;
    }   
    
public function getvie()
    {
        return $this->_vie;
    }   

public function getID()
    {
        return $this->_id;
    }   
}
?>