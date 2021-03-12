<?php

//// ● Creazione di una classe ‘Movie’
//// ● Dichiarazione delle proprietà della classe
//// ● Dichiarazione del costruttore
// ● Dichiarazione di almeno un metodo.
// ● Fare poi degli esempi di utilizzo della classe istanziando almeno due oggetti e stampando a schermo il
// valore delle proprietà.

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
    public $visione_minori;

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
        }
    }

    public function getVsione()
    {
        return $this->visione_minori;
    }
}

$movie1 = new Movie('Mission Impossible');

echo $movie1->titolo;

$movie1->voto = 7.5;

echo '<br>';

echo $movie1->voto;

$movie1->cast = ['Jeremy Renner', 'Simon Pegg', 'Paula Patton', 'Michael Nyqvist', 'Vladimir Mashkov', 'Josh Holloway', 'Anil Kapoor', 'Léa Seydoux', 'Tom Wilkinson'];

$movie1->durata = 128;
$movie1->setVisione('horror');

var_dump($movie1);