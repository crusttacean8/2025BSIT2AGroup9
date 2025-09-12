// All JS runs after DOM ready to avoid timing issues
document.addEventListener("DOMContentLoaded", function() {
  // ---------- MAP (your original map code) ----------
  if (typeof L !== 'undefined') {
    try {
      var map = L.map('map').setView([10.679009, 122.959355], 15);

      L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
      }).addTo(map);

      var marker = L.marker([10.679009, 122.959355]).addTo(map);
      marker.bindPopup("<b>La Salle Avenue!</b><br>Traffic.").openPopup();

      var polygon1 = L.polygon([
        [10.679009, 122.959355],
        [10.681789, 122.957965]
      ], {
        color: 'red',
        fillColor: '#f03',
        fillOpacity: 0.5
      }).addTo(map);
      polygon1.bindPopup("Traffic.");

      var polygon2 = L.polygon([
        [10.679075, 122.959542],
        [10.680667, 122.962761]
      ], {
        color: 'green',
        fillColor: 'rgba(20, 209, 121, 1)',
        fillOpacity: 0.5
      }).addTo(map);
      polygon2.bindPopup("Light Traffic.");

      var popup = L.popup()
        .setLatLng([10.679009, 122.959355])
        .setContent("Traffic.")
        .openOn(map);

      var popup2 = L.popup()
        .setLatLng([10.680667, 122.962761])
        .setContent("Light Traffic.")
        .openOn(map);

      function onMapClick(e) {
        alert("You clicked the map at " + e.latlng);
      }
      map.on('click', onMapClick);
    } catch (err) {
      console.warn('Leaflet init error:', err);
    }
  } else {
    // Leaflet not loaded; ignore
    console.info('Leaflet (L) is not defined — map not initialized.');
  }

  // ---------- Button example (your existing) ----------
  const btn = document.querySelector(".btn");
  if (btn) {
    btn.addEventListener("click", (e) => {
      e.preventDefault();
      alert("Welcome to Traffic Go!");
    });
  }

document.addEventListener("DOMContentLoaded", function() {
  const hamburger = document.getElementById("hamburger");
  const navMenu = document.getElementById("nav-menu");

  if (!hamburger || !navMenu) return;

  // Toggle menu
  hamburger.addEventListener("click", function(e) {
    e.stopPropagation();
    const isOpen = navMenu.classList.toggle("open");
    hamburger.classList.toggle("active", isOpen);
    hamburger.setAttribute("aria-expanded", isOpen ? "true" : "false");
  });

  // Close nav when clicking a link
  navMenu.querySelectorAll("a").forEach(link => {
    link.addEventListener("click", () => {
      navMenu.classList.remove("open");
      hamburger.classList.remove("active");
      hamburger.setAttribute("aria-expanded", "false");
    });
  });

  // Close nav when clicking outside
  document.addEventListener("click", (e) => {
    if (!navMenu.contains(e.target) && !hamburger.contains(e.target)) {
      navMenu.classList.remove("open");
      hamburger.classList.remove("active");
      hamburger.setAttribute("aria-expanded", "false");
    }
  });

  // Close on Escape key
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") {
      navMenu.classList.remove("open");
      hamburger.classList.remove("active");
      hamburger.setAttribute("aria-expanded", "false");
    }
  });

  // Reset on window resize (desktop)
  window.addEventListener("resize", () => {
    if (window.innerWidth > 768) {
      navMenu.classList.remove("open");
      hamburger.classList.remove("active");
      hamburger.setAttribute("aria-expanded", "false");
    }
  });
});
});
