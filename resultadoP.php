<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
   <head>
		<title>Resultado Completar palabras</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		   <!-- Bootstrap -->
		   <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" type="text/css" href="style.css">
                <link rel="stylesheet" type="text/css" href="animate.css">

	</head>
    
    
    <?php session_start(); ?>
        <br><br><br>
    <body>
        <div class="container bounceIn animated" style="background-color:  rgba(83, 83, 83, 0.4);" > 
        <div class="container " >
                <br>
                <h2> ¡FELICITACIONES! </h2>
                <h4> TUS RESULTADOS SON : </h4>
                <br>
                <div class="col-lg-1 col-md-1"></div>
            <div class="row col-lg-3 col-md-3 center-block ">
                <label class="label-danger">RESPUESTAS INCORRECTAS</label>

             <?php ?>
                <input type="text"  class="form-control col-md-1" style="text-align: center;" value=" <?php echo $_SESSION['incorrectas'];  ?> " name="txtFaltante" >
            <br>           
            </div>
           
                
         <div class="row col-lg-3 col-md-3 center-block " >            
        <label class="label-success">RESPUESTAS CORRECTAS</label>

          <?php echo '<input  type="text" class="form-control col-md-1 succes " style="text-align: center;" value="'.$_SESSION['correctas'].'"  name="txtFaltante"  > '; ?>
            <br>           
        </div>
                
            <div class="row col-lg-3 col-md-3 center-block ">
        
                <label class="label-info">TU PUNTUACION FINAL</label>
                <input type="text"  class="form-control col-md-1  " style="text-align: center;" value=" <?php echo $_SESSION['puntaje'];  ?> " name="txtFaltante" >
            <br>           
            </div><br><br>
              
            
        </div>
                <div>
                    <br>
                    <a href="primerNivel.php">  <input type="submit" name="submit" class="btn center-block btn-success     " value="VOLVER A JUGAR"></a><br>
                   </div>
                <div>
                    <br>
                    <a href="index.php">  <input type="submit" name="submit" class="btn center-block btn-success     " value="MENÚ PRINCIPAL   "></a><br>
                </div>
            </div>
	    
    </body>
</html>
     <?php session_destroy();