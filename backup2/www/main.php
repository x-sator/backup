<?php
session_start();
?>
<html>
<html>
<head>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="./js/bootstrap.js"></script>

    <link rel="stylesheet" href="assets/css/styles.css" />


    <title>PlanB </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="./images/1 (1).png" type="image/x-icon">

    <meta charset="utf-8">

    <link media="screen" href="./css/bootstrap.css" rel="stylesheet" />
    <!--<link media="screenmin" href="./css/bootstrap.min.css" rel="stylesheetmin" />-->

    <!--Calendar-->
    <link href="./css/fullcalendar.css" rel='stylesheet' />
    <link href="./css/fullcalendar.print.css" rel='stylesheet' media='print' />
    <script src="./js/jquery.min.js"></script>
    <script src="./js/jquery-ui.custom.min.js"></script>
    <script src="./js/fullcalendar.min.js"></script>

    <!--Часы-->
    <script>
        //document.write("<table><tr><td width='100' ><FONT color='#cF0033' face='verdana' style='font-size : 21px;'>");("</td></tr></table>");
        var clockid=new Array()
        var clockidoutside=new Array()
        var i_clock=-1
        var thistime= new Date()
        var hours=thistime.getHours()
        var minutes=thistime.getMinutes()
        var seconds=thistime.getSeconds()
        if (eval(hours) <10) {hours="0"+hours}
        if (eval(minutes) < 10) {minutes="0"+minutes}
        if (seconds < 10) {seconds="0"+seconds}
        var thistime = hours+":"+minutes+":"+seconds

        function writeclock() {
            i_clock++
            if (document.all || document.getElementById || document.layers) {
                clockid[i_clock]="clock"+i_clock
                document.write("<span id='"+clockid[i_clock]+"' style='position:relative'>"+thistime+"</span>")
            }
        }

        function clockon() {
            thistime= new Date()
            hours=thistime.getHours()
            minutes=thistime.getMinutes()
            seconds=thistime.getSeconds()
            if (eval(hours) <10) {hours="0"+hours}
            if (eval(minutes) < 10) {minutes="0"+minutes}
            if (seconds < 10) {seconds="0"+seconds}
            thistime = hours+":"+minutes+":"+seconds

            if (document.all) {
                for (i=0;i<=clockid.length-1;i++) {
                    var thisclock=eval(clockid[i])
                    thisclock.innerHTML=thistime
                }
            }

            if (document.getElementById) {
                for (i=0;i<=clockid.length-1;i++) {
                    document.getElementById(clockid[i]).innerHTML=thistime
                }
            }
            var timer=setTimeout("clockon()",1000)
        }
        window.onload=clockon
    </script>

    <br>
    <br>
    </td></tr></table>
    <!--**********************************-->

    <!--Календарь-->
    <script>
        $(document).ready(function() {

            var date = new Date();
            var d = date.getDate();
            var m = date.getMonth();
            var y = date.getFullYear();

            var calendar = $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                selectable: true,
                selectHelper: true,
                select: function(start, end, allDay) {
                    var title = prompt('Event Title:');
                    if (title) {
                        calendar.fullCalendar('renderEvent',
                            {
                                title: title,
                                start: start,
                                end: end,
                                allDay: allDay
                            },
                            true // make the event "stick"
                        );
                    }
                    calendar.fullCalendar('unselect');
                },
                editable: true,
                events: [
                    {
                        title: 'All Day Event',
                        start: new Date(y, m, 1)
                    },
                    {
                        title: 'Long Event',
                        start: new Date(y, m, d-5),
                        end: new Date(y, m, d-2)
                    },
                    {
                        id: 999,
                        title: 'Repeating Event',
                        start: new Date(y, m, d-3, 16, 0),
                        allDay: false
                    },
                    {
                        id: 999,
                        title: 'Repeating Event',
                        start: new Date(y, m, d+4, 16, 0),
                        allDay: false
                    },
                    {
                        title: 'Meeting',
                        start: new Date(y, m, d, 10, 30),
                        allDay: false
                    },
                    {
                        title: 'Lunch',
                        start: new Date(y, m, d, 12, 0),
                        end: new Date(y, m, d, 14, 0),
                        allDay: false
                    },
                    {
                        title: 'Birthday Party',
                        start: new Date(y, m, d+1, 19, 0),
                        end: new Date(y, m, d+1, 22, 30),
                        allDay: false
                    },
                    {
                        title: 'Click for Google',
                        start: new Date(y, m, 28),
                        end: new Date(y, m, 29),
                        url: 'http://google.com/'
                    }
                ]
            });

        });

    </script>
    <!--**********************************-->

    <style type="text/css">
        .calstyle
        body {
            margin-top: 40px;
            text-align: center;
            font-size: 14px;
            font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
        }

        #calendar {
            width: 900px;
            margin: 0 auto;
        }
        .clocks{
            font-family: "verdana";
            font-size: 21px;
            color: #d9230f;
        }


    </style>
</head>


<body>
<div class="wrapper container">
    <header>
        <h1>PlanB</h1>
    </header>

    <article>
        <p class="span4">all in good time</p>
    </article>

    <nav>
        <div class="dropdown">
            <a id="dLabel" role="button" data-target="#" style="cursor: pointer" onClick = "oc_usr_menu1()">
                Home
            </a>

            <a id="dLabel" role="button" data-target="#" style="margin-left: 20px; cursor: pointer" onClick = "oc_usr_menu2()">
                Notes
            </a>

            <a id="dLabel" role="button" data-target="#" style="margin-left: 20px; cursor: pointer" onClick = "oc_usr_menu3();">
                Calendar
            </a>

            <a class="dropdown-toggle" id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="/page.html" style="margin-left: 20px;">
                More
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel" style="margin-left: 200px; cursor: pointer">
                <a id="dLabel" role="button" data-target="#" style="margin-left: 20px; cursor: pointer" onClick = "oc_usr_menu4();">
                    Help
                </a>

                <a id="dLabel" role="button" data-target="#" style="margin-left: 20px;" onClick = "oc_usr_menu5();">
                    About
                </a>
            </ul>

        </div>


    </nav>
</div>

    <!--Home-->
    <div id="home" class="container" style="margin-top: 20px; display:none">
        <table>
            <tr>
                <td>
                     <div class="clocks">
                        <script>
                        writeclock();
                         </script> Tomsk
                     </div>
                </td>
            </tr>
            <tr>
                <td><br><br>
                      <div class="weather">
                         <a href="http://www.booked.net/weather/tomsk-17430">
                         <img src="http://w.bookcdn.com/weather/picture/32_17430_1_1_e74c3c_250_c0392b_ffffff_ffffff_1_2071c9_ffffff_0_3.png?scode=124&domid=" /></a>
                     </div>
                </td>
            </tr>
        </table>
    </div>

    <!--Notes-->
    <div id="notes" class="container" style="margin-top: 20px; display:none">

    </div>

<!--Calendar-->
<div class="calstyle" id="calendar" style="margin-top: 20px; display:block">

</div>

<!--Help-->
<div class="container" id="help" style="margin-top: 20px; display:none">
qwertyui
</div>

<!--About-->

<div class="container" id="about" style="margin-top: 20px; display:none">
    <div id="impress" class="impress-not-supported">
        <div id="intro" class="step" data-x="0" data-y="0">
            <h2>XAMPP</h2>
            <p>&#8226; The most popular PHP dev package<br /> &#8226; For Windows, Mac OS X & Linux<br /> &#8226; Easy installation and configuration<br /> &#8226; Completely free of charge<br /> &#8226; Include PHP, MySQL, Apache</p>
            <img src="assets/img/xampp-logo.jpg" width="55%" height="40%"/>

        </div>

        <div id="simplicity" class="step" data-x="1100" data-y="1200" data-scale="1.8" data-rotate="190">
            <h2>Twitter Bootstrap</h2>
            <p>The most popular front-end framework for developing responsive, mobile first projects on the web. </p>
            <img src="assets/img/bootstrap-logo.png" width="40%" height="35%"/>

        </div>

        <div id="connect" class="step" data-x="-300" data-y="600" data-scale="0.2" data-rotate="270">
            <h2>MySQL</h2>
            <p>The world's most popular open source database. </p>
            <img src="assets/img/Mysql.png" width="70%" height="30%"/>

        </div>

        <div id="upload" class="step" data-x="-800" data-y="1500" data-rotate="180">
            <h2>JetBrains PhpStorm</h2>
            <p>&#8226; Smart PHP Code Editor<br /> &#8226; Code Quality Analysis<br /> &#8226; HTML/CSS/JavaScript Editor<br /> &#8226; Debugging and Testing<br /> &#8226; Cross-platform Experience</p>
            <img src="assets/img/logo_jetbrains.gif" width="65%" height="20%"/>

        </div>

        <div id="music" class="step" data-x="-1600" data-y="1000" data-scale="0.8" data-rotate="270">
            <h2>PHP</h2>
            <p>Fast, flexible and pragmatic, PHP powers everything from your blog to the most popular websites in the world. </p>
            <img src="assets/img/php.png" width="60%" height="30%"/>
        </div>

    </div>
    <br> <br> <br> <br> <br> <br> <br> <br> <br><br> <br> <br> <br> <br>

    <a id="arrowLeft" class="arrow">&lt;</a>
    <a id="arrowRight" class="arrow">&gt;</a>
    <!-- JavaScript includes -->

    <script src="assets/js/impress.js"></script>
    <script src="assets/js/script.js"></script>
</div>


<footer>
    <div class="modal-footer">
        <table>
            <tr><td width="10%"></td>
            <td width="30%" valign="top">
                <h3>PlanB</h3>
                <p>Author: Popop Kirill<br>ACS Department<br>Faculty of Management Systems<br>TUSUR</p>
            </td>
            <td width="30%" valign="top">
                <h3>Social networks</h3>
                <a href="http://vk.com/idfurious" class="social_vk">http://vk.com/idfurious</a>
            </td>
            <td width="30%"  valign="top">
                <a href="/"><img src="./images/PRO13.png" width="60%" height="15%"></a>
                <p>
                    Copyright © 2014 PRO13. A <a href="http://vk.com/pro13group">PRO13</a> creation
                </p>
            </td>
            </tr>
        </table>
    </div>
</footer>


<script type="text/javascript">
    function oc_usr_menu1() {
        document.getElementById('home').style.display = 'block';
        document.getElementById('notes').style.display = 'none';
        document.getElementById('calendar').style.display = 'none';
        document.getElementById('help').style.display = 'none';
        document.getElementById('about').style.display = 'none';
    }
</script>

<script type="text/javascript">
    function oc_usr_menu2() {
        document.getElementById('home').style.display = 'none';
        document.getElementById('notes').style.display = 'block';
        document.getElementById('calendar').style.display = 'none';
        document.getElementById('help').style.display = 'none';
        document.getElementById('about').style.display = 'none';
    }
</script>

<script type="text/javascript">
    function oc_usr_menu3() {
        document.getElementById('home').style.display = 'none';
        document.getElementById('notes').style.display = 'none';
        document.getElementById('calendar').style.display = 'block';
        document.getElementById('help').style.display = 'none';
        document.getElementById('about').style.display = 'none';
    }
</script>

<script type="text/javascript">
    function oc_usr_menu4() {
        document.getElementById('home').style.display = 'none';
        document.getElementById('notes').style.display = 'none';
        document.getElementById('calendar').style.display = 'none';
        document.getElementById('help').style.display = 'block';
        document.getElementById('about').style.display = 'none';
    }
</script>

<script type="text/javascript">
    function oc_usr_menu5() {
        document.getElementById('home').style.display = 'none';
        document.getElementById('notes').style.display = 'none';
        document.getElementById('calendar').style.display = 'none';
        document.getElementById('help').style.display = 'none';
        document.getElementById('about').style.display = 'block';
    }
</script>

</body>

</html>