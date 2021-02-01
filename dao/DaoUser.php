<?php 
  require_once "../Connection.php";
  require_once "../models/User.php";

  class DaoUser {
    public function __construct() {
    }

    public function list(): array {
      $sql = "SELECT * FROM users;";
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

    public function insert(User $user) {
      $sql = "INSERT INTO users (username, password) VALUE (?, ?);";

      try {
        $pst = Connection::getPreparedStatement($sql);
        $pst->bindValue(1, $user->getUsername());        
        $pst->bindValue(2, $user->getPassword());

        if ($pst->execute()) {
          echo "Usuário cadastrado com sucesso!";
          return true;
        } else {
          echo "Falha ao cadastrar usuário!";
        }         
      } catch (PDOException $e) {
        echo $e->getMessage();
        return false;
      }
    }

    public function verifyLogin(User $user) {
      $sql = "SELECT * FROM users WHERE username = ? AND password = ?;";

      try {
        $pst = Connection::getPreparedStatement($sql);
        $pst->bindValue(1, $user->getUsername());
        $pst->bindValue(2, $user->getPassword());

        if ($pst->execute()) {
          $value = $pst->fetchAll(PDO::FETCH_ASSOC);
          
          if ($value[0] > 0) {
            return true;
          }
        }
      } catch (PDOException $e){
        echo $e->getMessage();
        return false;
      }

      return false;
    }
  }

?>