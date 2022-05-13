var map = L.map('map').setView([43.65, 11.13], 8); // latitudine = 43.4586541 ; longitudine = 11.1389204





//    var layerControl = L.control.layers(baseMaps, overlayMaps).addTo(map);


   // STYLE NON ANCORA MESSO-->    mapbox://styles/notepadmerda/cl342x7zn005415p215vvr20e
   var LeafIcon = L.Icon.extend({
        options: {
            shadowUrl: 'img/Tracker/Ombra.png',
            iconAnchor:   [0, 0],
            shadowAnchor: [0, 0],
            popupAnchor:  [30, 0],
            iconSize:     [60, 60],
            shadowSize:   [60, 60]
        }
    });
    var Bianco = new LeafIcon({iconUrl: 'img/Tracker/Bianco.png'}),
    Blu = new LeafIcon({iconUrl: 'img/Tracker/Blu.png'}),
    Ciano = new LeafIcon({iconUrl: 'img/Tracker/Ciano.png'}),
    Rosso = new LeafIcon({iconUrl: 'img/Tracker/Rosso.png'}),
    Verde = new LeafIcon({iconUrl: 'img/Tracker/Verde.png'}),
    Viola = new LeafIcon({iconUrl: 'img/Tracker/Viola.png', iconAnchor: [0, 0]});

    //var cities = L.layerGroup([torre_di_pisa, piazza_del_duomo, ponte_vecchio, campanile_di_giotto]);
   // L.marker([43.768040, 11.253175], {icon: Viola}).bindPopup("Ponte vecchio").addTo(map);
   // L.marker([43.7720606, 11.2550904], {icon: Ciano}).bindPopup("I am an orange leaf.").addTo(map);
   // L.marker([43.7730606, 11.2560904], {icon: Rosso}).bindPopup("I am an orange leaf.").addTo(map);




   var circle = L.circle([43.768040, 11.253175], {
            color: 'red',
            fillColor: '#f03',
            fillOpacity: 0.5,
            radius: 40
        }).addTo(map);
L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 20,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'pk.eyJ1Ijoibm90ZXBhZG1lcmRhIiwiYSI6ImNsMzQybTdyMDByMGQzanA1OXpieXZkeGoifQ.FCnnx6dsGE2ac9b0QFmEkQ'
}).addTo(map);
var popup = L.popup()
    .setLatLng([43.458654, 11.253158])
    .setContent("Firenze")
    .openOn(map);
var 
    //Pisa
    torre_di_pisa = L.marker([43.72299544371262, 10.396601950996484]).bindPopup('<a href="" >Torre di Pisa</a>').addTo(map), //latitudine = 43.72299544371262 ; longitudine = 10.396601950996484
    piazza_del_duomo = L.marker([43.7228117202109, 10.396330679878247]).bindPopup('Piazza del Duomo').addTo(map), //43.7228117202109 ; 10.396330679878247
    //Firenze
    
    
    
    //= L.marker([43.768040, 11.253175]).bindPopup('Ponte vecchio').addTo(map),
    ponte_vecchio= L.marker([43.768040, 11.253175], {icon: Viola}).bindPopup("Ponte vecchio").addTo(map), // 43.458654 ; 11.253158
    ponte_vecchio2= L.marker([43.768040, 11.253175]).bindPopup("Ponte vecchio").addTo(map), // 43.458654 ; 11.253158
    campanile_di_giotto = L.marker([43.7728676, 11.2556974]).bindPopup('Campanile di Giotto').addTo(map); // 43.7728676 ; 11.2556974

    console.log(ponte_vecchio2);
    
    
