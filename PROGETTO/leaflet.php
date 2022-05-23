<script>




//    var layerControl = L.control.layers(baseMaps, overlayMaps).addTo(map);


   // STYLE NON ANCORA MESSO-->    mapbox://styles/notepadmerda/cl342x7zn005415p215vvr20e
   
    var Bianco = L.icon({
        iconUrl: 'img/Tracker/Bianco.png',
        shadowUrl:'img/Tracker/Ombra.png',
        iconSize:     [60, 60], // size of the icon
        shadowSize:   [60, 60],
        iconAnchor:   [30, 60], // point of the icon which will correspond to marker's location
        shadowAnchor: [30, 60],  // the same for the shadow
        popupAnchor:  [0, 0] // size of the shadow
    });
    var Ciano = L.icon({
        iconUrl: 'img/Tracker/Ciano.png',
        shadowUrl:'img/Tracker/Ombra.png',
        iconSize:     [60, 60], // size of the icon
        shadowSize:   [60, 60],
        iconAnchor:   [30, 60], // point of the icon which will correspond to marker's location
        shadowAnchor: [30, 60],  // the same for the shadow
        popupAnchor:  [0, 0] // size of the shadow
    });
    var Blu = L.icon({
        iconUrl: 'img/Tracker/Blu.png',
        shadowUrl:'img/Tracker/Ombra.png',
        iconSize:     [60, 60], // size of the icon
        shadowSize:   [60, 60],
        iconAnchor:   [30, 60], // point of the icon which will correspond to marker's location
        shadowAnchor: [30, 60],  // the same for the shadow
        popupAnchor:  [0, 0] // size of the shadow
    });
    var Rosso = L.icon({
        iconUrl: 'img/Tracker/Rosso.png',
        shadowUrl:'img/Tracker/Ombra.png',
        iconSize:     [60, 60], // size of the icon
        shadowSize:   [60, 60],
        iconAnchor:   [30, 60], // point of the icon which will correspond to marker's location
        shadowAnchor: [30, 60],  // the same for the shadow
        popupAnchor:  [0, 0] // size of the shadow
    });
    var Verde = L.icon({
        iconUrl: 'img/Tracker/Verde.png',
        shadowUrl:'img/Tracker/Ombra.png',
        iconSize:     [60, 60], // size of the icon
        shadowSize:   [60, 60],
        iconAnchor:   [30, 60], // point of the icon which will correspond to marker's location
        shadowAnchor: [30, 60],  // the same for the shadow
        popupAnchor:  [0, 0] // size of the shadow
    });
    var Viola = L.icon({
        iconUrl: 'img/Tracker/Viola.png',
        shadowUrl:'img/Tracker/Ombra.png',
        iconSize:     [60, 60], // size of the icon
        shadowSize:   [60, 60],
        iconAnchor:   [30, 60], // point of the icon which will correspond to marker's location
        shadowAnchor: [30, 60],  // the same for the shadow
        popupAnchor:  [0, 0] // size of the shadow
    });
    //var cities = L.layerGroup([torre_di_pisa, piazza_del_duomo, ponte_vecchio, campanile_di_giotto]);
   // L.marker([43.768040, 11.253175], {icon: Viola}).bindPopup("Ponte vecchio").addTo(map);
   // L.marker([43.7720606, 11.2550904], {icon: Ciano}).bindPopup("I am an orange leaf.").addTo(map);
   // L.marker([43.7730606, 11.2560904], {icon: Rosso}).bindPopup("I am an orange leaf.").addTo(map);
  
L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1Ijoibm90ZXBhZG1lcmRhIiwiYSI6ImNsMzQybTdyMDByMGQzanA1OXpieXZkeGoifQ.FCnnx6dsGE2ac9b0QFmEkQ'
}).addTo(map);
    //Pisa
    var torre_di_pisa = L.marker([43.72299544371262, 10.396601950996484], {icon: Blu}).bindPopup('<a href="" >Torre di Pisa</a>').addTo(map), //latitudine = 43.72299544371262 ; longitudine = 10.396601950996484
    piazza_del_duomo = L.marker([43.7228117202109, 10.396330679878247], {icon: Rosso}).bindPopup('Piazza del Duomo').addTo(map), //43.7228117202109 ; 10.396330679878247
    ponte_vecchio= L.marker([43.768040, 11.253175], {icon: Ciano}).bindPopup("Ponte vecchio").addTo(map); // 43.458654 ; 11.253158
    terrazza_mascagni= L.marker([43.534702, 10.298856], {icon: Viola}).bindPopup("Ponte vecchio").addTo(map);

    L.polyline([
        [44.044814, 10.018769],
        [44.094537, 10.069540],
        [44.120679, 10.021561],
        [44.094852, 9.993441],
        [44.207722, 9.902912],
        [44.187427, 9.855210],
        [44.224676, 9.874053],
        [44.368371, 9.689057],
        [44.475363, 9.901808],
        [44.462984, 9.967636],
        [44.274791, 10.241617],
      ],{color:'red'}).addTo(map);
    
</script>