<?php

class Auteur {  
    private string $prenom;
    private string $nom;
    private array $livres;


    public function __construct(string $prenom, string $nom) 
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->livres = [];
    }

    public function getPrenom(): string 
    {
        return $this->prenom;
    }

    public function setPrenom($prenom) 
    {
        $this->prenom = $prenom;
        return $this;
    }

    public function getNom(): string 
    {
        return $this->nom;
    }

    public function setNom($Nom) 
    {
        $this->nom = $nom;
        return $this;
    }

    public function getLivres()
    {
        return $this->livres;
    }

    public function setLivres($Livres) 
    {
        $this->livres = $livres;
        return $this;
    }

    public function addLivre(Livre $livre) {
        $this->livres[] = $livre;
    }

    public function __toString() {
        return $this->getPrenom() ." ".$this->getNom()."<br>";
    }

    public function afficherBibliographie() {
        $result = "<h1>Livres de $this<br></h1>";

        foreach($this->livres as $livre) {
            $result .= $livre."<br>";
        }
        return $result;
    }

}

?>