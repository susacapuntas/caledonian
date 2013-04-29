  function initialize() {
    var latlng = new google.maps.LatLng(40.7562008,-73.9903784);
    var myOptions = {
      zoom: 18,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
  }