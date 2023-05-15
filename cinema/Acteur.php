<?php

class Acteur extends Personne{

    private array $castings;

    public function __construct($nom, $prenom, $sexe, $dateDeNaissance){
        parent::__construct($nom, $prenom, $sexe, $dateDeNaissance);
        $this->castings = [];
    }


    // fonction pour ajouter des acteurs dans notre tableau Casting
    public function addCastings(Casting $casting){
        $this->castings[] = $casting;
    }


    // fonction pour afficher la filmographie d'un acteur (on parcourt le tableau Castings, et on affiche uniquement le film grâce au getter (à rajouter dans la classe Casting)
    public function afficherFilmographie(){
        echo "Film(s) de " . $this->getPrenom() . " " . $this->getNom() . ": <br/>";
        foreach($this->castings as $casting){
            echo $casting->getFilm() . "<br/>";
        }
        }
    

    public function __toString(){
        return $this->getPrenom() . ' ' . $this->getNom();
    }

   
}