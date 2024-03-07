<?php

declare(strict_types=1);

class Livre {
    private string $titre;
    private string $genre;
    private int $nbpage;
    private float $prix;

    // Constructeur
    public function __construct(string $titre, string $genre, int $nbpage, float $prix) {
        $this->titre = $titre;
        $this->genre = $genre;
        $this->nbpage = $nbpage;
        $this->prix = $prix;
    }

    public function getTitre(): string {
        return $this->titre;
    }

    public function getGenre(): string {
        return $this->genre;
    }

    public function getNbpage(): int {
        return $this->nbpage;
    }

    public function getPrix(): float {
        return $this->prix;
    }

    public function setTitre(string $titre): void {
        $this->titre = $titre;
    }

    public function setGenre(string $genre): void {
        $this->genre = $genre;
    }

    public function setNbpage(int $nbpage): void {
        $this->nbpage = $nbpage;
    }

    public function setPrix(int $prix): void {
        $this->prix = $prix;
    }

    public function addChapitre() {

    }

    public function getListChapitre() {

    }
}
