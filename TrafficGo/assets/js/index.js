    // Initialize map
    var map = L.map('map').setView([10.679009, 122.959355], 15);

    // Tile layer
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 19,
      attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    // Camera Marker


    var customIcon = L.icon({
    iconUrl: 'img/camera.png',  // your image path
    iconSize: [50, 40],                // size of the icon [width, height]
    iconAnchor: [20, 40],              // point of the icon which will be at marker's location
    popupAnchor: [0, -40]              // where the popup should open relative to the icon
});

    // Marker with custom icon
    var marker = L.marker([10.679009, 122.959355], { icon: customIcon }).addTo(map);
    marker.bindPopup("<b>La Salle Avenue!</b><br>Traffic.").openPopup();

    marker.on('click', function () {
    window.location.href = "camera.php";  // your target link
});

    // Polygon 1
    var polygon1 = L.polygon([
      [10.679009, 122.959355],
      [10.681789, 122.957965]
    ], {
      color: 'red',
      fillColor: '#f03',
      fillOpacity: 0.5
    }).addTo(map);
    polygon1.bindPopup("Traffic.");

    // Polygon 2
    var polygon2 = L.polygon([
      [10.679075, 122.959542],
      [10.680667, 122.962761]
    ], {
      color: 'green',
      fillColor: 'rgba(20, 209, 121, 1)',
      fillOpacity: 0.5
    }).addTo(map);  
    polygon2.bindPopup("Light Traffic.");

    // Popup on load
    var popup = L.popup()
      .setLatLng([10.679009, 122.959355])
      .setContent("Traffic.")
      .openOn(map);

    var popup2 = L.popup()
      .setLatLng([10.680667, 122.962761])
      .setContent("Light Traffic.")
      .openOn(map);

    // Popup on click
    function onMapClick(e) {
      alert("You clicked the map at " + e.latlng);
    }
    map.on('click', onMapClick);



// Add search bar 
var geocoder = L.Control.geocoder({
    defaultMarkGeocode: true,
    collapsed: false   // <-- keep it open
}).addTo(map);


// Move it into a custom container
var geocoderEl = document.querySelector('.leaflet-control-geocoder');
geocoderEl.classList.add('custom-geocoder');

// Append to body or map container
map.getContainer().appendChild(geocoderEl);