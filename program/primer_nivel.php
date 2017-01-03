<?php 

include 'Palabra.php';
include 'Conexion.php';
class PrimerNivel {
 static function retornarPalabra($id) {
  $palabra = null;
        try {
            $pdo = new Conexion();
            $stmt = $pdo->prepare("select * from palabra where id=?");
            $stmt->bindParam(1,$id);
            $stmt->execute();
            $resultado=$stmt->fetchAll();
            foreach ($resultado as $value) {
                $palabra = new Palabra();
                $palabra->setId($value["id"]);
                $palabra->setValor($value["texto"]);
                $palabra->setCantSilabas($value["cantsilabas"]);
                $palabra->setIncompleta($value["incompleta"]);
                $palabra->setFaltante($value["faltante"]);	
                $palabra->setNivel($value["nivel"]);
                $palabra->setRutaImagen($value["rutaimagen"]);
            }  

            	$pdo=null;
                  return $palabra;
        } catch (PDOException $exc) {
            echo "Error al listar: " . $exc->getMessage();
            return $palabra;
        }
        return null;
        }


public static function comparacion($incompleta) {
  $aux=false;
        try {
            $pdo = new Conexion();
            $stmt = $pdo->prepare('select * from palabra where faltante="'.$incompleta.'"');
            $stmt->execute();
            $resultado=$stmt->fetchAll();
            foreach ($resultado as $value) {
    	       $aux = true;
            }  

            	$pdo=null;

        } catch (PDOException $exc) {
            echo "Error al listar: " . $exc->getMessage();
            return false;
        }
        return $aux;
        }
static function  existecone (){
    $aux = false;
     $pdo = new Conexion();
            $stmt = $pdo->prepare('select * from palabra ');
            $stmt->execute();
            $resultado=$stmt->fetchAll();
            foreach ($resultado as $value) {
    	       $aux = true;
            }  

            	$pdo=null;
    return $aux;
    
}


static function  existeSig($id){
    $aux = false;
    $com = $id+1;
     $pdo = new Conexion();
            $stmt = $pdo->prepare('select * from palabra where id =? ');
            $stmt->bindParam(1, $com);
            $stmt->execute();
            $resultado=$stmt->fetchAll();
            foreach ($resultado as $value) {
    	       $aux = true;
            }  

            	$pdo=null;
    return $aux;
    
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




 ?>