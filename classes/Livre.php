<?php

class Livre {
    private string $titre;
    private int $nbPages;
    private int $dateParution;
    private float $prix;
    private Auteur $auteur;



    public function __construct(string $titre, int $nbPages, int $dateParution, float $prix, Auteur $auteur)
    {
        $this->titre = $titre;
        $this->nbPages = $nbPages;
        $this->dateParution = ($dateParution);
        $this->prix = $prix;
        $this->auteur = $auteur;
        $this->auteur->addLivre($this);

    }

    public function getTitre(): string {
        return $this->titre;
    }

    public function setTitre($titre) {
        $this->titre = $titre;
    }

    public function getNbPages(): int {
        return $this->nbPages;
    }

    public function setNbPages($nbPages) {
        $this->nbPages = $nbPages;
    }

    public function getDateParution(): int {
        return $this->dateParution;
    }

    public function setDateParution($dateParution) {
        $this->dateParution = $dateParution;
    }

    public function getPrix(): int {
        return $this->prix;
    }

    public function setPrix($prix) {
        $this->prix = $prix;
    }
    public function getAuteur(): Auteur {
        return $this->auteur;
    }

    public function setAuteur($auteur) {
        $this->auteur = $auteur;
    }

    public function __toString() {
        return $this->titre . " (" . $this->dateParution.") : ". $this->nbPages ." pages / ". $this->prix ."€<br>";
    }



}



?>