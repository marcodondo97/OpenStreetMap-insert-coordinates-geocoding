 <?php
$conn = mysql_connect("localhost", "root") or $conn = mysql_connect("localhost", "root", "");
				  mysql_select_db("mappa") or die (mysql_error());
				  
				  
				  
				  
	$latitudine =$_POST['latitudine'];
			 
			  $longitudine =$_POST['longitudine'];
			  $via =$_POST['via'];
			  $nome =$_POST['nome'];	
  $cognome =$_POST['cognome'];	
$info =$_POST['info'];	  
				 
				 
				$query = mysql_query("INSERT into persona( nome,cognome,info,via,latitudine,longitudine )VALUES('$nome','$cognome','$info','$via','$latitudine','$longitudine') ");  
				  
			echo"	  <script>
window.location = 'provamappa1.php';</script>";
				 ?>
