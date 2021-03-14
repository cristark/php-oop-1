<?php

class Movie {
    public $titolo;
    public $durata;
    public $voto;
    public $lingua;
    public $regista;
    public $protagonista;
    public $cast;
    public $descrizione;
    public $genere;
    public $visione_minori = true;
    public $anno;

    // Genero un costruttore della Classe creata
    public function __construct($_titolo)
    {
        $this->titolo = $_titolo;
    }

    // Creazione metodo
    public function setVisione($_genere)
    {
        if($_genere == 'horror') {
            $this->genere = $_genere;
            $this->visione_minori = false;
        } else {
            $this->genere = $_genere;
        }
    }

    public function getVisione()
    {
        return $this->visione_minori;
    }
}

// | FILM ESEMPIO |
$movie1 = new Movie('Mission: Impossible - Protocollo Fantasma');
$movie1->durata = 128;
$movie1->voto = 7.5;
$movie1->anno = '2018';
$movie1->lingua = 'Inglese';
$movie1->regista = 'Brad Bird';
$movie1->protagonista = 'Tom Cruise';
$movie1->cast = ['Tom Cruise', 'Jeremy Renner', 'Simon Pegg', 'Paula Patton'];
$movie1->descrizione = "Implicati loro malgrado in un gravissimo attentato terroristico al Cremlino l'agente Ethan Hunt e i suoi collaboratori sono messi al bando dal governo americano. Il Presidente lancia l'operazione 'Protocollo Fantasma'. Hunt e i suoi ufficialmente non agiscono più per conto degli Usa ma tocca a loro, senza alcuna copertura, cercare di fermare chi sta cercando di scatenare una guerra nucleare contando sulla mai sopita diffidenza tra russi e yankee.";
$movie1->setVisione('azione');

// Prova inserimento nuova proprietà all'istanza, non presente tra le proprietà della Classe
$movie1->poster = 'https://upload.wikimedia.org/wikipedia/it/8/80/Mission_Impossible_-_Protocollo_fantasma.JPG';