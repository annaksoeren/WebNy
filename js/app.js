let map;
const newZeaLatLng = { lat: -40.851, lng: 172.772};
const SidneyLatLng = { lat: -33.865, lng: 151.209};
const FijiLatLng = { lat:  -17.713, lng: 178.065};

function initMap() {
  const { Map } = await google.maps.importLibrary("maps");

  map = new google.map.Map(document.getElementById("map"), {
    center: newZeaLatLng,
    zoom: 8,
    mapID: "c3fe9fd4007ea226",
  });

  const marker = new google.maps.Marker({
    position: SidneyLatLng,
    map: map,
  })
}

initMap();

