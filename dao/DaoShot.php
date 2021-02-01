<?php 
  require_once "../Connection.php";
  require_once "../models/Shot.php";

  class DaoShot {
    public function __construct() {
    }

    public function list($match = ""): array {
      $sql = "SELECT s.id, concat(s.match_id, ' - ', th.name, ' X ', tout.name) as 'match', 
              s.generator, s.schedule, s.shot, s.photo 
              FROM shots s
              JOIN matches m on m.id = match_id
              JOIN teams th on th.id = m.homeTeam
              JOIN teams tout on tout.id = m.outsideTeam ";

              if ($match) {
                $sql .= "WHERE s.match_id = ?;";
              }
      $list = array();
      
      try {
        $pst = Connection::getPreparedStatement($sql);
        $pst->bindValue(1, $match);
        $pst->execute();
        $list = $pst->fetchAll(PDO::FETCH_ASSOC);
      } catch (PDOException $e) {
        echo $e->getMessage();
      }
      return $list;
    }

    public function insert(Shot $shot) {
      $sql = "INSERT INTO shots
              (match_id, generator, schedule, shot, photo)
              VALUE (?, ?, ?, ?, ?);";

      try {
        $pst = Connection::getPreparedStatement($sql);
        $pst->bindValue(1, $shot->getMatch());        
        $pst->bindValue(2, $shot->getGenerator());
        $pst->bindValue(3, $shot->getSchedule());
        $pst->bindValue(4, $shot->getShot());
        $pst->bindValue(5, $shot->getPhoto());        

        if ($pst->execute()) {
          echo "Lance cadastrado com sucesso!";
          return true;
        } else {
          echo "Falha ao cadastrar lance!";
          return false;
        }
      } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
      }
    }
  }

?>