<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="content-type" content="text/html;"charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{asset('img/favicon.png' )}}" rel="icon">
        <link href="../../public/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Bootstrap core CSS -->

        <link href="{{asset('lib/bootstrap/css/bootstrap.min.css' )}}" rel="stylesheet">
        <!--external css-->

        <link href="{{asset('lib/font-awesome/css/font-awesome.css' )}}" rel="stylesheet">




        <link href="{{asset('css/style-responsive.css' )}}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{asset('css/zabuto_calendar.css' )}}">

        <link  rel="stylesheet" type="text/css" href="{{asset('lib/gritter/css/jquery.gritter.css' )}}" />
        <!-- Custom styles for this template -->
        <link href="{{asset('css/style.css' )}}" rel="stylesheet">





        <script src="{{asset('lib/chart-master/Chart.js') }}"></script>



        <!-- =======================================================
          Template Name: Dashio
          Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
          Author: TemplateMag.com
          License: https://templatemag.com/license/
        ======================================================= -->
        <style type="text/css">
            <!--
            .style1 {
                font-size: 18px;
                color: #FFFFFF;
            }
            .style2 {color: #FFFFFF}
            .style5 {font-size: 18px; color: #FFFFFF; font-weight: bold; }
            -->
        </style>
    </head>
    <body>

        <section id="container">
            <!-- **********************************************************************************************************************************************************
                TOP BAR CONTENT & NOTIFICATIONS
                *********************************************************************************************************************************************************** -->
            <!--header start-->
            <header class="header black-bg">
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Our Statistics"></div>
                </div>
                <!--logo start-->
                <a href="index.html" class="logo"><strong>TUNISTAT</strong></a>
                <!--logo end-->
                <div class="nav notify-row" id="top_menu">
                    <!--  notification start -->
                    <ul class="nav top-menu">
                        <!-- settings start -->
                        <li class="dropdown">
                            <ul class="dropdown-menu extended tasks-bar">
                                <div class="notify-arrow notify-arrow-green"></div>
                                <li>
                                    <p class="green">You have 4 pending tasks</p>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <div class="task-info">
                                            <div class="desc">Dashio Admin Panel</div>
                                            <div class="percent">40%</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                <span class="sr-only">40% Complete (success)</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <div class="task-info">
                                            <div class="desc">Database Update</div>
                                            <div class="percent">60%</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                <span class="sr-only">60% Complete (warning)</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <div class="task-info">
                                            <div class="desc">Product Development</div>
                                            <div class="percent">80%</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                <span class="sr-only">80% Complete</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <div class="task-info">
                                            <div class="desc">Payments Sent</div>
                                            <div class="percent">70%</div>
                                        </div>
                                        <div class="progress progress-striped">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                                <span class="sr-only">70% Complete (Important)</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="external">
                                    <a href="#">See All Tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- settings end -->
                        <!-- inbox dropdown start-->
                        <li id="header_inbox_bar" class="dropdown">
                            <ul class="dropdown-menu extended inbox">
                                <div class="notify-arrow notify-arrow-green"></div>
                                <li>
                                    <p class="green">You have 5 new messages</p>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <span class="photo"><img alt="avatar" src="../../public/img/ui-zac.jpg"></span>
                                        <span class="subject">
                  <span class="from">Zac Snider</span>
                  <span class="time">Just now</span>
                  </span>
                                        <span class="message">
                  Hi mate, how is everything?
                  </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <span class="photo"><img alt="avatar" src="../../public/img/ui-divya.jpg"></span>
                                        <span class="subject">
                  <span class="from">Divya Manian</span>
                  <span class="time">40 mins.</span>
                  </span>
                                        <span class="message">
                  Hi, I need your help with this.
                  </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <span class="photo"><img alt="avatar" src="../../public/img/ui-danro.jpg"></span>
                                        <span class="subject">
                  <span class="from">Dan Rogers</span>
                  <span class="time">2 hrs.</span>
                  </span>
                                        <span class="message">
                  Love your new Dashboard.
                  </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <span class="photo"><img alt="avatar" src="../../public/img/ui-sherman.jpg"></span>
                                        <span class="subject">
                  <span class="from">Dj Sherman</span>
                  <span class="time">4 hrs.</span>
                  </span>
                                        <span class="message">
                  Please, answer asap.
                  </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">See all messages</a>
                                </li>
                            </ul>
                        </li>
                        <!-- inbox dropdown end -->
                        <!-- notification dropdown start-->
                        <li id="header_notification_bar" class="dropdown">
                            <ul class="dropdown-menu extended notification">
                                <div class="notify-arrow notify-arrow-yellow"></div>
                                <li>
                                    <p class="yellow">You have 7 new notifications</p>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        Server Overloaded.
                                        <span class="small italic">4 mins.</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <span class="label label-warning"><i class="fa fa-bell"></i></span>
                                        Memory #2 Not Responding.
                                        <span class="small italic">30 mins.</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                                        Disk Space Reached 85%.
                                        <span class="small italic">2 hrs.</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">
                                        <span class="label label-success"><i class="fa fa-plus"></i></span>
                                        New User Registered.
                                        <span class="small italic">3 hrs.</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.html#">See all notifications</a>
                                </li>
                            </ul>
                        </li>
                        <!-- notification dropdown end -->
                    </ul>
                    <!--  notification end -->
                </div>
                <div class="top-menu">
                    <ul class="nav pull-right top-menu">
                        <li><a class="logout" href="login">Log In </a></li>
                        <li><a class="logout" href="{{ route('register') }}">register </a></li>
                    </ul>
                </div>
            </header>
            <!--header end-->
            <!-- **********************************************************************************************************************************************************
                MAIN SIDEBAR MENU
                *********************************************************************************************************************************************************** -->
            <!--sidebar start-->
            <aside>
                <div id="sidebar" class="nav-collapse ">
                    <!-- sidebar menu start-->
                    <ul class="sidebar-menu" id="nav-accordion">
                        <p class="centered"><a href="profile"><img src="{{asset('img/images.jpg') }}" alt="" width="208" height="113"</a></p>


                        <li class="sub-menu"><a href="javascript:;"><span>Events</span>  </a>
                            <ul class="sub">
                                <li><a href="calendar">Calendar</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-book"></i>
                                <span>Extra Pages</span>            </a>
                            <ul class="sub">

                                <li><a href="login">Login</a></li>
                                <li><a href="lock_screen">Lock Screen</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-tasks"></i>
                                <span>Forms</span>            </a>
                            <ul class="sub">


                                <li><a href="form_validation">Form Validation</a></li>

                            </ul>
                        </li>


                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class=" fa fa-bar-chart-o"></i>
                                <span>2019 Legislative results: distribution of seats</span></a><ul class="sub">
                                <li><a href="nord_est">Nord-Est</a></li>

                                <li><a href="nord_ouest">Nord-Ouest</a></li>
                                <li><a href="le_centre_est">Le centre Est </a></li>
                                <li><a href="midwest">Midwest</a></li>
                                <li><a href="sud_est">Sud-Est</a></li>
                                <li><a href="sud_ouest">Sud-Ouest</a></li>
                                <li><a href="etranger">L'etranger</a></li>


                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class=" fa fa-bar-chart-o"></i>
                                <span>distribution of seats </span></a><ul class="sub">
                                <li><a href="resultat">
                                        results</a></li>




                            </ul>
                        </li>

                        <li>
                            <a href="google_maps">
                                <i class="fa fa-map-marker"></i>
                                <span>Google Maps</span></a></li>


                        <li class="sub-menu">
                            <a href="contact">
                                <i class="fa fa-comments-o"></i>
                                <span>Contact</span>       </a>
                            <!-- sidebar menu end-->
                </div>
            </aside>
            <!--sidebar end-->
            <!-- **********************************************************************************************************************************************************
                MAIN CONTENT
                *********************************************************************************************************************************************************** -->
            <!--main content start-->
            <section id="main-content">
                <section class="wrapper">
                    <div class="row">
                        <div class="col-lg-9 main-chart">
                            <!--CUSTOM CHART START -->
                            <div class="border-head">
                                <h3><strong>Le taux de participation par tranche d’âge pour les élections de 2019/2020 </strong></h3>
                            </div>
                            <div class="custom-bar-chart">
                                <ul class="y-axis">
                                    <li><span></span></li>
                                    <li><span></span></li>
                                    <li><span>60%</span></li>
                                    <li><span>40%</span></li>
                                    <li><span>20%</span></li>

                                    <li></li>
                                </ul>
                                <div class="bar">
                                    <div class="title"></div>
                                    <div class="value tooltips" data-original-title="âge entre 18 et 25 ans - 9%" data-toggle="tooltip" data-placement="top">10%</div>
                                </div>

                                <div class="bar ">
                                    <div class="title"></div>
                                    <div class="value tooltips" data-original-title="âge entre 26 et 45 ans - 33%" data-toggle="tooltip" data-placement="top">30%</div>
                                </div>
                                <div class="bar">
                                    <div class="title"></div>
                                    <div class="value tooltips" data-original-title="+ 45 ans 57%" data-toggle="tooltip" data-placement="top">57%</div>
                                </div>
                            </div>
                            <!--custom chart end-->
                            <div class="row mt">
                                <!-- SERVER STATUS PANELS -->
                                <div class="col-md-4 col-sm-4 mb">
                                    <div class="grey-panel pn donut-chart">
                                        <div class="grey-header">
                                            <h5>Taux de participation par Sex d'age entre 18 et 25 ans </h5>
                                        </div>
                                        <canvas id="serverstatus01" height="120" width="120"></canvas>
                                        <script>
                                            var doughnutData = [{
                                                value: 50,
                                                color: "#FF6B6B"
                                            },
                                                {
                                                    value: 40,
                                                    color: "#fdfdfd"
                                                }
                                            ];
                                            var myDoughnut = new Chart(document.getElementById("serverstatus01").getContext("2d")).Doughnut(doughnutData);
                                        </script>
                                        <div class="row">
                                            <div class="col-sm-6 col-xs-6 goleft">
                                                <p>5% électeurs: <br/>
                                                    4% électrices
                                                    :</p>
                                            </div>
                                            <div class="col-sm-6 col-xs-6">
                                                <h2>9%</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /grey-panel -->
                                </div>
                                <div class="col-md-4 col-sm-4 mb">
                                    <div class="green-panel pn">
                                        <div class="green-header">
                                            <h6 class="style1">Bulletins annulés <span class="style2">: 49.704</span></h6>
                                        </div>
                                        <canvas id="serverstatus03" height="120" width="120"></canvas>
                                        <script>
                                            var doughnutData = [{
                                                value: 70,
                                                color: "#CC00FF"
                                            },
                                                {
                                                    value: 40,
                                                    color: "#2b2b2b"
                                                }
                                            ];
                                            var myDoughnut = new Chart(document.getElementById("serverstatus03").getContext("2d")).Doughnut(doughnutData);
                                        </script>
                                        <h6><span class="style5">Bulletins blanc : </span><span class="style1">26.403</span> </h6>
                                    </div>
                                </div>
                                <!-- /col-md-4-->
                                <div class="col-md-4 col-sm-4 mb">
                                    <div class="darkblue-panel pn">
                                        <div class="darkblue-header">
                                            <h4 class="style2">Electeurs inscrits : 7.056.885</h4>
                                        </div>
                                        <canvas id="serverstatus02" height="120" width="120"></canvas>
                                        <script>
                                            var doughnutData = [{
                                                value: 40,
                                                color: "#1c9ca7"
                                            },
                                                {
                                                    value: 30,
                                                    color: "#FF9900"
                                                },
                                                {
                                                    value: 30,
                                                    color: "#f68275"
                                                }
                                            ];
                                            var myDoughnut = new Chart(document.getElementById("serverstatus02").getContext("2d")).Doughnut(doughnutData);
                                        </script>
                                        <h4 class="style2">Votants : 2.946.628</h4>
                                        <h4 class="style2">Voix exprimées: 2.870.314</h4>
                                        <footer></footer>
                                    </div>
                                    <!--  /darkblue panel -->
                                </div>
                                <!-- /col-md-4 -->
                                <!-- /col-md-4 -->
                            </div>
                            <!-- /row -->
                            <div class="row">
                                <!-- WEATHER PANEL -->
                                <!-- /col-md-4-->
                                <!-- DIRECT MESSAGE PANEL -->
                                <!-- /col-md-8  -->
                            </div>
                            <div class="row">
                                <!-- TWITTER PANEL -->
                                <!-- /col-md-4 -->
                                <!-- /col-md-4 -->

                                <!-- /col-md-4 -->
                            </div>
                            <!-- /row -->
                            <div class="row">
                                <!-- /col-md-4 -->
                                <!--  PROFILE 02 PANEL -->
                                <!--/ col-md-4 -->
                                <!-- /col-md-4 -->
                            </div>
                            <!-- /row -->
                        </div>
                        <!-- /col-lg-9 END SECTION MIDDLE -->
                        <!-- **********************************************************************************************************************************************************
                            RIGHT SIDEBAR CONTENT
                            *********************************************************************************************************************************************************** -->
                        <div class="col-lg-3 ds">
                            <!--COMPLETED ACTIONS DONUTS CHART-->
                            <!--NEW EARNING STATS -->
                            <!--new earning end-->
                            <!-- RECENT ACTIVITIES SECTION -->
                            <h4 class="centered mt">&nbsp;</h4>
                            <!-- First Member -->
                            <!-- Second Member -->
                            <!-- Third Member -->
                            <!-- Fourth Member -->
                            <!-- CALENDAR-->
                            <div id="calendar" class="mb">
                                <div class="panel green-panel no-margin">
                                    <div class="panel-body">
                                        <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                                            <div class="arrow"></div>
                                            <h3 class="popover-title" style="disadding: none;"></h3>
                                            <div id="date-popover-content" class="popover-content"></div>
                                        </div>
                                        <div id="my-calendar"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- / calendar -->
                        </div>
                        <div align="center">
                            <!-- /col-lg-3 -->
                        </div>
                    </div>
                    <!-- /row -->
                </section>
            </section>
            <!--main content end-->
            <!--footer start-->
            <footer class="site-footer">
                <div class="text-center">
                    <p><strong>2020 - 2021 © TUNISTAT. All rights reserved.</strong></p>
                    <div class="credits">
                        <!--
                          You are NOT allowed to delete the credit link to TemplateMag with free version.
                          You can delete the credit link only if you bought the pro version.
                          Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
                          Licensing information: https://templatemag.com/license/
                        --></div>
                    <a href="index#" class="go-top">
                        <i class="fa fa-angle-up"></i>        </a>      </div>
            </footer>
            <!--footer end-->
        </section>

        <script src="{{asset('lib/jquery/jquery.min.js') }}"></script>




        <script src="{{asset('lib/bootstrap/js/bootstrap.min.js') }}"></script>

        <script class="include" type="text/javascript" src="{{asset('lib/jquery.dcjqaccordion.2.7.js') }}"></script>





        <script src="{{asset('lib/jquery.scrollTo.min.js') }}"></script>

        <script src="{{asset('lib/jquery.nicescroll.js') }}"></script>





        <script src="{{asset('lib/jquery.sparkline.js') }}"></script>

        <!--common script for all pages-->


        <script src="{{asset('lib/common-scripts.js') }}"></script>

        <script type="text/javascript" src="{{asset('lib/gritter/js/jquery.gritter.js') }}"></script>


        <script type="text/javascript" src="{{asset('lib/gritter-conf.js') }}"></script>


        <!--script for this page-->


        <script src="{{asset('lib/sparkline-chart.js') }}"></script>


        <script src="{{asset('lib/zabuto_calendar.js') }}"></script>


        <script type="text/javascript">
            $(document).ready(function() {
                var unique_id = $.gritter.add({
                    // (string | mandatory) the heading of the notification

                    // (string | mandatory) the text inside the notification


                    // (bool | optional) if you want it to fade out on its own or just sit there
                    sticky: false,
                    // (int | optional) the time you want it to be alive for before fading out
                    time: 8000,
                    // (string | optional) the class name you want to apply to that specific message
                    class_name: 'my-sticky-class'
                });

                return false;
            });
        </script>
        <script type="application/javascript">
            $(document).ready(function() {
                $("#date-popover").popover({
                    html: true,
                    trigger: "manual"
                });
                $("#date-popover").hide();
                $("#date-popover").click(function(e) {
                    $(this).hide();
                });

                $("#my-calendar").zabuto_calendar({
                    action: function() {
                        return myDateFunction(this.id, false);
                    },
                    action_nav: function() {
                        return myNavFunction(this.id);
                    },
                    ajax: {
                        url: "show_data.php?action=1",
                        modal: true
                    },
                    legend: [{
                        type: "text",
                        label: "Special event",
                        badge: "00"
                    },
                        {
                            type: "block",
                            label: "Regular event",
                        }
                    ]
                });
            });

            function myNavFunction(id) {
                $("#date-popover").hide();
                var nav = $("#" + id).data("navigation");
                var to = $("#" + id).data("to");
                console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
            }
        </script>
    </body>
</html>
