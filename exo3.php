<?php 
class Personnage{
  
    private $_pseudo;
    
    public function __construct($lePseudo){
      
       $this->_pseudo = $lePseudo;
       
    }

    public function AffichePersonnage(){
        echo "<p>Je suis ".$this->_pseudo.'...';
        
    }

    public function getNom(){
        return $this->_pseudo;
    }
   

}
?>