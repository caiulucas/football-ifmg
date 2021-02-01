<?php 
class Connection {
  private static $dsn = 'mysql:host=localhost;dbname=football;port=3306';
  private static $user = 'root';
  private static $password = 'Password@12';
  private static $conn = null;

  public function __construct() {}

  public static function getConnection() {
    if (Connection::$conn == null) {
      try{
        Connection::$conn = new PDO(Connection::$dsn, Connection::$user, Connection::$password);
      } catch (PDOException $e) {
        echo $e->getMessage();
      }
    }
    return Connection::$conn;   
  }

  public static function getPreparedStatement($sql) : PDOStatement {
    if (Connection::$conn == null) {
      Connection::$conn = Connection::getConnection();
    }
    try {
      return Connection::$conn->prepare($sql);
    } catch (PDOException $e) {
      echo $e->getTraceAsString();
    }
    return null;
  }
}
?>