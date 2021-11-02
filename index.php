<?php

// Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
// metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
// - è definita una classe ‘Movie’
//    => all'interno della classe sono dichiarate delle variabili d'istanza
//    => all'interno della classe è definito un costruttore
//    => all'interno della classe è definito almeno un metodo
// - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

require __DIR__ . '/movie.php';

$filmsArr = [];

$filmsArr[] = new Movie('Dune', 'Denis Villeneuve', "In 10191, Duke Leto of House Atreides, ruler of the ocean planet Caladan, is assigned by the Padishah Emperor Shaddam Corrino IV to replace House Harkonnen as fief rulers of Arrakis. Arrakis is a harsh desert planet and the only source of \"spice\", a valuable substance that extends human vitality and is critical for interstellar travel. In reality, Shaddam intends to have House Harkonnen stage a coup to retake the planet with aid of the Emperor's Sardaukar troops, eradicating House Atreides, whose influence threatens Shaddam's control. Leto is apprehensive but sees the political advantages of controlling the spice planet, and an alliance with its native population, skilled fighters known as the Fremen.", 2021);

$filmsArr[] = new Movie("The Matrix", "	The Wachowskis", "At an abandoned hotel within a major city, a police squad corners Trinity, who overpowers them with her superhuman abilities. She flees, pursued by the police and a group of suited Agents capable of similar superhuman feats. She answers a ringing public telephone and vanishes just before an Agent crashes a truck into the booth.
Computer programmer Thomas Anderson, known by his hacking alias \"Neo\", is puzzled by repeated online encounters with the phrase \"the Matrix\". Trinity contacts him and tells him a man named Morpheus has the answers he seeks. A team of Agents and police, led by Agent Smith, arrives at Neo's workplace in search of him. Though Morpheus attempts to guide Neo to safety via a phone call, Neo chooses to be captured rather than risk escaping via the window ledge of the skyscraper. The Agents then attempt to coerce Neo into helping them locate Morpheus, whom they claim is a terrorist. Neo insists on his right to a phone call so that he can contact a lawyer, but the agents cause his mouth to fuse shut and implant a robotic \"bug\" inside him. Neo wakes up from what he believes to be a nightmare and is taken by Trinity to meet Morpheus shortly afterwards. Along the way, they remove the bug from Neo's stomach, proving that the nightmare he experienced was real.", 1999);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-classes</title>
</head>
<body>
  <ul>
    <?php foreach($filmsArr as $film): ?>
      <li>
        <h3>Title: <?= $film->getTitle() ?></h3>
        <h4>Director: <?= $film->getDirector() ?></h4>
        <div>Director: <?= $film->getYear() ?></div>
        <p><strong>Overview:</strong> <?= $film->getOverview() ?></p>
      </li>
    <?php endforeach; ?>
  </ul>
</body>
</html>