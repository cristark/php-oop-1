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

    // Genero un costruttore della Classe creata
    public function __construct($_titolo)
    {
        $this->titolo = $_titolo;
    }
}

$movie1 = new Movie('Mission Impossible');
echo $movie1->titolo;
$movie1->voto = 7.5;
echo '<br>';
echo $movie1->voto;
var_dump($movie1);