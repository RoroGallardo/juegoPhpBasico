<?php

class Conexion extends PDO {

    function __construct() {
        try {
            parent::__construct('mysql:host=localhost;dbname=katy', 'root', '');
            parent::setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $ex) {
            die('La base de datos seleccionada no existe');
        }
    }

}   