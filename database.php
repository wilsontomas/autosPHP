<?php
 class dbContext{

   
    protected $servername="localhost";
    protected $username="root";
    protected $password="";
    protected $db="autos";
    protected $connection=null;

     function connect_db(){
         
       $this->connection = new mysqli($this->servername, $this->username, $this->password,$this->db);
        if ( $this->connection->connect_error) {
            die("Connection failed: " .  $this->connection->connect_error);
          }
         
    }

    function insert($nombre,$documento,$correo,$sexo,$telefono,$direccion,$marca,$modelo,$placa){
        $this->connection->query(
            "INSERT INTO `listado` (`nombre`, `documento`, `correo`, `sexo`, `telefono`, `direccion`, `marca`, `modelo`, `placa`) 
            VALUES ( 
                '".$nombre."',
                 '".$documento."', 
                 '".$correo."', 
                 '".$sexo."', 
                 '".$telefono."', 
                 '".$direccion."', 
                 '".$marca."', 
                 '".$modelo."', 
                 '".$placa."')");
        
    }
    function getAllVehicle(){
       $resultado = $this->connection->query("SELECT * FROM `listado`");
     /* while($data= $resultado->fetch_assoc()){
        echo $data['nombre'];
      }*/
      return $resultado;
    }
    function close(){
        $this->connection->close();
    }

}

//$clase = new dbContext();
//$clase->connect_db();
//$clase->insert('eduar','402','wilsonpumm@gmail.com','hombre','809','calle t','marca','modelo','placa');
//$clase->getAllVehicle();
?>