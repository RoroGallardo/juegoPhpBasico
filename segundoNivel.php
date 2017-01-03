<html>
    
     <?php
        include_once 'program/SegundoNivel.php';
           
        session_start();
       
        $cont = 0;
        
        ?> 
	<head>
		<title>La Palabra más Larga</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		   <!-- Bootstrap -->
		   <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" type="text/css" href="style.css">
                <link rel="stylesheet" type="text/css" href="animate.css">

	</head>
	<body >
            <br<br><br>
       
                
		<?php

                if($_SESSION['acum']==  SegundoNivel::cantPalabras()){
            
            
            header ("Location: resultadoS.php");
            
            
        }
        if(isset($_POST['txtId'])){
                       
   $_SESSION['auxFore']++;
   $_SESSION['auxFore']++;
   $_SESSION['auxFore']++;
   $_SESSION['auxiFore']++;
   $_SESSION['auxiFore']++;
   $_SESSION['auxiFore']++;
                        
// COMO SOLUCIONAR el problema de los puntajes
    // 
    // 
 	
        }else
        {
        $_SESSION['acum']=0;   
        $_SESSION['cont'] =0;
        $_SESSION['puntaje']=0;
        $_SESSION['incorrectas']=-1;            
        $_SESSION['correctas']=0;
        $_SESSION['auxFore']=3;
        $_SESSION['auxiFore']=1;
        $_SESSION['texto1']="oso";
        $_SESSION['texto2']="casa";
        $_SESSION['texto3']="cama";
        $_POST['txtVal']="cama";
        
	}
        $uno = $_SESSION['texto1'];
        $dos = $_SESSION['texto2'];
        $tres = $_SESSION['texto3'];
          $larga = SegundoNivel::esLaMasLarga($uno, $dos, $tres);
     
                        if($_POST['txtVal']==$larga){
                                $_SESSION['puntaje'] = $_SESSION['puntaje']+10;
                                  $_SESSION['correctas']++;

                        }else{
                                $_SESSION['incorrectas']++;
                        }
       $palabras = SegundoNivel::listarPrimerNivelEntre(  $_SESSION['auxiFore'], $_SESSION['auxFore']);
        $valAnimated=0;
       ?>
           
<br><br><div class="container ">
    <div id="products" class="row list-group">
             
        <div class="container"  >
        <div class="container " style="  background-color:  rgba(83, 83, 83, 0.4); ">
<?php   foreach ($palabras as $value) {


        //con un contador que vea las id que van aloja
        if( $value['id']<=$_SESSION['auxFore']){
        $cont++;
        
         $_SESSION['texto'.$cont] =$value['texto'];

         echo '';
         echo '';
      
         

         echo '<div class="item  col-xs-4 col-lg-4"   >';
         echo '<br>';
            echo '<form action="" method="POST"> ';
         echo ' <div class="thumbnail center_block  "  width="500px" height="500px"    >';
         echo '<img class="group list-group-image rollin animated" style="animation-delay: '.$valAnimated.'s;" width="200px" height="200px" src="'.$value['rutaimagen'].'" alt="">';
        
         echo '<div class="caption">';
         echo '<h4 class="group inner list-group-item-heading "'.$value['texto'].'</h4>';
         echo ' <div class="row">';

         echo '<div class="col-xs-12 col-md-6">';
         echo '<p class="lead bounceIn animated">'.$value['texto'].'</p>';
                  echo ' <input type="hidden"	 class="form-control"; name="txtId"; value="'.$value['id'].'";  hidden="hidden";  >'; 
                  echo ' <input type="hidden"	 class="form-control"; name="txtVal"; value="'.$value['texto'].'";  hidden="hidden";  >'; 
                   echo '<audio width="300" height="32" src="sonidos/'.$value['id'].'.mp3" controls="controls"  preload="">';
         echo ' </div>';
         echo '<div class="col-xs-12 col-md-6">';
         echo '    <input type="submit" class="btn btn-info" name="submit" value="SELECCIONAR"><br>';
         echo '</div></div> </div></div></div>';
         echo '</form>';
         echo '';
         echo '';
         echo '';
         echo '';
         echo '';
         echo '';
         echo '';   
          $_SESSION['acum']++;
        $valAnimated++;
       }
}
?>          
    </div>
    </div>
          
                
            <br><br><br>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		    <script src="https://code.jquery.com/jquery.js"></script>
		    <!-- Include all compiled plugins (below), or include individual files as needed -->
		    <script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>