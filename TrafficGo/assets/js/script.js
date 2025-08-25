    // Initialize map
    var map = L.map('map').setView([10.679009, 122.959355], 15);

    // Tile layer
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 19,
      attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);

    // Marker
    var marker = L.marker([10.679009, 122.959355]).addTo(map);
    marker.bindPopup("<b>La Salle Avenue!</b><br>Traffic.").openPopup();

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

        // Example: Alert when the button is clicked
    document.addEventListener("DOMContentLoaded", () => {
      const btn = document.querySelector(".btn");
      if (btn) {
        btn.addEventListener("click", (e) => {
          e.preventDefault();
          alert("Welcome to Traffic Go!");
        });
      }
    });
