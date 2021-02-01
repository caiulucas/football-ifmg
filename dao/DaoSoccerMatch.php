<?php 
  require_once "../Connection.php";
  require_once "../models/SoccerMatch.php";

  class DaoSoccerMatch {
    public function __construct() {
    }


    public function getById($id) {
      $sql = "SELECT m.id, thome.name as 'homeTeam', m.homeGoals, 
              tout.name as 'outsideTeam', m.outsideGoals, m.date, m.location 
              FROM matches m 
              JOIN teams thome ON thome.id = m.homeTeam
              JOIN teams tout ON tout.id = m.outsideTeam
              WHERE m.id = ?;";
      $match = null; 
      try {
        $pst = Connection::getPreparedStatement($sql);
        $pst->bindValue(1, $id);
        $pst->execute();
        $match = $pst->fetchAll(PDO::FETCH_ASSOC);
      } catch (PDOException $e) {
        echo $e->getMessage();
      }
      return $match[0];
    }

    public function list(): array {
      $sql = "SELECT m.id, thome.name as 'homeTeam', m.homeGoals, 
              tout.name as 'outsideTeam', m.outsideGoals, m.date, m.location 
              FROM matches m 
              JOIN teams thome ON thome.id = m.homeTeam
              JOIN teams tout ON tout.id = m.outsideTeam;";
              
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

    public function insert(SoccerMatch $match) {
      $sql = "INSERT INTO matches 
              (homeTeam, homeGoals, outsideTeam, outsideGoals, date, location) 
              VALUE (?, ?, ?, ?, ?, ?);";

      try {
        $pst = Connection::getPreparedStatement($sql);
        $pst->bindValue(1, $match->getHomeTeam());        
        $pst->bindValue(2, $match->getHomeGoals());
        $pst->bindValue(3, $match->getOutsideTeam());
        $pst->bindValue(4, $match->getOutsideGoals());
        $pst->bindValue(5, $match->getDate());
        $pst->bindValue(6, $match->getLocation());

        if ($pst->execute()) {
          echo "Partida cadastrada com sucesso!";
          return true;
        } else {
          echo "Falha ao cadastrar partida!";
          return false;
        }     
      } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
      }
    }
  }

?>