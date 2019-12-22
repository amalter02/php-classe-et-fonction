<?php

    class personnage {

        private $_pseudo;
        private $_vie;
        private $_estVivant = true;

        public function __construct()
        {
            $this->_vie = 100;
            
        }

        public function setPseudo($nouveauPseudo)
        {
            $this->_pseudo = $nouveauPseudo;
        }


        public function getPseudo()
        {
           return  $this->_pseudo ;
        }

        public function getVie()
        {
           return  $this->_vie ;
        }


        public function afficher()
        {
            echo "<p>je suis ".$this->_pseudo." et j'ai ". $this->_vie ." pv</p>";
        }

        public function prendDesDegat($degat)
        {

            $this->_vie = $this->_vie - $degat;
           
        }
        

        public function attaquer($personnage)
        {            
                    $critchance = rand(0,1);

                    if ($critchance == 0){
                        $personnage->prendDesDegat(10);
                        echo "<p>".$this->_pseudo." attaque ".$personnage->getPseudo()." il perd 10 pv, il lui reste ". $personnage->getVie() ." pv</p>";
                    } 
                        else{
                                $personnage->prendDesDegat(50);
                                echo "<p>coup critique : ".$this->_pseudo." attaque ".$personnage->getPseudo()." il perd 50 pv, il lui reste ".$personnage->getVie()  ." pv</p>";
                            }
                   
             if ($this->_vie <= 0)
             {
                $this->_estVivant = false;
                echo "<p>".$this->_pseudo." attaque ".$personnage->getPseudo()." ,il lui reste 0 pv</p>";;
                
                $proba = rand(0,3);

                if ($proba == 0)
                {
                    echo "<p>".$this->_pseudo." a tué ".$personnage->getPseudo()."</p>";
                } elseif ($proba == 1)
                    {
                        echo "<p>".$this->_pseudo." a détruie ".$personnage->getPseudo()."</p>";
                    } elseif ($proba == 2)
                        {
                            echo "<p>".$this->_pseudo." a sortie de la réaliter ".$personnage->getPseudo()."</p>";
                        } elseif ($proba == 3)
                            {
                                echo "<p>".$this->_pseudo." a enterait ".$personnage->getPseudo()."</p>";
                            }
             }      
        }

        public function estVivant()
        {
            return  $this->_estVivant;
        }
           

    }
?>