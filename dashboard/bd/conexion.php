<?php
 class Conexion{
     public static function Conectar(){
         $serverName = "tcp:servidoradastra.database.windows.net,1433";
         $database = "ADastra";
         $username = "ADMIN-ADASTRA";
         $password = "Grande123$";
         
         $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
         
         try{
            $conexion = new PDO("sqlsrv:server=$serverName;Database=$database", $username, $password, $opciones);             
            return $conexion; 
         }catch (Exception $e){
             die("El error de Conexión es :".$e->getMessage());            
         }         
     }
     
 }
?>
