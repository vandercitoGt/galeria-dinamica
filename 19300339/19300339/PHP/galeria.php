<!DOCTYPE html>
<html lang="es">
<head>
<link rel="stylesheet" type="text/css" href="/css/estilos.css">
<meta charset="utf-8" />
<title>'Galeria Dinamica'</title>
</head>
<body style="background-color: white;">
	<header>
			<h1 style="text-align:center; color: red;"> Galeria Dinamica HTML5,CSS3,PHP</h1>
	</header>
	<section>
		<div>
			<ul>
		<table width="150em" height="150em" style="border-radius: 4px; border: 4px solid #000; margin: 0 auto; background-color:lightgreen;">
				<?php
				if(isset($_GET['pini'])){
					$PI=$_GET['pini'];
					$PF=$_GET['pfin'];
				echo'<tr style="text-align:center;">';
				for($x=$PI;$x<=$PF;$x++){
					echo'<td><img width="150em" height="150em" src="img/'.$x.'.jpg";/></td>';
					if($x%3==0)
						{
							echo"</tr><tr>";
						}
				}
				echo '</tr>';
				}else
						{
						    echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=galeria.php?pini=1&pfin=9">'; // Redirección con espera de 3 segundos
						}
				?>
		</table>
	</div>
		<div align="center"> 
			  <ul >
                   <?php
                   if(isset($PI)){
                   if($PI==1&&$PF==9){
                    echo'<a href="galeria.php?pini=10&pfin=18"> <img width="75em" height="75em" src="img/flechader.png"/> </a>';
                    }
                    elseif ($PI==10&&$PF==18) {
                    echo'<a href="galeria.php?pini=1&pfin=9"> <img width="75em" height="75em" src="img/flechaizq.png"/> </a>';
                    echo'<a href="galeria.php?pini=19&pfin=27"> <img width="75em" height="75em" src="img/flechader.png"/> </a>';
                    }
                    elseif($PI==19&&$PF==27)
                    {
                    echo'<a href="galeria.php?pini=10&pfin=18"> <img width="75em" height="75em" src="img/flechaizq.png"/> </a>';
                    }
                }       
                   ?>
                </ul>
		</div>
	</section>
</body>
</html>