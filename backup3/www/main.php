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

    <!--notes
    <script type="text/javascript" src="src/jquery-1.js"></script>
    <script type="text/javascript" src="src/jquery-ui-1.js"></script>-->
    <script type="text/javascript" src="src/script.js"></script>
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
                        id: 999,
                        title: 'Test Event',
                        start: new Date(y, m, d, 12, 0),
                        end: new Date(y, m, d, 14, 0),
                        allDay: false
                    },
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
    <div id="notes" class="container" style="margin-top: 20px; display:none;">
        <button type="button" class="btn" onclick="addNote();">
           Add note
        </button>
        <input type="text" id="note-text"/>&nbsp;&nbsp;
        <button type="button" class="btn" id="edit-btn-note" style="display:none;" onclick="editNoteApply();">
            Edit note
        </button>
        &nbsp;&nbsp;
        <block id="color-notes" style="display:none;">
            <img  id="edit-clr-1" src="./images/clr1.png" style="width:16px;" onclick="editNoteColor('edit-clr-1');"/>
            &nbsp;&nbsp;
            <img id="edit-clr-2" src="./images/clr2.png" style="width:16px;" onclick="editNoteColor('edit-clr-2');"/>
            &nbsp;&nbsp
            <img id="edit-clr-3" src="./images/clr3.png" style="width:16px;" onclick="editNoteColor('edit-clr-3');"/>
            &nbsp;&nbsp
            <img id="edit-clr-4" src="./images/clr4.png" style="width:16px;" onclick="editNoteColor('edit-clr-4');"/>
            &nbsp;&nbsp
            <img id="edit-clr-5" src="./images/clr5.png" style="width:16px;" onclick="editNoteColor('edit-clr-5');"/>
        </block>
        <br>
        <br>
        <div id="notes-container" class="well" style="height:400px;">
        </div>
    </div>

<!--Calendar-->
<div class="calstyle" id="calendar" style="margin-top: 20px; display:block">

</div>

<!--Help-->
<div class="container" id="help" style="margin-top: 20px; display:none">
Only self-help!
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
                <a href="/"><img src="./images/PRO13.png" width="82px" height="25px"></a>
                <p>
                    Copyright © 2014 PRO13. A <a href="http://vk.com/pro13group">PRO13</a> creation
                </p>
            </td>
            </tr>
        </table>
    </div>
</footer>


<script type="text/javascript">
    var count = 0;
    var id_count_note = 0;
    var cuurent_id_note;
    var cuurent_id_color = '#fabfb8';
    function addNote(){
        a = document.getElementById('note-text').value.replace(/^\s+|\s+$/g, '');
        if(a != ''){
            document.getElementById('note-text').value = '';
           // 1 (9)
            a = '<div id="les10_ex3'+id_count_note+'" class="well" style="position:relative; float:left; background-color:'+ cuurent_id_color+';"><img src="./images/1 (8).png" style="width:16px;" onclick="editNote(\'les10_ex3'+id_count_note+'\');"/>&nbsp;&nbsp;&nbsp;<img src="./images/1 (9).png" style="width:16px;" onclick="removeNote(\'les10_ex3'+id_count_note+'\');"/><br>'+a+'</div>';
            $( "#notes-container" ).append(a);
                $("#les10_ex3"+id_count_note).draggable({
                    containment:'parent'
                });


                $("#les10_ex3"+id_count_note).mousedown(function() {
                    count++;
                    document.getElementById($( this ).attr('id')).style.zIndex = count;
                });
            id_count_note++;
        }
    }

    function editNoteColor(value){

        if(value == 'edit-clr-1'){
            cuurent_id_color = '#fabfb8';
            document.getElementById(cuurent_id_note).style.backgroundColor = '#fabfb8';
        }
        if(value == 'edit-clr-2'){
            cuurent_id_color ='#b8d2fa';
            document.getElementById(cuurent_id_note).style.backgroundColor = '#b8d2fa';
        }
        if(value == 'edit-clr-3'){
            cuurent_id_color = '#d0fcea';
            document.getElementById(cuurent_id_note).style.backgroundColor = '#d0fcea';
        }
        if(value == 'edit-clr-4'){
            cuurent_id_color =  '#fae0b8';
            document.getElementById(cuurent_id_note).style.backgroundColor = '#fae0b8';
        }
        if(value == 'edit-clr-5'){
            cuurent_id_color = '#d4d0fc';
            document.getElementById(cuurent_id_note).style.backgroundColor = '#d4d0fc';
        }
    }
    function editNote(value){
        document.getElementById('edit-btn-note').style.display = '';
        document.getElementById('color-notes').style.display = '';

        document.getElementById('note-text').value =  $("#"+value).text().replace(/^\s+|\s+$/g, '');
        cuurent_id_note = value;
    }

    function removeNote(value){
        $("#"+value).remove();
    }
    function editNoteApply(){

        $("#"+cuurent_id_note).remove();
        addNote();
        document.getElementById('edit-btn-note').style.display = 'none';
        document.getElementById('color-notes').style.display = 'none';
    }

    function oc_usr_menu1() {
        document.getElementById('home').style.display = 'block';
        document.getElementById('notes').style.display = 'none';
        document.getElementById('calendar').style.display = 'none';
        document.getElementById('help').style.display = 'none';
        document.getElementById('about').style.display = 'none';
    }


    function oc_usr_menu2() {
        document.getElementById('home').style.display = 'none';
        document.getElementById('notes').style.display = 'block';
        document.getElementById('calendar').style.display = 'none';
        document.getElementById('help').style.display = 'none';
        document.getElementById('about').style.display = 'none';
    }


    function oc_usr_menu3() {
        document.getElementById('home').style.display = 'none';
        document.getElementById('notes').style.display = 'none';
        document.getElementById('calendar').style.display = 'block';
        document.getElementById('help').style.display = 'none';
        document.getElementById('about').style.display = 'none';
    }


    function oc_usr_menu4() {
        document.getElementById('home').style.display = 'none';
        document.getElementById('notes').style.display = 'none';
        document.getElementById('calendar').style.display = 'none';
        document.getElementById('help').style.display = 'block';
        document.getElementById('about').style.display = 'none';
    }

    
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