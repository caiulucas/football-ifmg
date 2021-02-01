<?php
class Team {
    private $id;
    private $name;
    private $cityState;
    private $country;

    public function __construct($name, $cityState, $country) {      
      $this->name = $name;
      $this->cityState = $cityState;
      $this->country = $country;
    }

    public function getId() {
      return $this->id;
    }

    public function setId($id) {
      $this->id = $id;
    }

    public function getName() {
      return $this->name;
    }

    public function setName($name) {
      $this->name = $name;
    }

    public function getCityState() {
      return $this->cityState;
    }

    public function setCityState($cityState) {
      $this->cityState = $cityState;
    }

    public function getCountry() {
      return $this->country;
    }

    public function setCountry($country) {
      $this->country = $country;
    }
}
?>