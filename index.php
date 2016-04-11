<?php 
$pageTitle = "SP Hair Nailsea";
include('includes/header.php'); ?>

<div id="ninja-slider">
    <div class="slider-inner">
        <ul>
            <li>
                <a class="ns-img" href="img/1.jpg"></a>
                <div class="caption">S.P Hair Company</div>
            </li>
            <li>
                <a class="ns-img" href="img/2.jpg"></a>
                <div class="caption">TOUCH·ENABLED</div>
            </li>
            <li>
                <a class="ns-img" href="img/3.jpg"></a>
                <div class="caption">VIDEO·AUDIO</div>
            </li>
            <li>
                <a class="ns-img" href="img/4.jpg"></a>
                <div class="caption">NON·JQUERY</div>
            </li>
            <li>
                <a class="ns-img" href="img/5.jpg"></a>
                <div class="caption">MOBILE·FRIENDLY</div>
            </li>
        </ul>
        <div class="navsWrapper">
            <div id="ninja-slider-prev"></div>
            <div id="ninja-slider-next"></div>
        </div>
    </div>
</div>

<div class="row about_and_maps">
    <div class="small-12 medium-6 large-6 columns">
        <p class="subtitle fancy"><span>ABOUT</p>
        <p>Welcome to SP Hair & Co.
        <br><br>
        We’d like to invite you to our busy, spacious salon in Nailsea’s high street.
        <br><br>
        Established in 1994, the salon is well known for its friendly and talented hairdressing team. Whether your ideal style is classic, modern or you’d like a completely new look, our warm and enthusiastic stylists are on hand to help.
        <br><br>
        Over time our rapport with many clients evolves into friendship – they trust us to care for their hair, give honest advice and make them look great!
        <br><br>
        Like our clients, our team members are not all the same. Encompassing a broad range of ages and specialities, our stylists have individual skills and enthusiasms, ensuring that you’ll be matched with a creative and passionate team member who is dedicated to making you look, and feel, your very best.</p>
    </div>
    <div class="small-12 medium-6 large-6 columns">
        <div id="map"></div>
        <script>
        function initMap() {
        var myLatLng = {lat: 51.43451, lng: -2.75465}
        var customMapType = new google.maps.StyledMapType([
            {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "hue": "#FFBB00"
            },
            {
                "saturation": 43.400000000000006
            },
            {
                "lightness": 37.599999999999994
            },
            {
                "gamma": 1
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [
            {
                "hue": "#00FF6A"
            },
            {
                "saturation": -1.0989010989011234
            },
            {
                "lightness": 11.200000000000017
            },
            {
                "gamma": 1
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "all",
        "stylers": [
            {
                "hue": "#FFC200"
            },
            {
                "saturation": -61.8
            },
            {
                "lightness": 45.599999999999994
            },
            {
                "gamma": 1
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "all",
        "stylers": [
            {
                "hue": "#FF0300"
            },
            {
                "saturation": -100
            },
            {
                "lightness": 51.19999999999999
            },
            {
                "gamma": 1
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "all",
        "stylers": [
            {
                "hue": "#FF0300"
            },
            {
                "saturation": -100
            },
            {
                "lightness": 52
            },
            {
                "gamma": 1
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "saturation": "-13"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "hue": "#0078FF"
            },
            {
                "saturation": -13.200000000000003
            },
            {
                "lightness": 2.4000000000000057
            },
            {
                "gamma": 1
            }
        ]
    }
          ], {
            name: 'Custom Style'
        });
        var customMapTypeId = 'custom_style';

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          center: myLatLng,
          mapTypeControlOptions: {
            mapTypeIds: [google.maps.MapTypeId.ROADMAP, customMapTypeId]
          }
        });

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'Hello World!'
          });

        map.mapTypes.set(customMapTypeId, customMapType);
        map.setMapTypeId(customMapTypeId);
      }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCS1L-Jbqn3ll_S68tAIkgSo66TZM6nF0&callback=initMap"
        async defer></script>
    </div>
</div>

<hr>

<div class="row gallery_home">
    <div class="small-6 medium-3 large-3 columns"><img src="img/gallery_1.jpg"></div>
    <div class="small-6 medium-3 large-3 columns"><img src="img/gallery_2.jpg"></div>
    <div class="small-6 medium-3 large-3 columns"><img src="img/gallery_3.jpg"></div>
    <div class="small-6 medium-3 large-3 columns"><img src="img/gallery_4.jpg"></div>
</div>

  

<?php include('includes/footer.php'); ?>