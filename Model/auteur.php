<?php

class Auteur implements TextDataAccess{
    protected string $nom;
    protected string $prenom;
    private array $listLivre = array();

    public function __construct(string $nom, string $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function setNom(string $nom): void {
        $this->nom = $nom;
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function setPrenom(string $prenom): void {
        $this->prenom = $prenom;
    }

    public function getPrenom(): string {
        return $this->prenom;
    }

    public function addLivre(Livre $livre): void {
        $this->listLivre[] = $livre;
    }

    public function getListeLivres(): array {
        return $this->listLivre;
    }

    public function textOutput(array $To_export, string $To_file) : bool {
        $filePath = getcwd().DIRECTORY_SEPARATOR.$To_file;
        $fp = fopen($filePath, "w+");
        chmod($filePath, 0600);
        $serializedData = serialize($To_export);
        fwrite($fp, $serializedData);
        fclose($fp);
        return true;
    }
    
    public function textInput(array &$To_import, string $From_file) : bool {
        $filePath = getcwd().DIRECTORY_SEPARATOR.$From_file;
        $fp = fopen($filePath, "r");
        $serializedData = fread($fp, filesize($filePath));
        fclose($fp);
    
        $To_import = unserialize($serializedData);
        if ($To_import === false) {
            return false;
        }
    
        $resultFilePath = getcwd().DIRECTORY_SEPARATOR."unzerialize.txt";
        $fp = fopen($resultFilePath, "w");
        if ($fp) {
            fwrite($fp, print_r($To_import, true));
            fclose($fp);
        }
        return true;
    }
}

