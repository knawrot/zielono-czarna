<!--<div id="fb-root"></div>-->


<div id="contact">
    <div id="google-maps"></div>
    <div id="contact-form">
        <div class="panel panel-default">
            <div id="headingOne" class="panel-heading">
                <a data-toggle="collapse" href="#collapsible-data" aria-expanded="true" aria-controls="collapsible-data"><span class="glyphicon glyphicon-minus"></span></a>
            </div>
            <div id="collapsible-data" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="page-header">Napisz do nas<br>
                                    <small>Odpiszemy. Może jeszcze w tym roku.</small>
                                </h1>
                        </div>
                    </div>
                    <div class="row">
                        <form class="form-horizontal col-md-7">
                            <div class="form-group">
                                <label for="contact_name" class="col-md-2 control-label"><i class="fa fa-user fa-2x"></i>
                                </label>
                                <div class="col-md-10">
                                    <input id="contact_name" type="text" class="form-control" placeholder="Imię">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="contact_email" class="col-md-2 control-label"><i class="fa fa-envelope fa-2x"></i>
                                </label>
                                <div class="col-md-10">
                                    <input id="contact_email" type="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="send_to" class="col-md-2 control-label"><i class="fa fa-share fa-2x"></i>
                                </label>
                                <div class="col-md-10">
                                    <select id="send_to" class="form-control">
                                        <option>sekretariat@zielono-czarna.pl</option>
                                        <option>krzys.nawrot@gmail.com</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                        <div class="addressee col-md-5">
                            <div class="thumbnail">
                                <img src="img/admin.jpg" alt="admin_image" class="img-responsive">
                                <!--                                <div class="panel-footer">Administrator</div>-->
                            </div>
                        </div>

                        <form class="form-horizontal col-md-12">
                            <div class="form-group">
                                <label for="message_text" class="col-md-1 control-label"><i class="fa fa-pencil-square-o fa-2x"></i>
                                </label>
                                <div class="col-md-11">
                                    <textarea id="message_text" class="form-control" rows="6" placeholder="Treść wysyłanej wiadomości. Pamiętaj proszę, że jesteśmy ludźmi i potrzebujemy trochę czasu na odpisanie."></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-default btn-lg center-block"><i class="fa fa-paper-plane"></i> Wyślij!</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!--
        <div class="col-md-4 col-md-offset-2">
            <div class="fb-like-box" data-width="245" data-height="275" data-href="https://www.facebook.com/Zielono-Czarna" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
        </div>

-->






<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body contact-details">
                    <div class="row">
                        <img src="img/church2-edited.jpg" alt="" class="img-responsive">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class=""><span class="glyphicon glyphicon-earphone"></span> Telefony</h3>
                            <ul class="">
                                <li class="">
                                    <b>sekretariat:</b> (+48) 733 890 050
                                </li>
                                <li class="">
                                    <b>przewodnik:</b> (+48) 502 479 607
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h3 class=""><span class="glyphicon glyphicon-envelope"></span> Skrzynki pocztowe</h3>
                            <ul class="">
                                <li class="">
                                    sekretariat@zielono-czarna.pl
                                </li>
                                <li class="">
                                    krzys.nawrot@gmail.com
                            </ul>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h3 class=""><span class="glyphicon glyphicon-transfer"></span> Numer konta</h3>
                            <ul class="">
                                <li class="">
                                    74 1050 1227 1000 0022 9233 5144
                                </li>
                            </ul>
                        </div>

                        <div class="col-md-6">
                            <h3 class=""><span class="glyphicon glyphicon-home"></span> Adres</h3>
                            <ul class="">
                                <li class="">
                                    Rzymskokatolicka Parafia Świętej Trójcy
                                    <br>ul. Plebańska 2,
                                    <br>42-500 Będzin
                                </li>

                            </ul>
                        </div>
                    </div>
            </div>
            <!--
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-lg center-block" data-dismiss="modal">Zamknij</button>
            </div>
-->
        </div>
    </div>
</div>







<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script>
    function init_map() {
        var var_location = new google.maps.LatLng(50.326426, 19.131022);

        var var_mapoptions = {
            center: new google.maps.LatLng(50.326426, 19.128),
            zoom: 17,
            disableDefaultUI: true
        };

        var styles = [{
            stylers: [{
                saturation: -100
            }, {
                lightness: -7
            }]
        }, {
            featureType: "water",
            elementType: "geometry",
            stylers: [{
                hue: "#e3e3e3"
            }, {
                lightness: 30
            }, {
                saturation: -60
            }]
        }, {
            featureType: "water",
            elementType: "labels",
            stylers: [{
                lightness: -60
            }]
        }, {
            featureType: "road",
            elementType: "geometry",
            stylers: [{
                color: "#3e3e3e"
            }, {
                visibility: "simplified"
            }]
        }, {
            featureType: "road.local",
            elementType: "labels",
            stylers: [{
                visibility: "off"
            }]
        }, {
            featureType: "road",
            elementType: "labels.text.fill",
            stylers: [{
                color: "#ebebeb"
            }]
        }, {
            featureType: "road",
            elementType: "labels.text.stroke",
            stylers: [{
                visibility: "off"
            }]
        }, {
            featureType: "road",
            elementType: "labels.icon",
            stylers: [{
                visibility: "off"
            }]
        }, {
            featureType: "poi",
            elementType: "labels",
            stylers: [{
                visibility: "off"
            }]
        }, {
            featureType: "poi",
            elementType: "geometry",
            stylers: [{
                saturation: -50
            }]
        }, {
            featureType: "landscape",
            elementType: "geometry",
            stylers: [{
                saturation: -50
            }]
        }, {
            featureType: "administrative",
            elementType: "labels.text.fill",
            stylers: [{
                color: "#fefefe"
            }]
        }];

        var var_marker = new google.maps.Marker({
            position: var_location,
            map: var_map,
            title: "Kościół św. Trójcy",
            icon: "http://localhost/Zielono-Czarna/img/g-map-icon.png"
        });

        var var_map = new google.maps.Map(document.getElementById("google-maps"),
            var_mapoptions);

        google.maps.event.addListener(var_marker, 'click', function() {
            $('#myModal').modal('show');
        });

        var_map.setOptions({
            styles: styles
        });
        var_marker.setMap(var_map);

    }

    google.maps.event.addDomListener(window, 'load', init_map);
</script>
<!--
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
-->

