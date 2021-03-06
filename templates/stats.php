<!-- start:content -->
<div id="content">

    <div class="col-md-24">
        <div class="panel chart-title">
            <h3><span class="fa fa-area-chart"></span>   Chart Js</h3>
        </div>
    </div>

    <div class="col-md-4">
        <div class="panel">
            <div class="panel-heading bg-white border-none">
                <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                    <h4 class="text-left">Puissance de vos radiateurs</h4>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                    <h4>
                        <span class="fa fa-bolt text-right"></span>
                    </h4>
                </div>
            </div>
            <div class="panel-body text-center" style="padding-bottom:50px;">
                <canvas class="polar-chart"></canvas>
                <h5><?php echo \Hackathyon\Stats::getAdvice1(); ?></h5>
            </div>
        </div>
    </div>

    <div class="col-md-2">
        <div class="panel">
            <div class="panel-heading bg-white border-none">
                <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                    <h4 class="text-left">Température actuelle</h4>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                    <h4>
                        <?php echo \Hackathyon\Stats::getWeatherLogo(); ?>
                    </h4>
                </div>
            </div>
            <div class="panel-body text-center">
                <h1><?php echo \Hackathyon\Stats::getTemp(); ?></h1>
                <p>En ce moment les températures baissent mais n'augmenter pas trop le chauffage.</p>
            </div>
        </div>
    </div>

<!--    <div class="col-md-6">-->
<!--        <div class="panel">-->
<!--            <div class="panel-heading bg-white border-none" style="padding:20px;">-->
<!--                <div class="col-md-6 col-sm-6 col-sm-12 text-left">-->
<!--                    <h4>Orders</h4>-->
<!--                </div>-->
<!--                <div class="col-md-6 col-sm-6 col-sm-12">-->
<!--                    <div class="mini-onoffswitch pull-right onoffswitch-primary" style="margin-top:10px;">-->
<!--                        <input type="checkbox" name="onoffswitch3" class="onoffswitch-checkbox" id="myonoffswitch3" checked>-->
<!--                        <label class="onoffswitch-label" for="myonoffswitch3"></label>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="panel-body" style="padding-bottom:50px;">-->
<!--                <div id="canvas-holder1">-->
<!--                    <canvas class="bar-chart"></canvas>-->
<!--                </div>-->
<!--                <div class="col-md-12 padding-0" >-->
<!--                    <div class="col-md-4 col-sm-4 hidden-xs" style="padding-top:20px;">-->
<!--                        <canvas class="doughnut-chart2"></canvas>-->
<!--                    </div>-->
<!--                    <div class="col-md-8 col-sm-8 col-xs-12">-->
<!--                        <h4>Progress Produksi barang</h4>-->
<!--                        <p>Sed hendrerit. Curabitur blandit mollis lacus. Duis leo. Sed libero.fusce commodo aliquam arcu..</p>-->
<!--                        <div class="progress progress-mini">-->
<!--                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">-->
<!--                                <span class="sr-only">60% Complete</span>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

</div>
<!-- end: content -->


<!-- start: right menu -->
<div id="right-menu">
    <ul class="nav nav-tabs">
        <li class="active">
            <a data-toggle="tab" href="#right-menu-user">
                <span class="fa fa-comment-o fa-2x"></span>
            </a>
        </li>
        <li>
            <a data-toggle="tab" href="#right-menu-notif">
                <span class="fa fa-bell-o fa-2x"></span>
            </a>
        </li>
        <li>
            <a data-toggle="tab" href="#right-menu-config">
                <span class="fa fa-cog fa-2x"></span>
            </a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="right-menu-user" class="tab-pane fade in active">
            <div class="search col-md-12">
                <input type="text" placeholder="search.."/>
            </div>
            <div class="user col-md-12">
                <ul class="nav nav-list">
                    <li class="online">
                        <img src="asset/img/avatar.jpg" alt="user name">
                        <div class="name">
                            <h5><b>Bill Gates</b></h5>
                            <p>Hi there.?</p>
                        </div>
                        <div class="gadget">
                            <span class="fa  fa-mobile-phone fa-2x"></span>
                        </div>
                        <div class="dot"></div>
                    </li>
                    <li class="away">
                        <img src="asset/img/avatar.jpg" alt="user name">
                        <div class="name">
                            <h5><b>Bill Gates</b></h5>
                            <p>Hi there.?</p>
                        </div>
                        <div class="gadget">
                            <span class="fa  fa-desktop"></span>
                        </div>
                        <div class="dot"></div>
                    </li>
                    <li class="offline">
                        <img src="asset/img/avatar.jpg" alt="user name">
                        <div class="name">
                            <h5><b>Bill Gates</b></h5>
                            <p>Hi there.?</p>
                        </div>
                        <div class="dot"></div>
                    </li>
                    <li class="offline">
                        <img src="asset/img/avatar.jpg" alt="user name">
                        <div class="name">
                            <h5><b>Bill Gates</b></h5>
                            <p>Hi there.?</p>
                        </div>
                        <div class="dot"></div>
                    </li>
                    <li class="online">
                        <img src="asset/img/avatar.jpg" alt="user name">
                        <div class="name">
                            <h5><b>Bill Gates</b></h5>
                            <p>Hi there.?</p>
                        </div>
                        <div class="gadget">
                            <span class="fa  fa-mobile-phone fa-2x"></span>
                        </div>
                        <div class="dot"></div>
                    </li>
                    <li class="offline">
                        <img src="asset/img/avatar.jpg" alt="user name">
                        <div class="name">
                            <h5><b>Bill Gates</b></h5>
                            <p>Hi there.?</p>
                        </div>
                        <div class="dot"></div>
                    </li>
                    <li class="online">
                        <img src="asset/img/avatar.jpg" alt="user name">
                        <div class="name">
                            <h5><b>Bill Gates</b></h5>
                            <p>Hi there.?</p>
                        </div>
                        <div class="gadget">
                            <span class="fa  fa-mobile-phone fa-2x"></span>
                        </div>
                        <div class="dot"></div>
                    </li>
                    <li class="offline">
                        <img src="asset/img/avatar.jpg" alt="user name">
                        <div class="name">
                            <h5><b>Bill Gates</b></h5>
                            <p>Hi there.?</p>
                        </div>
                        <div class="dot"></div>
                    </li>
                    <li class="offline">
                        <img src="asset/img/avatar.jpg" alt="user name">
                        <div class="name">
                            <h5><b>Bill Gates</b></h5>
                            <p>Hi there.?</p>
                        </div>
                        <div class="dot"></div>
                    </li>
                    <li class="online">
                        <img src="asset/img/avatar.jpg" alt="user name">
                        <div class="name">
                            <h5><b>Bill Gates</b></h5>
                            <p>Hi there.?</p>
                        </div>
                        <div class="gadget">
                            <span class="fa  fa-mobile-phone fa-2x"></span>
                        </div>
                        <div class="dot"></div>
                    </li>
                    <li class="online">
                        <img src="asset/img/avatar.jpg" alt="user name">
                        <div class="name">
                            <h5><b>Bill Gates</b></h5>
                            <p>Hi there.?</p>
                        </div>
                        <div class="gadget">
                            <span class="fa  fa-mobile-phone fa-2x"></span>
                        </div>
                        <div class="dot"></div>
                    </li>

                </ul>
            </div>
            <!-- Chatbox -->
            <div class="col-md-12 chatbox">
                <div class="col-md-12">
                    <a href="#" class="close-chat">X</a><h4>Akihiko Avaron</h4>
                </div>
                <div class="chat-area">
                    <div class="chat-area-content">
                        <div class="msg_container_base">
                            <div class="row msg_container send">
                                <div class="col-md-9 col-xs-9 bubble">
                                    <div class="messages msg_sent">
                                        <p>that mongodb thing looks good, huh?
                                            tiny master db, and huge document store</p>
                                        <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                    </div>
                                </div>
                                <div class="col-md-3 col-xs-3 avatar">
                                    <img src="asset/img/avatar.jpg" class=" img-responsive " alt="user name">
                                </div>
                            </div>

                            <div class="row msg_container receive">
                                <div class="col-md-3 col-xs-3 avatar">
                                    <img src="asset/img/avatar.jpg" class=" img-responsive " alt="user name">
                                </div>
                                <div class="col-md-9 col-xs-9 bubble">
                                    <div class="messages msg_receive">
                                        <p>that mongodb thing looks good, huh?
                                            tiny master db, and huge document store</p>
                                        <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                    </div>
                                </div>
                            </div>

                            <div class="row msg_container send">
                                <div class="col-md-9 col-xs-9 bubble">
                                    <div class="messages msg_sent">
                                        <p>that mongodb thing looks good, huh?
                                            tiny master db, and huge document store</p>
                                        <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                    </div>
                                </div>
                                <div class="col-md-3 col-xs-3 avatar">
                                    <img src="asset/img/avatar.jpg" class=" img-responsive " alt="user name">
                                </div>
                            </div>

                            <div class="row msg_container receive">
                                <div class="col-md-3 col-xs-3 avatar">
                                    <img src="asset/img/avatar.jpg" class=" img-responsive " alt="user name">
                                </div>
                                <div class="col-md-9 col-xs-9 bubble">
                                    <div class="messages msg_receive">
                                        <p>that mongodb thing looks good, huh?
                                            tiny master db, and huge document store</p>
                                        <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                    </div>
                                </div>
                            </div>

                            <div class="row msg_container send">
                                <div class="col-md-9 col-xs-9 bubble">
                                    <div class="messages msg_sent">
                                        <p>that mongodb thing looks good, huh?
                                            tiny master db, and huge document store</p>
                                        <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                    </div>
                                </div>
                                <div class="col-md-3 col-xs-3 avatar">
                                    <img src="asset/img/avatar.jpg" class=" img-responsive " alt="user name">
                                </div>
                            </div>

                            <div class="row msg_container receive">
                                <div class="col-md-3 col-xs-3 avatar">
                                    <img src="asset/img/avatar.jpg" class=" img-responsive " alt="user name">
                                </div>
                                <div class="col-md-9 col-xs-9 bubble">
                                    <div class="messages msg_receive">
                                        <p>that mongodb thing looks good, huh?
                                            tiny master db, and huge document store</p>
                                        <time datetime="2009-11-13T20:00">Timothy • 51 min</time>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="chat-input">
                    <textarea placeholder="type your message here.."></textarea>
                </div>
                <div class="user-list">
                    <ul>
                        <li class="online">
                            <a href=""  data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                                <div class="user-avatar"><img src="asset/img/avatar.jpg" alt="user name"></div>
                                <div class="dot"></div>
                            </a>
                        </li>
                        <li class="offline">
                            <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                                <img src="asset/img/avatar.jpg" alt="user name">
                                <div class="dot"></div>
                            </a>
                        </li>
                        <li class="away">
                            <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                                <img src="asset/img/avatar.jpg" alt="user name">
                                <div class="dot"></div>
                            </a>
                        </li>
                        <li class="online">
                            <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                                <img src="asset/img/avatar.jpg" alt="user name">
                                <div class="dot"></div>
                            </a>
                        </li>
                        <li class="offline">
                            <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                                <img src="asset/img/avatar.jpg" alt="user name">
                                <div class="dot"></div>
                            </a>
                        </li>
                        <li class="away">
                            <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                                <img src="asset/img/avatar.jpg" alt="user name">
                                <div class="dot"></div>
                            </a>
                        </li>
                        <li class="offline">
                            <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                                <img src="asset/img/avatar.jpg" alt="user name">
                                <div class="dot"></div>
                            </a>
                        </li>
                        <li class="offline">
                            <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                                <img src="asset/img/avatar.jpg" alt="user name">
                                <div class="dot"></div>
                            </a>
                        </li>
                        <li class="away">
                            <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                                <img src="asset/img/avatar.jpg" alt="user name">
                                <div class="dot"></div>
                            </a>
                        </li>
                        <li class="online">
                            <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                                <img src="asset/img/avatar.jpg" alt="user name">
                                <div class="dot"></div>
                            </a>
                        </li>
                        <li class="away">
                            <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                                <img src="asset/img/avatar.jpg" alt="user name">
                                <div class="dot"></div>
                            </a>
                        </li>
                        <li class="away">
                            <a href="" data-toggle="tooltip" data-placement="left" title="Akihiko avaron">
                                <img src="asset/img/avatar.jpg" alt="user name">
                                <div class="dot"></div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="right-menu-notif" class="tab-pane fade">

            <ul class="mini-timeline">
                <li class="mini-timeline-highlight">
                    <div class="mini-timeline-panel">
                        <h5 class="time">07:00</h5>
                        <p>Coding!!</p>
                    </div>
                </li>

                <li class="mini-timeline-highlight">
                    <div class="mini-timeline-panel">
                        <h5 class="time">09:00</h5>
                        <p>Playing The Games</p>
                    </div>
                </li>
                <li class="mini-timeline-highlight">
                    <div class="mini-timeline-panel">
                        <h5 class="time">12:00</h5>
                        <p>Meeting with <a href="#">Clients</a></p>
                    </div>
                </li>
                <li class="mini-timeline-highlight mini-timeline-warning">
                    <div class="mini-timeline-panel">
                        <h5 class="time">15:00</h5>
                        <p>Breakdown the Personal PC</p>
                    </div>
                </li>
                <li class="mini-timeline-highlight mini-timeline-info">
                    <div class="mini-timeline-panel">
                        <h5 class="time">15:00</h5>
                        <p>Checking Server!</p>
                    </div>
                </li>
                <li class="mini-timeline-highlight mini-timeline-success">
                    <div class="mini-timeline-panel">
                        <h5 class="time">16:01</h5>
                        <p>Hacking The public wifi</p>
                    </div>
                </li>
                <li class="mini-timeline-highlight mini-timeline-danger">
                    <div class="mini-timeline-panel">
                        <h5 class="time">21:00</h5>
                        <p>Sleep!</p>
                    </div>
                </li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>

        </div>
        <div id="right-menu-config" class="tab-pane fade">
            <div class="col-md-12">
                <div class="col-md-6 padding-0">
                    <h5>Notification</h5>
                </div>
                <div class="col-md-6">
                    <div class="mini-onoffswitch onoffswitch-info">
                        <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch1" checked>
                        <label class="onoffswitch-label" for="myonoffswitch1"></label>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="col-md-6 padding-0">
                    <h5>Custom Designer</h5>
                </div>
                <div class="col-md-6">
                    <div class="mini-onoffswitch onoffswitch-danger">
                        <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch2" checked>
                        <label class="onoffswitch-label" for="myonoffswitch2"></label>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="col-md-6 padding-0">
                    <h5>Autologin</h5>
                </div>
                <div class="col-md-6">
                    <div class="mini-onoffswitch onoffswitch-success">
                        <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch3" checked>
                        <label class="onoffswitch-label" for="myonoffswitch3"></label>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="col-md-6 padding-0">
                    <h5>Auto Hacking</h5>
                </div>
                <div class="col-md-6">
                    <div class="mini-onoffswitch onoffswitch-warning">
                        <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch4" checked>
                        <label class="onoffswitch-label" for="myonoffswitch4"></label>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="col-md-6 padding-0">
                    <h5>Auto locking</h5>
                </div>
                <div class="col-md-6">
                    <div class="mini-onoffswitch">
                        <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch5" checked>
                        <label class="onoffswitch-label" for="myonoffswitch5"></label>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="col-md-6 padding-0">
                    <h5>FireWall</h5>
                </div>
                <div class="col-md-6">
                    <div class="mini-onoffswitch">
                        <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch6" checked>
                        <label class="onoffswitch-label" for="myonoffswitch6"></label>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="col-md-6 padding-0">
                    <h5>CSRF Max</h5>
                </div>
                <div class="col-md-6">
                    <div class="mini-onoffswitch onoffswitch-warning">
                        <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch7" checked>
                        <label class="onoffswitch-label" for="myonoffswitch7"></label>
                    </div>
                </div>
            </div>


            <div class="col-md-12">
                <div class="col-md-6 padding-0">
                    <h5>Man In The Middle</h5>
                </div>
                <div class="col-md-6">
                    <div class="mini-onoffswitch onoffswitch-danger">
                        <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch8" checked>
                        <label class="onoffswitch-label" for="myonoffswitch8"></label>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="col-md-6 padding-0">
                    <h5>Auto Repair</h5>
                </div>
                <div class="col-md-6">
                    <div class="mini-onoffswitch onoffswitch-success">
                        <input type="checkbox" name="onoffswitch2" class="onoffswitch-checkbox" id="myonoffswitch9" checked>
                        <label class="onoffswitch-label" for="myonoffswitch9"></label>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <input type="button" value="More.." class="btnmore">
            </div>

        </div>
    </div>
</div>
<!-- end: right menu -->

</div>

<!-- end: Content -->
<!-- start: Javascript -->
<script src="asset/js/jquery.min.js"></script>
<script src="asset/js/jquery.ui.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>



<!-- plugins -->
<script src="asset/js/plugins/moment.min.js"></script>
<script src="asset/js/plugins/chart.min.js"></script>
<script src="asset/js/plugins/jquery.nicescroll.js"></script>

<!-- custom -->
<script src="asset/js/main.js"></script>
<script type="text/javascript">
    (function(jQuery){
        var doughnutData = [
            <?php echo \Hackathyon\Stats::roomGraph(); ?>
        ];

        window.onload = function(){

            var ctx6 = $(".polar-chart")[0].getContext("2d");
            window.myPolar = new Chart(ctx6).PolarArea(doughnutData, {
                responsive : true,
                showTooltips: true
            });
        };
    })(jQuery);
</script>
<!-- end: Javascript -->
</body>
</html>