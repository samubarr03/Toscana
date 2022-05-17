var map = L.map('map').setView([43.65, 11.13], 8); // latitudine = 43.4586541 ; longitudine = 11.1389204





//    var layerControl = L.control.layers(baseMaps, overlayMaps).addTo(map);


   // STYLE NON ANCORA MESSO-->    mapbox://styles/notepadmerda/cl342x7zn005415p215vvr20e
   
    var Bianco = L.icon({
        iconUrl: 'img/Tracker/Bianco.png',
        shadowUrl:'img/Tracker/Ombra.png',
        iconSize:     [60, 60], // size of the icon
        shadowSize:   [60, 60], // size of the shadow
        iconAnchor:   [1, 1], // point of the icon which will correspond to marker's location
        shadowAnchor: [1, 1],  // the same for the shadow
        popupAnchor:  [0, 0] // point from which the popup should open relative to the iconAncho
    });
    var Blu = L.icon({
        iconUrl: 'img/Tracker/Blu.png',
        shadowUrl:'img/Tracker/Ombra.png',
        iconSize:     [60, 60], // size of the icon
        shadowSize:   [60, 60],
        iconAnchor:   [30, 30], // point of the icon which will correspond to marker's location
        shadowAnchor: [30, 30],  // the same for the shadow
        popupAnchor:  [0, 0] // size of the shadow
        });
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
    maxZoom: 18,
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
    ponte_vecchio= L.marker([43.768040, 11.253175], {icon: Bianco}).bindPopup("Ponte vecchio").addTo(map); // 43.458654 ; 11.253158
    ponte_vecchio3= L.marker([43.768040, 11.253175], {icon: Blu}).bindPopup("Ponte vecchio").addTo(map);
    ponte_vecchio2= L.marker([43.768040, 11.253175]).bindPopup("Ponte vecchio").addTo(map), // 43.458654 ; 11.253158
    campanile_di_giotto = L.marker([43.7728676, 11.2556974]).bindPopup('Campanile di Giotto').addTo(map); // 43.7728676 ; 11.2556974

    console.log(ponte_vecchio2);
    
    
