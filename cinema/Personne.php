<?php

class Personne {
    private string $nom;
    private string $prenom;
    private string $sexe;
    private DateTime $dateDeNaissance;

    public function __construct($nom, $prenom, $sexe, string $dateDeNaissance){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->sexe = $sexe;
        $this->dateDeNaissance = new DateTime($dateDeNaissance);
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of sexe
     */ 
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set the value of sexe
     *
     * @return  self
     */ 
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get the value of dateDeNaissance
     */ 
    public function getDateDeNaissance()
    {
        return $this->dateDeNaissance->format('d-m-Y');
    }

    /**
     * Set the value of dateDeNaissance
     *
     * @return  self
     */ 
    public function setDateDeNaissance($dateDeNaissance)
    {
        $this->dateDeNaissance = new DateTime($dateDeNaissance);

        return $this;
    }

        // fonction pour calculer l'âge
        public function calculerAge(){
            $now = new DateTime();
            $dateNaissance = new DateTime($this->getDateDeNaissance());
            $age = $now->diff($dateNaissance)->format("%Y");
            return $age . " ans ";
        }
    
        // fonction pour afficher nom/prénom/âge du réalisateur
        public function __toString(){
            return "Nom : " . $this->getNom() . " <br/> Prénom : " . $this->getPrenom() . " <br/> Sexe : " . $this->getSexe() . " <br/> Date de naissance : ".$this->getDateDeNaissance()." (" .$this->calculerAge() . ")<br/>";
        }


}