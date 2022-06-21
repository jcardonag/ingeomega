 
 <?php 
  //Codigo para la conexión a la base de datos con la pagina web 
  $conex= mysqli_connect("localhost","lectura","lectura2021**","ingeomega");

 ?>
 <?php

class Database{
    //Solicitud de credenciales y accesos para la base de datos
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct(){
        $this->host = 'localhost';
        $this->db = 'ingeomega';
        $this->user = 'lectura';
        $this->password = 'lectura2021**';
        $this->charset = 'utf8mb4';
    }

    function connect(){
        try{
            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            
            $pdo = new PDO($connection, $this->user, $this->password, $options);
    
            return $pdo;
        }catch(PDOException $e){
            print_r('Error connection: ' . $e->getMessage());
        }
    }

}

?>
