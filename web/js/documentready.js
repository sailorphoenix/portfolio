function heightMenuRWD (){
    var height = $('#main-content').height();
    // à tester
    $('#trigger').height(height + 1);
}

function errorCaptcha (){
    var next = $('footer label[for=contact_captcha]').next();
    var li = next.children('li');
    if (li.length) {
        smoothScroll.animateScroll( null, '#formulaire-contact' );
    }
}
function successCallback(position){
    $('#message').append(" Latitude : " + position.coords.latitude + ", longitude : " + position.coords.longitude);
    window.location = '/portfolio/web/app_dev.php/result/' + position.coords.longitude + '/' + position.coords.latitude;
}; 

function errorCallback(error){
    switch(error.code){
        case error.PERMISSION_DENIED:
            $('#message').append("L'utilisateur n'a pas autorisé l'accès à sa position");
        break;
        case error.POSITION_UNAVAILABLE:
            $('#message').append("L'emplacement de l'utilisateur n'a pas pu être déterminé");
        break;
        case error.TIMEOUT:
            $('#message').append("Le service n'a pas répondu à temps");
        break;
   }
};

function geolocalisation () {
    if (navigator.geolocation)
        navigator.geolocation.getCurrentPosition(successCallback, errorCallback , {enableHighAccuracy : true, timeout:50000, maximumAge:600000});
    else
    	$('#message').append("Votre navigateur ne prend pas en compte la géolocalisation HTML5");
}

function map_datas(json_encode){
    json_encode = json_encode.replace(/&quot;/ig,'"');
    var json = JSON.parse(json_encode);
    var map = new GMaps({
        el: '#basic_map',
        lat: json.recherche.latitude,
        lng: json.recherche.longitude,
        zoom: 12,
        zoomControl : true,
        zoomControlOpt: {
            style : 'SMALL',
            position: 'TOP_LEFT'
        },
        panControl : false,
      });

    addLocationonMap(map, json);
    $.each(json.resultat, function(index, value) {
        addMarkeronMap(map, value);
    });
    listRes(map, json);
}

function addLocationonMap(map, json) {
    var marker = map.addMarker({
        lat: json.recherche.latitude,
        lng: json.recherche.longitude,
        icon: "/portfolio/web/images/gmap/pokeball.jpg",
        title: 'Maison',
        infoWindow: {
          content: '<h1>Ici ma maison :)</h1>'
        }
      });
    google.maps.event.addListener(marker, 'mouseover', function() {
        marker.setIcon("");
    });
    google.maps.event.addListener(marker, 'mouseout', function() {
        marker.setIcon("/portfolio/web/images/gmap/pokeball.jpg");
    });
}

function addMarkeronMap(map, json) {
    var marker = map.addMarker({
        lat: json.latitude,
        lng: json.longitude,
        title: 'Maison',
        infoWindow: {
          content: '<h1>' + json.titreGeolocation + '</h1>'
        }
      });
}

function listRes(map, json) {
    $("#col_gauche").appendTo('#basic_map');
    $div = $('#list_res');
    $div.append('<p id="num_res">' + json.resultat.length + ' résultats</p>');
    var $i = 1;
    $.each(json.resultat, function(index, value) {
        $div.append('<p class="res" data-marker="' + $i + '"> <b class="title_res">' + value.titreGeolocation + '</b><span>' + value.adresse + '</span></p>');
        $i++;
    });
    $('.res').click(function(event) {
        var element = event.target;
        var parent = $(element).parent('.res');
        var data = $(parent).data('marker');
        map.hideInfoWindows();
        $('.res').removeClass('open');
        if (!parent.hasClass('open')) {
            var marker = map.markers[data];
            map.markers[data].infoWindow.open(self.map, map.markers[data]);
            google.maps.event.trigger(marker, 'click');
            parent.addClass('open');
            map.setCenter(marker.position.k, marker.position.B);
        }
    });
}

$(document).ready(function (){
    heightMenuRWD();
    smoothScroll.init();
    errorCaptcha();
    geolocalisation();
});

$(window).resize(function () {
    heightMenuRWD();
});
