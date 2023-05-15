<?php

class Genre{
    private string $libelle;
    private array $films;
    
    
    public function __construct($libelle){
        $this->libelle = $libelle;
        $this->films = [];
    }

    public function getLibelle(){
        return $this->libelle;
    }

    public function setLibelle($libelle){
        $this->libelle = $libelle;
    }


    // fonction pour ajouter des films dans notre tableau 
    public function addFilm(Film $film){
        $this->films[] = $film;
    }

    // fonction pour afficher les films associé à un genre (on parcourt le tableau de film et on affiche les films)
    public function afficherGenre(){
        echo " Le genre " . $this->getLibelle() . " est associé à " . count($this->films) . " film(s) : <br/>";
        foreach($this->films as $film){
            echo $film;
            if(count($this->films) >1){
                echo ",";
                } else {
                    echo ".";
                }
        }
    }

    // fonction qui represente l'objet sous forme de string
    public function __toString(){
        return $this->libelle;
    }
    

    }




    