<?php

class Realisateur extends Personne {
    private array $films;

    public function __construct($nom, $prenom, $sexe, $dateDeNaissance){
        parent::__construct($nom, $prenom, $sexe, $dateDeNaissance);
        $this->films = [];
    }

    // fonction pour ajouter des films
    public function addFilm(Film $film){
        $this->films[] = $film;
    }


    // fonction pour afficher la filmographie du réalisateur
    public function afficherFilmographie(){
        echo "Film(s) de " . $this->getNom() . " " . $this->getPrenom() . ": <br/>";
        foreach($this->films as $film){
            echo $film . "<br/>";
        }
    }


}