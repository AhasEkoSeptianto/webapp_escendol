function showMapsPos(){
  var locations = [
    ['Toko Pusat Bekasi', -6.2033570677615515, 106.98591202939447, 4],
    ['Cabang Jakarta', -6.198783633026364, 106.9221554275881, 4],
    ['Cabang Cikarang', -6.26110996928787, 107.05771060934447, 4],
    ['Cabang Depok', -6.386506875454595, 106.79446413670688, 4],
  ];

  var map = new google.maps.Map(document.getElementById('Map'), {
    zoom: 9,
    center: new google.maps.LatLng(-6.20, 106.98),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });

  var infowindow = new google.maps.InfoWindow();

  var marker, i;

  for (i = 0; i < locations.length; i++) {  
    marker = new google.maps.Marker({
      position: new google.maps.LatLng(locations[i][1], locations[i][2]),
      map: map
    });

    google.maps.event.addListener(marker, 'click', (function(marker, i) {
      return function() {
        infowindow.setContent(locations[i][0]);
        infowindow.open(map, marker);
      };
    })(marker, i));
  };
};

function ChangeNavProduk( product ){
  let id = document.getElementById('Nav_Produk').innerHTML = product;

  let allType = ['Recomended', 'Special', 'Normal', 'Materials']

  allType.map((val)=>{
    document.getElementById(val).style.display ="none";
  })

  document.getElementById(product).style.display ="flex";

};

function is_showItemProduct ( id, display ) {
  switch (display) {
    case 'show' : {
      document.getElementById(id).style.display = "flex";
      break;
    }

    case 'close' : {
      document.getElementById(id).style.display = "none";
      break;
    }
  }
}


function is_showPaymentCart( display ){
  switch (display) {
    case 'show' : {
      document.getElementById('containerCart').style.display = 'block';
      break;
    } 
    case 'close' : {
      document.getElementById('containerCart').style.display = 'none';
      break
    }
  }
}


showMapsPos();