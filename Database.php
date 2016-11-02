<?php

class Database {

    
    private $_connection;
    private static $_instance; 

    public static function getInstance() { 
        if(!(self::$_instance instanceof self)) { 
            self::$_instance = new self(); 
        }
        return self::$_instance;
    }


 
    private function __construct() {


        //Aqui le pasamos los datos del .ini para el acceso
        $config = parse_ini_file('config/config.ini'); 

       
        $this->_connection = new mysqli($config['host'],$config['username'],
            $config['password'],$config['dbname']);


        if($this->_connection->connect_error) {
            trigger_error("Imposible conectarse a la base de datos: " . $this->_connection->connect_error,
                E_USER_ERROR);
        }
    }

    public function __clone() {
        trigger_error("Clonado de ". get_class($this) ." no permitido: ",E_USER_ERROR);
    }

    public function __wakeup()
    {
        trigger_error("Deserializacion de ". get_class($this) ." no permitida: ",E_USER_ERROR);
    }

    public function getConnection() {
        return $this->_connection;
    }

}