(function($){
        var app = {
            data:{
                map:null,
                timer:undefined,
                paged:1,
                isProgress:false
            },
            initMap:function(){
                app.loadPostType("");
                 $("section.map_result .items").slick({
                    dots: true,
                    arrows: false,
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    speed: 300,
                    responsive: [{
                            breakpoint: 1024,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 2,
                            }
                        },{
                            breakpoint: 480,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1
                            }
                        }
                    ]
                });
                $(".map_section input[name='q']").keyup(function(e){
                var q = $(this).val();
                    if(app.data.timer){
                        
                     clearTimeout(app.data.timer);
                    }
                    app.data.timer = setTimeout(function(){
                        app.loadPostType(q);
                    },2500);
                    
                   
                });
               
            },
            loadPostType:function(q){
                if(!app.data.isProgress){
                    app.data.isProgress = true;
                    $(".map_result .items").html("Loading...");
                    $.ajax({
                        url: main_obj.ajax_url,
                        data: {
                            action: "mbn_find_store_ajax",
                            q: q
                        },
                        success: function (result) {
                            app.data.isProgress = false;
                            $(".map_result .items").html("");
                            app.loadMap(result);
                            app.loadMapResult(result);
                        }
                    });
                }
            },
            loadMapResult:function(data){
                
                data.forEach(function(item,i){
                    var html = '<div class="item">';
                    html+='<h3>'+item.title+'</h3>';
                    html+='<p>'+item.street+'<br/>';
                    html+=''+item.city+'<br/>';
                    html+=''+item.state+' '+item.zip+'<br/>';
                    html+=''+item.country+'<br/>';
                    html+='</p>';
                    html+='<span class="phone">'+item.phone+'</span>';
                    html+='<span class="sched">'+item.schedule+'</span>';
                    html+='</div>';
                    $(".map_result .items").append(html);
                    
                })
                $("section.map_result .items").slick("refresh");

             
            },
            loadMap:function(data){
                var coord = {
                    lat: 29.741875,
                    lng: -95.390874
                };
                map = new google.maps.Map(document.getElementById('map'), {
                    center: coord,
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
            
            
                if (data.length > 0) {
            
                    var infowindow_arr = [];
                    data.forEach(function (post, i) {
                        var coord = {
                            lat: parseFloat(post.lat),
                            lng: parseFloat(post.lng)
                        };
            
            
                        var contentString = $(".popupinfo-cont").clone();
            
                        $(contentString).find('.address').html(post.street + " " + post.city + " " + post.state + " " + post.zip);
                        $(contentString).find('.sched .val').html(post.schedule);
                        $(contentString).find('.phone').html(post.phone);
                        $('<img src="' + post.image + '"/>').insertBefore($(contentString).find("ul"));
                        var contentString = $(contentString).html();
            
                        var infowindow = new google.maps.InfoWindow({
                            content: contentString,
                            maxWidth: 497,
                            width: 497
                        });
            
                        var marker = new google.maps.Marker({
                            position: coord,
                            map: map,
                            icon: document.getElementById("popupinfo-cont").getAttribute("data-map-pin"),
                            title: '',
                        });
            
                        marker.addListener('click', function () {
                            infowindow_arr.forEach(function (info, i) {
                                info.close();
                            });
                            console.log(infowindow_arr);
                            infowindow.open(map, marker);
            
                        });
            
                        infowindow_arr.push(infowindow);
                    });
                }
            }
        }
    
        document.addEventListener('DOMContentLoaded', app.initMap);
    })(jQuery);
function initMap(){
console.log("map script loaded")
}