  


<!--connessione al database -->
<?php
$conn = mysql_connect("localhost", "root") or $conn = mysql_connect("localhost", "root", "");
				  mysql_select_db("mappa") or die (mysql_error());
                  ?>
<!-- query estrazione dati per marker -->
 <?php
$query34 = "SELECT * FROM persona  ";

$risultati = mysql_query($query34);
$num = mysql_numrows($risultati);
 
$i=0;



while ($i < $num) {
$latitudine1 = mysql_result($risultati, $i, "latitudine");
$longitudine1 = mysql_result($risultati, $i, "longitudine");
$nome1 = mysql_result($risultati, $i, "nome");
$cognome1 = mysql_result($risultati, $i, "cognome");
$info1 = mysql_result($risultati, $i, "info");
$idmappa1 = mysql_result($risultati, $i, "idmappa");
$via1 = mysql_result($risultati, $i, "via");

$lat[$i]=$latitudine1;
$lon[$i]=$longitudine1;
$nom[$i]=$nome1;
$cog[$i]=$cognome1;
$inf[$i]=$info1;
$idm[$i]=$idmappa1;
$vi[$i]=$via1;
$i++;}

  ?>

 <!-- by pass http 403 -->
 <?php
 $opts = array('http'=>array('header'=>"User-Agent: StevesCleverAddressScript 3.7.6\r\n"));
$context = stream_context_create($opts);
ini_set('user_agent', 'PHP');

?>


<!-- html -->
 <html>
 <head>
 <link rel='stylesheet' href='http://cdn.leafletjs.com/leaflet-0.4.5/leaflet.css'>
 <script src='http://cdn.leafletjs.com/leaflet-0.4.5/leaflet.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<meta charset="UTF-8">
 </head>

 
  

  
  
</head>

<body>

  <div id="map" style="width:100%;height:400px;"></div>

  
 
 
 
<center> <h2 style="color:red">Inserisci il tuo segnaposto sulla mappa</h2> 
        <form name='geocoding' id='geocoding' action='' method='post'>
			<label for='address'>Indirizzo:
			<input type='text' name='address' id='address' placeholder='Es: 1 Piazza del Colosseo'>
			</label><br>
			<label for='city'>Città:
			<input type='text' name='city' id='city' placeholder='Es: Roma'>
			</label><br>
			<label for='county'>Provincia:
			<input type='text' name='county' id='county' placeholder='Es: RM'>
			</label><br>
			<label for='country'>Nazione:
			<input type='text' name='country' id='country' placeholder='Es: Italy'>
			</label><br>
			
			<button style="color:red;" type="reset" name='reset' id='reset'>Cancella</button>
			<button style="color:green;" type="submit" name='submitButton' id='submitButton'>Prosegui</button>
		</form>
      </div>
      <div class="one-half column" style="margin-top: 5%">
      </center>
		<div id='results'>
		
		
		
		</div>
      </div>
    </div>
	
	<script>
	var map = L.map('map').setView([41.894802, 12.4853384], 5);
var osmUrl = 'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
var osmLayer = new L.TileLayer(osmUrl, {
  maxZoom: 19,
  attribution: 'Map data © OpenStreetMap contributors'
});
map.addLayer(osmLayer);

//this section sets the behavior of the markers themselves
<?php
for ($x = 0; $x <= $num-1; $x++) 
{
    echo"var".$idm[$x]. "= L.marker([".$lat[$x].",".$lon[$x]." ],{
	  title: 'marker_1'   
	}).addTo(map).bindPopup('<b>".$nom[$x]."&nbsp;".$cog[$x]."</b> <br> ".$vi[$x]."<br> ".$inf[$x]."').on('click', clickZoom);"
	;
}
?>







function clickZoom(e) {
	map.setView(e.target.getLatLng(),9);
}

//everything below here controls interaction from outside the map
var markers = [];
markers.push(marker1);
markers.push(marker2);
markers.push(marker3);

function markerFunction(id) {
  for (var i in markers) {
    var markerID = markers[i].options.title;
    var position = markers[i].getLatLng();
    if (markerID == id) {
    	map.setView(position, 15);
      markers[i].openPopup();
    };
  }
}

$("a").click(function() {
  markerFunction($(this)[0].id);
});
	
	</script>
	
	<?php
	
	
	
	
	
		if (!empty($_POST)) {
			$geocodingAPI = "http://nominatim.openstreetmap.org/search?q=";
			$_POST = array_map('clean', $_POST);
			
			extract($_POST);
			$address = str_replace(","," ",$address);
			$qs = $address.",".$city.",".$county.",".$country;
 
			$qs .= "&format=json&limit=1&polygon=0&addressdetails=0";
			$rs = json_decode(file_get_contents($geocodingAPI.$qs));
 
			if($rs[0]==""){echo"Indirizzo non trovato sulla mappa, prova a inserirlo senza scrivere nazione o provincia. <br> Altrimenti <a href='https://www.coordinate-gps.it/' target='_blank'> clicca qui </a> per ricavere latitudine e longitudine da incollare nel form <br> ";}
			echo "<tr> <td>lat</td> <td>".$rs[0]->lat."<br>";
			echo "<tr> <td>lon</td> <td>".$rs[0]->lon."<br>";
			echo" <center> <form action='inserimento.php' method='post'>
      Latitudine: <input type='text' name='latitudine' value=".$rs[0]->lat ." >
	 Longitudine: <input type='text' name='longitudine' value=".$rs[0]->lon ." > 
	 Via: <input type='text' name='via' placeholder='inserisci la tua via precisa' ><br>
	 Nome <input type='text' name='nome' placeholder='inserisci il tuo nome' />
	  Cognome  <input type='text' name='cognome' placeholder='inserisci il tuo cognome' />
		Info  <input type='text' name='info' placeholder='inserissci le info' />
    <input type='submit' value='inserisci' />
</form> </center> <br>";
 
			$linkQs = str_replace("json","html",$qs);
 
			echo "<p><a href='".$geocodingAPI.$linkQs."'>Vedi il risultato su OpenStreetMap</a></p>";
 
		}
		function clean($el)	{
			 return urlencode(strip_tags(trim($el)));
		}		
	?>
	</body>
	</html>
