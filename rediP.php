<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include './program/primer_nivel.php';
session_start();
 if( PrimerNivel::existeSig($_SESSION['acum'])==null){
            
         echo '<script type="text/javascript">
window.location="resultadoP.php";
</script>';
         
         
         } else{
            $_SESSION['acum'] += $_GET['acum']; 
         
         echo '<script type="text/javascript">
window.location="primerNivel.php?acum='.$_SESSION['acum'].'";
</script>';
         
         
          
             
             
             
             
         } 