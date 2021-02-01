<?php 
  require_once "../Connection.php";
  require_once "../models/Team.php";

  class DaoTeam {
    public function __construct() {
    }

    public function list(): array {
      $sql = "SELECT * FROM teams;";
      $list = array();

      try {
        $pst = Connection::getPreparedStatement($sql);
        $pst->execute();
        $list = $pst->fetchAll(PDO::FETCH_ASSOC);
      } catch (PDOException $e) {
        echo $e->getMessage();
      }
      return $list;
    }

    public function insert(Team $team) {
      $sql = "INSERT INTO teams (name, cityState, country) VALUE (?, ?, ?);";

      try {
        $pst = Connection::getPreparedStatement($sql);
        $pst->bindValue(1, $team->getName());        
        $pst->bindValue(2, $team->getCityState());
        $pst->bindValue(3, $team->getCountry());

        if ($pst->execute()) {
          echo "{$team->getName()} cadastrado com sucesso!";
          return true;
        } else {
          echo "Falha ao cadastrar time!";
          return false;
        }        
      } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
      }
    }
  }

?>