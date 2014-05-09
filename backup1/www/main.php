<?php
session_start();
?>
<html>
<html>
<head>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="./js/bootstrap.js"></script>

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
            color: #cF0033;
        }
    </style>
</head>


<body>
<div class="wrapper container">
    <header>
        <h1>PlanB</h1>

        <form name="search" action="#" method="get" class="form-inline form-search pull-right" style="margin-top: -50px" >
            <div class="input-group">
                <label class="sr-only" for="searchInput">Search</label>
                <input class="form-control" id="searchInput" type="text" name="search" placeholder="Search">
                <div class="input-group-btn">
                    <button type="submit" class="btn btn-primary">GO</button>
                </div>
            </div>
        </form>

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
    <div id="home" class="container" style="margin-top: 20px">
        <div class="clocks">
            <script>
                writeclock();
            </script> Томск
        </div>
    </div>

    <!--Notes-->
    <div id="notes" class="container" style="margin-top: 20px; display:none">

    </div>

<!--Calendar-->
<div class="calstyle" id="calendar" style="margin-top: 20px; display:none">

</div>



<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-8 twitter"></div>
            <div class="col-md-4 sitemap"></div>
            <div class="col-md-6 social"></div>
            <div class="col-md-6 footer-logo"></div>
        </div>
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