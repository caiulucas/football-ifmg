<?php
class Shot {
  private $id;
  private $match;
  private $generator;
  private $schedule;
  private $shot;
  private $photo;

  public function __construct($match, $generator, $schedule, $shot, $photo) {
    $this->match = $match;
    $this->generator = $generator;
    $this->schedule = $schedule;
    $this->shot = $shot;
    $this->photo = $photo;
  }

  public function getId() {
    return $this->id;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function getMatch() {
    return $this->match;
  }

  public function setMatch($match) {
    $this->match = $match;
  }

  public function getGenerator() {
    return $this->generator;
  }

  public function setGenerator($generator) {
    $this->generator = $generator;
  }

  public function getSchedule() {
    return $this->schedule;
  }

  public function setSchedule($schedule) {
    $this->schedule = $schedule;
  }

  public function getShot() {
    return $this->shot;
  }

  public function setShot($shot) {
    $this->shot = $shot;
  }

  public function getPhoto() {
    return $this->photo;
  }

  public function setPhoto($photo) {
    $this->photo = $photo;
  }
}
?>