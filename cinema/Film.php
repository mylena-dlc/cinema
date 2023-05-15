<?php

class Film {
    private string  $titre;
    private DateTime $dateDeSortie;
    private float $duree;
    private string $synopsis;
    private Realisateur $realisateur;
    private array $genres;

    private array $castings;

    public function __construct($titre, $dateDeSortie, $duree, $synopsis, Realisateur $realisateur, array $genres){
        $this->titre = $titre;
        $this->dateDeSortie = new DateTime($dateDeSortie);
        $this->duree = $duree;
        $this->synopsis = $synopsis;
        $this->realisateur = $realisateur;
        $realisateur->addFilm($this);
        $this->genres = [];
        $this->genres = $genres;

        foreach($this->genres as $genre){
        $genre->addFilm($this);
        }

        $this->castings = [];
    }

    public function getTitre(){
        return $this->titre;
    }

    public function setTitre($titre){
        $this->titre = $titre;
    }

    public function getDateDeSortie(){
        return $this->dateDeSortie;
    }

    public function setDateDeSortie($dateDeSortie){
        $this->dateDeSortie = new DateTime($dateDeSortie);
    }

    public function getDureee(){
        return $this->duree;
    }

    public function setDuree($duree){
        $this->duree = $duree;
    }

    public function getSynopsis(){
        return $this->synopsis;
    }

    public function setSynopsis($synopsis){
        $this->synopsis = $synopsis;
    }

    public function addGenre(Genre $genre){
        $this->genres[] = $genre;
    }

    public function addCastings(Casting $casting){
        $this->castings[] = $casting;
    }


    public function __toString(){
        return " " . $this->getTitre();
    }

}

    