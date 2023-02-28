
//affichage de la carte
var map = L.map('map').setView([48.763699, 1.2370123], 11);

L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);


//affichage des points de localisation avec un popup
var marker = L.marker([48.8200048, 1.2676415]).addTo(map);
marker.bindPopup("<strong>Illiers l'Evêque</strong><br><strong>Lundi</strong><br>18:30-20:30");

var marker = L.marker([48.7627778, 1.2261111]).addTo(map);
marker.bindPopup("<strong>Nonancourt</strong><br><strong>Mardi</strong><br>18:30-20:30");

var marker = L.marker([48.6584342, 1.2714959]).addTo(map);
marker.bindPopup("<strong>Saulnières</strong><br><strong>Mercredi</strong><br>18:30-20:30");

var marker = L.marker([48.8335035, 1.1988893]).addTo(map);
marker.bindPopup("<strong>Marcilly La Campagne</strong><br><strong>Jeudi (semaine paire)</strong><br>18:30-20:30");

var marker = L.marker([48.8079167, 1.1413333]).addTo(map);
marker.bindPopup("<strong>Droisy</strong><br><strong>Jeudi (semaine impaire)</strong><br>18:30-20:30");

var marker = L.marker([48.756592, 1.0572117]).addTo(map);
marker.bindPopup("<strong>Tillières sur Avre</strong><br><strong>Vendredi</strong><br>18:30-20:30");



