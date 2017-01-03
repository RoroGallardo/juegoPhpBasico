


<html>
    
     <?php
        include_once 'program/primer_nivel.php';
           
        session_start();
       
        if($_SESSION['acum']==PrimerNivel::cantPalabras()){
            
            
            header ("Location: resultadoP.php");
            
            
        }
        
        
        ?> 
	<head>
		<title>Completar palabras</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		   <!-- Bootstrap -->
		   <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" type="text/css" href="style.css">
                <link rel="stylesheet" type="text/css" href="animate.css">

	</head>
	<body >

		<?php

        if(isset($_POST["txtId"])){
                        $_SESSION['acum'] ++;

                        if(PrimerNivel::comparacion($_POST["txtFaltante"])){
                                $_SESSION['puntaje'] = $_SESSION['puntaje']+10;
                                  $_SESSION['correctas']++;
                        }else{
                                $_SESSION['incorrectas']++;
                        }	
        }else
        {
        $_SESSION['acum']=1;   
        $_SESSION['cont'] =0;
        $_SESSION['puntaje']=0;
        $_SESSION['incorrectas']=0;            
        $_SESSION['correctas']=0;

        
	}
        
        $dto = PrimerNivel::RetornarPalabra($_SESSION['acum']);
        
       ?>

		<br><br>
		<div class="container bounce animated">
                    <h1 style=" background-color:  rgba(83, 83, 83, 0.7);" ><font color="#FFFFFF" >COMPLETA LAS PALABRAS</font></h1>
		</div>

		<div class="container"  style="  background-color:  rgba(83, 83, 83, 0.7); ">

	
<?php  ?>
        <div class="container " >
            <br>
            
  			
       <?php echo'    <form method="post" action=""> ';?>
  	        <div class="col-lg-7 col-md-7">
                 <?php echo  ' <img class="img-responsive center-block fadeInUp animated" width="300px" height="300px" src="'.$dto->getRutaImagen().'" alt="">' ;?>
            </div>
            <div class="row col-lg-5 col-md-5  ">
             <?php  echo ' <font color="#FFFFFF" ><h3 style="color : withe;" class="tada animated" >'.$dto->getIncompleta().'</h3></font> ';?>
                <br>
                <font color="#FFFFFF" ><h4>INGRESA LA VOCAL RESTANTE</h4></font>    
                <br>
             
             <?php echo ' <font color="#FFFFFF" ><input type="hidden"	 class="form-control"; name="txtId"; value="'.$dto->getId().'";  hidden="hidden";  ></font>';  ?>
             
               
                <input type="text" class="form-control col-md-1" name="txtFaltante" style="text-align: center;" hidden="hidden" required="true" >
                <br>
                <div>
             <?php      echo '<audio width="300" height="32" src="sonidos/'.$dto->getId().'.mp3" controls="controls" autoplay="autoplay" preload="">' ?>
                 </audio></a>
                
                
                
                </div>  
                <br>
                <div>
                <input type="submit" class="btn btn-success" name="submit" value="ENTRAR"><br>
                </div>
            </div>
</form>
            
        </div>
                    <br>       
	    </div>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		    <script src="https://code.jquery.com/jquery.js"></script>
		    <!-- Include all compiled plugins (below), or include individual files as needed -->
		    <script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>