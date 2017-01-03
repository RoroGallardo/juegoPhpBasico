<?php 

class Palabra{ 
private $id;
public $valor;
private $cantsilabas;
private $incompleta;
private $faltante;
private $rutaimagen;
function __construct(){

}

function getRutaImagen() {
        return $this->rutaimagen;
    }

    function setRutaImagen($rutaImagen) {
        $this->rutaimagen = $rutaImagen;
    }
    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function getValor() {
        return $this->valor;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

    function getCantSilabas() {
        return $this->cantsilabas;
    }

    function setCantSilabas($cantsilabas) {
        $this->cantsilabas = $cantsilabas;
    }

    public function getIncompleta() {
        return $this->incompleta;
    }

    function setIncompleta($incompleta) {
        $this->incompleta = $incompleta;
    }

    function getFaltante() {
        return $this->faltante;
    }

    function setFaltante($faltante) {
        $this->faltante = $faltante;
    }

    function getNivel() {
        return $this->nivel;
    }

    function setNivel($nivel) {
        $this->nivel = $nivel;
    }

}

 ?>