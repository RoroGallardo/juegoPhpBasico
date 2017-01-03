<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SegundoNivel
 *
 * @author Ricardo
 */
include 'Conexion.php';
include 'Palabra.php';

class SegundoNivel {

    
    static function listarPrimerNivel() {
             $array = new ArrayObject();
        try {
            $pdo = new Conexion();
            $stmt = $pdo->prepare("select * from palabra where nivel=1");
            $stmt->execute();
            $resultado=$stmt->fetchAll();
            foreach ($resultado as $value) {
                $array->append($value);
            }  
        } catch (PDOException $exc) {
            echo "Error al listar: " . $exc->getMessage();
            return false;
        }
        return $array;
        }
   
    static function listarPrimerNivelEntre($pre, $pos) {
             $array = new ArrayObject();
        try {
            $pdo = new Conexion();
            $stmt = $pdo->prepare("select * from palabra where id between ? and ? ");
            $stmt->bindParam(1, $pre);
            $stmt->bindParam(2, $pos);
            $stmt->execute();
            $resultado=$stmt->fetchAll();
            foreach ($resultado as $value) {
                $array->append($value);
            }  
        } catch (PDOException $exc) {
            echo "Error al listar: " . $exc->getMessage();
            return false;
        }
        return $array;
        }
   
        static function listarSegundoNivel() {
             $array = new ArrayObject();
        try {
            $pdo = new Conexion();
            $stmt = $pdo->prepare("select * from palabra where nivel=2");
            $stmt->execute();
            $resultado=$stmt->fetchAll();
            foreach ($resultado as $value) {
                $array->append($value);
            }  
        } catch (PDOException $exc) {
            echo "Error al listar: " . $exc->getMessage();
            return false;
        }
        return $array;
        }
        
         static function esLaMasLarga( $un,$dos,$tres) {
          
      
            
            if(strlen($un)>  strlen($dos)||strlen($un)>  strlen($tres)){
                return $un;
            }  elseif (strlen($dos)>  strlen($un)||strlen($dos)>  strlen($tres)) {
                return $dos;                
            }elseif (strlen($tres)>  strlen($un)||strlen($tres)>  strlen($dos)) {
                return $tres;
            }
            
        
        
         }
         static function cantPalabras(){
   $cant = null;
        try {
            $pdo = new Conexion();
            $stmt = $pdo->prepare("select * from palabra");

            $stmt->execute();
            $resultado=$stmt->fetchAll();
            foreach ($resultado as $value) {
              
                $cant++;
            }  

            	$pdo=null;
                  return $cant;
        } catch (PDOException $exc) {
            echo "Error al listar: " . $exc->getMessage();
            return $cant;
        }
       
    

}
}
         


