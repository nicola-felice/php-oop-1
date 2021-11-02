<?php

class Movie {
  private $title;
  private $director;
  private $overview;
  private $year;
 
  public function __construct($_title, $_director, $_overview, $_year)  {
    $this->title = $_title;
    $this->director = $_director;
    $this->overview = $_overview;
    $this->year = $_year;
  }

  public function getTitle() {
    return $this->title;
  }
  public function getDirector() {
    return $this->director;
  }
  public function getOverview() {
    return $this->overview;
  }
  public function getYear() {
    return $this->year;
  }

  public function setTitle($_title) {
    if ( !is_string($_title) ) {
      return null;
    }
    $this->title = $_title;
  }
}