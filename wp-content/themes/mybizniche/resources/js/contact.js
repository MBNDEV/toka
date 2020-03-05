var map;

function initMap() {
    var coord = {
        lat: 29.741875,
        lng: -95.390874
    };
    map = new google.maps.Map(document.getElementById('map'), {
        center:coord,
        zoom: 9,
        fullscreenControl: false,
        streetViewControl: false,
        mapTypeControl: false,
        zoomControl: true,
        zoomControlOptions: {
              position: google.maps.ControlPosition.LEFT_BOTTOM
        },
        styles: [{
                "featureType": "all",
                "elementType": "labels.text",
                "stylers": [{
                        "color": "#f8f8f8"
                    },
                    {
                        "visibility": "on"
                    },
                    {
                        "lightness": "67"
                    }
                ]
            },
            {
                "featureType": "all",
                "elementType": "labels.text.fill",
                "stylers": [{
                        "saturation": "100"
                    },
                    {
                        "color": "#ffffff"
                    },
                    {
                        "lightness": "-41"
                    },
                    {
                        "weight": "0.01"
                    },
                    {
                        "gamma": "4.10"
                    }
                ]
            },
            {
                "featureType": "all",
                "elementType": "labels.text.stroke",
                "stylers": [{
                        "visibility": "off"
                    },
                    {
                        "color": "#000000"
                    },
                    {
                        "lightness": 16
                    },
                    {
                        "gamma": "0.00"
                    }
                ]
            },
            {
                "featureType": "all",
                "elementType": "labels.icon",
                "stylers": [{
                    "visibility": "off"
                }]
            },
            {
                "featureType": "administrative",
                "elementType": "geometry.fill",
                "stylers": [{
                        "color": "#000000"
                    },
                    {
                        "lightness": 20
                    }
                ]
            },
            {
                "featureType": "administrative",
                "elementType": "geometry.stroke",
                "stylers": [{
                        "color": "#000000"
                    },
                    {
                        "lightness": 17
                    },
                    {
                        "weight": 1.2
                    }
                ]
            },
            {
                "featureType": "landscape",
                "elementType": "geometry",
                "stylers": [{
                        "color": "#000000"
                    },
                    {
                        "lightness": 20
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "geometry",
                "stylers": [{
                        "color": "#000000"
                    },
                    {
                        "lightness": 21
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry.fill",
                "stylers": [{
                        "color": "#131313"
                    },
                    {
                        "lightness": 17
                    },
                    {
                        "visibility": "on"
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry.stroke",
                "stylers": [{
                        "color": "#252525"
                    },
                    {
                        "lightness": 29
                    },
                    {
                        "weight": 0.2
                    },
                    {
                        "visibility": "on"
                    }
                ]
            },
            {
                "featureType": "road.arterial",
                "elementType": "geometry",
                "stylers": [{
                        "color": "#000000"
                    },
                    {
                        "lightness": "17"
                    }
                ]
            },
            {
                "featureType": "road.local",
                "elementType": "geometry",
                "stylers": [{
                        "color": "#000000"
                    },
                    {
                        "lightness": "16"
                    }
                ]
            },
            {
                "featureType": "transit",
                "elementType": "geometry",
                "stylers": [{
                    "visibility": "on"
                }]
            },
            {
                "featureType": "transit.line",
                "elementType": "geometry.fill",
                "stylers": [{
                    "visibility": "on"
                }]
            },
            {
                "featureType": "transit.station.rail",
                "elementType": "labels.icon",
                "stylers": [{
                        "visibility": "on"
                    },
                    {
                        "lightness": "22"
                    },
                    {
                        "saturation": "5"
                    },
                    {
                        "gamma": "0.00"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [{
                        "color": "#000000"
                    },
                    {
                        "lightness": 17
                    }
                ]
            }
        ]
    });
    var contentString = $(".popupinfo-cont").html();

    var infowindow = new google.maps.InfoWindow({
        content: contentString,
        maxWidth:497,
        width:497
    });
   
    var marker = new google.maps.Marker({
        position: coord,
        map: map,
        icon: document.getElementById("popupinfo-cont").getAttribute("data-map-pin"),
        title: '',
        
    });
    marker.addListener('click', function () {
        infowindow.open(map, marker);
    });
    
    checkPopup();

    $(window).resize(function(){
        checkPopup();
    });
    function checkPopup(){
        var ww = $(window).innerWidth();
        if(ww<=1023){
            infowindow.close();
        }else{
            infowindow.open(map, marker);
        }
    }
    
}