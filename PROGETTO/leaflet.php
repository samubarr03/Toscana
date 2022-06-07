<?php 
    
    include "data.php";       
    $sql = " SELECT * FROM attrazione,PercorsohaAttrazione WHERE PercorsoHaAttrazione.idPercorso =".$id." AND Attrazione.id = PercorsoHaAttrazione.idAttrazione";          $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
    if(mysqli_num_rows($resultset) > 0){
         while($row = mysqli_fetch_array($resultset)){
            $pos=$row['posizione'];
        }
    }     
    
    ?> 

<html>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
        integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
        crossorigin=""/>
        <!-- Make sure you put this AFTER Leaflet's CSS -->
        <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
            integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
            crossorigin="">
        </script>
    <div id="map"></div>
    <script>
        
    var map = L.map('map', {

        center: [<?php $pos ?>],
        zoom: 16
    });

    var Ciano = L.icon({
        iconUrl: 'img/Tracker/Ciano.png',
        shadowUrl:'img/Tracker/Ombra.png',
       iconSize:     [60, 60], 
        shadowSize:   [60, 60], 
        iconAnchor:   [30, 60], 
        shadowAnchor: [30, 60], 
        popupAnchor:  [0, 0] 
    });
    var Blu = L.icon({
        iconUrl: 'img/Tracker/Blu.png',
        shadowUrl:'img/Tracker/Ombra.png',
        iconSize:     [60, 60], 
        shadowSize:   [60, 60],
        iconAnchor:   [30, 60], 
        shadowAnchor: [30, 60],  
        popupAnchor:  [0, 0] 
    });

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href=\"https://www.openstreetmap.org/copyright\">OpenStreetMap</a> contributors, Imagery © <a href=\"https://www.mapbox.com\">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'pk.eyJ1Ijoibm90ZXBhZG1lcmRhIiwiYSI6ImNsMzQybTdyMDByMGQzanA1OXpieXZkeGoifQ.FCnnx6dsGE2ac9b0QFmEkQ'
    }).addTo(map);
    
    </script>
    
</html> 
<?php   

    $sql = " SELECT * FROM attrazione,PercorsohaAttrazione WHERE PercorsoHaAttrazione.idPercorso =".$id." AND Attrazione.id = PercorsoHaAttrazione.idAttrazione";  
    $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
    if(mysqli_num_rows($resultset) > 0){
        
        while($row = mysqli_fetch_array($resultset)){
            
            $pos= $row['posizione'];
            ?>
            <script>
            var tipregodio = L.marker([<?php $pos ?>], {icon: Blu}).bindPopup(<?php $row['nome'] ?>).addTo(map); </script>
            <?php
            } 
        }
        

   
?> <script>  /*
    var torre_di_pisa = L.marker([43.72299544371262, 10.396601950996484], {icon: Blu}).bindPopup('<a href="" >Torre di Pisa</a>').addTo(map), //latitudine = 43.72299544371262 ; longitudine = 10.396601950996484
     piazza_del_duomo = L.marker([43.7228117202109, 10.396330679878247], {icon: Blu}).bindPopup('Piazza del Duomo').addTo(map), //43.7228117202109 ; 10.396330679878247
     ponte_vecchio= L.marker([43.768040, 11.253175], {icon: Blu}).bindPopup("Ponte vecchio").addTo(map); // 43.458654 ; 11.253158
    terrazza_mascagni= L.marker([43.534702, 10.298856], {icon: Blu}).bindPopup("Ponte vecchio").addTo(map);
*/
</script>





 