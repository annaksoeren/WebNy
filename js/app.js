let map;
const newZeaLatLng = { lat: -40.851, lng: 172.772};
const SidneyLatLng = { lat: -33.865, lng: 151.209};
const FijiLatLng = { lat:  -17.713, lng: 178.065};

async function initMap() {
  const { Map } = await google.maps.importLibrary("maps");

  map = new Map(document.getElementById("map"), {
    center: newZeaLatLng,
    zoom: 4,
    mapId: "351fd352bab5863c",
  });

  const marker = new google.maps.Marker({
    position: newZeaLatLng,
    map: map,
  })
}

initMap();