function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: {lat: 47.05465454619798, lng: 21.928293271151556}
    });
  
    var markers = [
      {
        location: {lat: 47.05465454619798, lng: 21.928293271151556},
        title: 'Piața Unirii',
        link: 'https://www.google.com/maps/place/Pia%C8%9Ba+Unirii,+Oradea/@47.0544718,21.9270503,17.5z/data=!4m6!3m5!1s0x474647e878f538bf:0xbbab4feb89b43ffe!8m2!3d47.0545047!4d21.928304!16s%2Fg%2F11h0p_kmm'
      },
      {
        location: {lat: 47.058856764274296,  lng: 21.915224452963425},
        title: 'Prima Shops',
        link: 'https://www.google.com/maps/search/prima+shops/@47.0589029,21.9141057,17.25z'
      },
      {
        location: {lat: 47.03738960391566,  lng: 21.948873063523326},
        title: 'Lotus Center',
        link: 'https://www.google.com/maps/place/Lotus+Center/@47.0461886,21.9184561,13.75z/data=!4m10!1m2!2m1!1slotus+center!3m6!1s0x4746387153d13ff3:0xb2367ae1647cdf28!8m2!3d47.0359147!4d21.9488813!15sCgxsb3R1cyBjZW50ZXJaDiIMbG90dXMgY2VudGVykgEOY2xvdGhpbmdfc3RvcmXgAQA!16zL20vMDNtdzgz'
      },
      {
        location: {lat: 47.077844051818076,  lng: 21.916367046965828},
        title: 'Piata Magnoliei',
        link: 'https://www.google.com/maps/place/Pia%C5%A3a+Magnoliei,+Oradea/@47.0780084,21.9157987,18.25z/data=!4m6!3m5!1s0x47464862dc08e9e9:0x32ccebe0e03dfc9f!8m2!3d47.078333!4d21.9168875!16s%2Fg%2F11bw3znxlx'
      }
    ];
  
    for (var i = 0; i < markers.length; i++) {
      var marker = new google.maps.Marker({
        position: markers[i].location,
        map: map,
        title: markers[i].title
      });
  
      var link = markers[i].link;
      google.maps.event.addListener(marker, 'click', function() {
        window.open(link, '_blank');
      });
    }
  }
  