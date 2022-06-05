<!DOCTYPE HTML>
<html>
<head>
 <title>Ti prego</title>
<link rel="stylesheet" href="js/leaflet.css"/>
<script src="js/leaflet.js"></script>
</head>
 <body>
 <h1>Percorso</h1>
 <div id="mapid" style="width:100%; height: 650px;"></div>
 <?php
 include "data.php";
 $k=0;
 
 ?>
 <script>
//centro la mappa sulle coordinate della Cattedrale di Teramo
var mymap = L.map('mapid', {
 center: [42.65946473,13.7032342],
 zoom: 16
});
L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
maxZoom: 18,
attribution: 'Map data &copy;<a href="https://www.openstreetmap.org/">OpenStreetMap</a>contributors,'
+'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>'
}).addTo(mymap);
</script>
<?php
for($i=0;$i<=$k;$i++)
{
?>
<script>
//L.marker([latitudine, longitudine]).addTo(mymap).bindPopup('ciao bla bla').openPopup();
L.marker([<?php echo $posizione;?>]).addTo(mymap)
.bindPopup("<?php echo $ns[$i];?><br/><?php echo $in[$i];?><br/><?php echo 'Slot liberi:'.$sl[$i];?>");
</script>
<?php
}
?>
</body>
</html>