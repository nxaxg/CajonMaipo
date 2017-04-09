<section class="content mapa-container">
    <div class="container-fluid full-xs">
        <div class="row">
            <h2 class="content-title text-center col-lg-2 col-lg-offset-5 col-sm-4 col-sm-offset-4 col-xs-8 col-xs-offset-2">Visitanos</h2>
            <div id="mapa-local" class="map-box col-xs-12">
                <script>
                    function initMap() {
                        var mapDiv = document.getElementById('mapa-local');
                        var coord = new google.maps.LatLng(-33.626435, -70.4080183);
                        var marker = new google.maps.Marker({
                            position: coord
                        , });
                        var map = new google.maps.Map(mapDiv, {
                            center: coord
                            , zoom: 10
                            , scrollwheel: false
                        });
                        marker.setMap(map);
                    }
                </script>
                <script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script>
                <!--api key -->
                <!--https://developers.google.com/maps/documentation/javascript/get-api-key?hl=es#key-->
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpNu7ZGW1ukwAf6mLFNnFHPl-6Jqz-fTw" type="text/javascript" hidden></script>
            </div>
        </div>
    </div>
</section>