<?php
class SoccerMatch {
  private $id;
  private $homeTeam;  
  private $homeGoals;
  private $outsideTeam;
  private $outsideGoals;
  private $date;
  private $location;

  public function __construct($homeTeam, $homeGoals, $outsideTeam, $outsideGoals, $date, $location) {
    $this->homeTeam = $homeTeam;
    $this->homeGoals = $homeGoals;
    $this->outsideTeam = $outsideTeam;
    $this->outsideGoals = $outsideGoals;
    $this->date = $date;
    $this->location = $location;
  }

  public function getId() {
    return $this->id;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function getHomeTeam() {
    return $this->homeTeam;
  }

  public function setHomeTeam($homeTeam) {
    $this->homeTeam = $homeTeam;
  }

  public function getHomeGoals() {
    return $this->homeGoals;
  }

  public function setHomeGoals($homeGoals) {
    $this->homeGoals = $homeGoals;
  }

  public function getOutsideTeam() {
    return $this->outsideTeam;
  }

  public function setOutsideTeam($outsideTeam) {
    $this->outsideTeam = $outsideTeam;
  }

  public function getOutsideGoals() {
    return $this->outsideGoals;
  }

  public function setOutsideGoals($outsideGoals) {
    $this->outsideGoals = $outsideGoals;
  }

  public function getDate() {
    return $this->date;
  }

  public function setDate($date) {
    $this->date = $date;
  }

  public function getLocation() {
    return $this->location;
  }

  public function setLocation($location) {
    $this->location = $location;
  }
}
?>