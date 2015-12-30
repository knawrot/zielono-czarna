<div id="enrollment_bg" class="contanier full-height-bg">
    <div id="enrollment-content" class="opening-heading">
        <h1>Naprawdę, pamiętamy o nich!</h1>
        <br>
        <p class="custom-subheader1">Zrob sobię herbatkę i wroć tu za chwilę. Wcale nie gwarantujemy, że wtedy zaczną się zapisy, ale zawsze warto probować.</p>
        <br>
        <br>
        <p class="custom-subheader2">A wyruszamy już za...</p>
        <div class="countdown countdown-container container">
            <div class="clock row">
                <div class="clock-item clock-days countdown-time-value col-sm-6 col-md-3">
                    <div class="wrap">
                        <div class="inner">
                            <div id="canvas-days" class="clock-canvas"></div>

                            <div class="text">
                                <p class="val">0</p>
                                <p class="type-days type-time">DNI</p>
                            </div>
                            <!-- /.text -->
                        </div>
                        <!-- /.inner -->
                    </div>
                    <!-- /.wrap -->
                </div>
                <!-- /.clock-item -->

                <div class="clock-item clock-hours countdown-time-value col-sm-6 col-md-3">
                    <div class="wrap">
                        <div class="inner">
                            <div id="canvas-hours" class="clock-canvas"></div>

                            <div class="text">
                                <p class="val">0</p>
                                <p class="type-hours type-time">GODZIN</p>
                            </div>
                            <!-- /.text -->
                        </div>
                        <!-- /.inner -->
                    </div>
                    <!-- /.wrap -->
                </div>
                <!-- /.clock-item -->

                <div class="clock-item clock-minutes countdown-time-value col-sm-6 col-md-3">
                    <div class="wrap">
                        <div class="inner">
                            <div id="canvas-minutes" class="clock-canvas"></div>

                            <div class="text">
                                <p class="val">0</p>
                                <p class="type-minutes type-time">MINUT</p>
                            </div>
                            <!-- /.text -->
                        </div>
                        <!-- /.inner -->
                    </div>
                    <!-- /.wrap -->
                </div>
                <!-- /.clock-item -->

                <div class="clock-item clock-seconds countdown-time-value col-sm-6 col-md-3">
                    <div class="wrap">
                        <div class="inner">
                            <div id="canvas-seconds" class="clock-canvas"></div>

                            <div class="text">
                                <p class="val">0</p>
                                <p class="type-seconds type-time">SEKUND</p>
                            </div>
                            <!-- /.text -->
                        </div>
                        <!-- /.inner -->
                    </div>
                    <!-- /.wrap -->
                </div>
                <!-- /.clock-item -->
            </div>
            <!-- /.clock -->
        </div>
        <!-- /.countdown-wrapper -->
    </div>
</div>






<script type="text/javascript" src="js/kinetic.js"></script>
<script src="plugins/jquery-final-countdown/jquery.final-countdown.js"></script>
<script type="text/javascript">
    $('.countdown').final_countdown({
        'start': 1407477600,
        'end': 1439013600,
        'now': 1415664746,
        seconds: {
            borderColor: '#bcbcbc',
            borderWidth: '6'
        },
        minutes: {
            borderColor: '#c6c6c6',
            borderWidth: '6'
        },
        hours: {
            borderColor: '#dddddd',
            borderWidth: '6'
        },
        days: {
            borderColor: '#f4f4f4',
            borderWidth: '6'
        }
    });
</script>