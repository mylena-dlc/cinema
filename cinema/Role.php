<?php

class Role{
    private string $nom;
    private array $castings;
    

    public function __construct($nom){
        $this->nom = $nom;
        $this->castings = []; 
    }

    public function getNom(){
        return $this->nom;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }

    // fonction pour ajouter des acteurs dans notre tableau 
    public function addCastings(Casting $casting){
        $this->castings[] = $casting;
    }

    // fonction pour parcourir le tableau de casting et afficher les acteurs (on parcourt le tableau Castings et on affiche uniquement les acteurs grâce au getter, a rajouter dans la classe Casting)
    public function afficherRole(){
        echo " Les acteurs ayant joué le rôle de " . $this->getNom() . " : <br/>";
        foreach($this->castings as $casting){
        //   $r = array_unique($this->castings);
            echo $casting->getActeur().' ';
      
    
        }
    }

    // fonction qui represente l'objet sous forme de string
    public function __toString(){
        return $this->getNom();
    }
       


}

