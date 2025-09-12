// Initialize map
  var map = L.map('map').setView([10.679009, 122.959355], 14);

  // Base map
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; OpenStreetMap contributors'
  }).addTo(map);

  // Routes
  L.Routing.control({
    waypoints: [
      L.latLng(10.679500, 122.964000), // Start
      L.latLng(10.723078, 122.962125)  // End
    ],
    lineOptions: {
      styles: [{ color: 'blue', weight: 6, opacity: 0.9 }]
    },
    createMarker: function(i, wp) {
      return L.marker(wp.latLng).bindPopup(i === 0 ? "Start" : "End");
    }
  }).addTo(map);
