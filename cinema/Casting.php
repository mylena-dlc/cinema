<?php

class Casting{
    
    private Role $role;
    private Acteur $acteur;
    private Film $film;


    public function __construct(Role $role, Acteur $acteur, Film $film){
        $this->role= $role;
        $this->film= $film;
        $this->acteur = $acteur;
        $acteur->addCastings($this);
        $role->addCastings($this);
        $film->addCastings($this);
        }
    
        // fonction pour afficher le casting d'un film
        public function afficherCasting(){
            echo "Dans le film " . $this->film.", ". $this->role . " a été incarné par " . $this->acteur . ". ";
        }

        public function __toString(){
            return $this->acteur. $this->role . $this->film;
        }

    

    /**
     * Get the value of acteur
     */ 
    public function getActeur()
    {
        return $this->acteur;
    }

    /**
     * Set the value of acteur
     *
     * @return  self
     */ 
    public function setActeur($acteur)
    {
        $this->acteur = $acteur;

        return $this;
    }

    /**
     * Get the value of film
     */ 
    public function getFilm()
    {
        return $this->film;
    }

    /**
     * Set the value of film
     *
     * @return  self
     */ 
    public function setFilm($film)
    {
        $this->film = $film;

        return $this;
    }

        /**
         * Get the value of role
         */ 
        public function getRole()
        {
                return $this->role;
        }

        /**
         * Set the value of role
         *
         * @return  self
         */ 
        public function setRole($role)
        {
                $this->role = $role;

                return $this;
        }
    }




  


?>