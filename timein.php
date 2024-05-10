<?php date_default_timezone_set('Asia/Manila'); ?>
<html>
<head>
    <meta name="description" content="QR Code scanner" />
    <meta name="keywords" content="qrcode,qr code,scanner,barcode,javascript" />
    <meta name="robots" content="index, follow"/>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>CENPRI Timekeeping Web QR</title>
    <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
    <!-- <link type="text/css" href="css/bootstrap-grid.min.css" rel="stylesheet"> -->
    <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/fonts.css" rel="stylesheet">
    <script>
        function changeBack(){
            $("body").removeClass("backbody");
            $("body").addClass("backbody-purple");
        }
        var d = new Date(<?php echo time() * 1000 ?>);
        function digitalClock() {
            var today = new Date();
            
            const ye = new Intl.DateTimeFormat('en', { year: 'numeric' }).format(today)
            const mo = new Intl.DateTimeFormat('en', { month: 'long' }).format(today)
            const da = new Intl.DateTimeFormat('en', { day: '2-digit' }).format(today)

            var date = mo+' '+da+', '+ye;

            d.setTime(d.getTime() + 1000);
            var hrs = d.getHours();
            var mins = d.getMinutes();
            var secs = d.getSeconds();
            mins = (mins < 10 ? "0" : "") + mins;
            secs = (secs < 10 ? "0" : "") + secs;
            // var apm = (hrs < 12) ? "AM" : "PM";
            // hrs = (hrs > 12) ? hrs - 12 : hrs;
            // hrs = (hrs == 0) ? 12 : hrs;
            var ctime = hrs + ":" + mins + ":" + secs;
            document.getElementById("clock").firstChild.nodeValue = ctime;
            document.getElementById("date").firstChild.nodeValue = date;
        }
        window.onload = function() {
          digitalClock();
          setInterval('digitalClock()', 1000);
        }
    </script>
    <style type="text/css">
        .backbody{
            width:100%;
            background-image: url(images/background1.jpg); 
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100%;
            overflow: hidden;
        }
        .backbody-purple{
            width:100%;
            background-image: url(images/background4.jpg); 
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100%;
            overflow: hidden;
            box-shadow: inset 0px 0px 50px 20px #921ee7
        }
        .backbody-success{
            width:100%;
            background-image: url(images/background3.jpg); 
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100%;
            overflow: hidden;
            box-shadow: inset 0px 0px 50px 20px #15af60
        }
        .backbody-danger{
            width:100%;
            background-image: url(images/background5.jpg); 
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100%;
            overflow: hidden;
            box-shadow: inset 0px 0px 50px 20px #fe3333
        }
        .backbody-warning{
            width:100%;
            background-image: url(images/background6.jpg); 
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100%;
            overflow: hidden;
            box-shadow: inset 0px 0px 50px 20px #d8c001
        }
        .backbody-dark{
            width:100%;
            background-image: url(images/background7.jpg); 
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100%;
            overflow: hidden;
        }
        img{
            border:0;
        }
        #main{
            margin: 15px auto;
            background:white;
            overflow: auto;
            width: 100%;
            font-family: arial;
        }
        #header{
            background:white;
            margin-bottom:15px;
        }
        #mainbody{
            background: white;
            width:100%;
            display:none;
        }
        #footer{
            background:white;
        }
        #v{
            width:320px;
            height:240px;
        }
        #qr-canvas{
            display:none;
        }
        #qrfile{
            width:320px;
            height:240px;
        }
        #mp1{
            text-align:center;
            font-size:35px;
        }
        #imghelp{
            position:relative;
            left:0px;
            top:-160px;
            z-index:100;
            font:18px arial,sans-serif;
            background:#f0f0f0;
            margin-left:35px;
            margin-right:35px;
            padding-top:10px;
            padding-bottom:10px;
            border-radius:20px;
        }
        .selector{
            margin:0;
            padding:0;
            cursor:pointer;
            margin-bottom:-5px;
        }
        #outdiv
        {
            width:320px;
            height:240px;
            border: solid;
            border-width: 3px 3px 3px 3px;
        }
        .result{
            border: solid;
            border-width: 1px 1px 1px 1px;
            padding:5px;
            width:70%;
            font-size: 30px;
            background: #ffffff36;
            border-radius: 10px;
            color: #fff;
            text-align: center;
            text-transform: uppercase;
            font-weight: 600;
        }


        ul{
            margin-bottom:0;
            margin-right:40px;
        }
        li{
            display:inline;
            padding-right: 0.5em;
            padding-left: 0.5em;
            font-weight: bold;
            border-right: 1px solid #333333;
        }
        li a{
            text-decoration: none;
            color: black;
        }


        #footer a{
            color: black;
        }
        .tsel{
            padding:0;
        }

        .empno{
            padding:15px;
            border-radius: 5px;
            width:50%;
            text-align: center;
            height: 10px;
            background: #fff0;
            color: #fff!important;
            border: 1px solid #fff0;

        }
        .empno:disabled{
            padding:15px;
            border-radius: 5px;
            width:50%;
            text-align: center;
            height: 10px;
            background: #fff0;
            color: #fff!important;
            border: 1px solid #fff0;

        }
        .empno:focus-visible{
            border: 1px solid #fff0;
            box-shadow: 0px 0px 0px 0px #fff0;
            background: #fff0;
            color: #fff;
        }
        ::placeholder {
          color: #fff!important;
        }
        .log {
          padding: 5px 10px;
          font-size: 24px;
          text-align: center;
          cursor: pointer;
          outline: none;
          color: #fff;
          background-color: #04AA6D;
          border: none;
          border-radius: 15px;
          box-shadow: 0 8px #999;
          width:300px;
        }

        .log:hover {background-color: #3e8e41}

        .log:active {
          background-color: #3e8e41;
          box-shadow: 0 5px #666;
          transform: translateY(4px);
        }
        .date{
            font-size: 45px;
            color: #fff;
            font-weight: 500;
            text-transform: uppercase;
            /*letter-spacing: 10px;*/
            font-family: 'Oswald', sans-serif;
        }
        .clock{
            font-size: 200px;
            font-weight: 500;
            color: #fff;
            line-height: 200px;
            letter-spacing: -5px;
            font-family: 'Oswald', sans-serif;
        }
    </style>
    <script type="text/javascript" src="scripts/jquery.min.js"></script> 
    <script type="text/javascript" src="scripts/llqrcode.js"></script>
    <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
    <script type="text/javascript" src="scripts/webqr.js"></script>
    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-24451557-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

        $(document).ready(function(){
            $('#barcode-form').on('submit', function (e) {
               e.preventDefault();
               read();
            });
        });
    </script>
</head>
<?php
if(isset($_POST['timein'])){

} ?>
<body class="backbody">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div style="padding-top:50px">
                    <h2 class="text-white"style="margin-bottom:0px;line-height: 20px;">COMPANY</h2>
                    <p class="text-white">QR Code Scanner</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <center>
                    <div style="padding-top: 100px;"></div>
                    <div id="clock" class="clock"> </div>
                    <div id="date" class="date"> </div>
                </center>   
            </div>
        </div>
        <br><br><br>
        <div class="row">
            <div class="col-lg-12">
                <div class="mainbody">
                    <form id="barcode-form">
                        <table class="tsel" border="0" width="100%">
                            <tr>
                                <td align="center" width="50%">
                                    <input type='text' name='empno' id='empno' class='empno form-control' placeholder='Employee Number' required='required' autofocus="" oninput="changeBack()">
                                    <div id="result" class=""></div>
                                    <!-- <div  class="result">100-FLOR JASon asdlkhaksjdhkasgh</div> -->
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
        <!-- 
        <div class="row">
            <div class="col-lg-6">
                <div style="position:relative;top:+20px;left:0px;"><g:plusone size="medium"></g:plusone></div>
                <div style="margin-top: 80px"></div>
                <center>
                    <h1 class="text-white" style="font-size: 100px">CENPRI</h1>
                    <p class="text-white" id="mp1" style="line-height: 10px">
                     QR Code Scanner
                    </p>
                    <br>
                    
                  
                    <div id='msg'></div>    
                    <ul></ul> 
                </center>  
            </div>
            <div class="col-lg-6">
                <div id="mainbody">
                    <form id="barcode-form">
                    <table class="tsel" border="0" width="100%">
                        <tr>
                            <td valign="top" align="center" width="50%">
                                <table class="tsel" border="0">
                                    <tr>
                                        <td><br><br><br><br><br><br></td>
                                    </tr>
                                    <tr>
                                        <td >
                                        <input type='text' name='empno' id='empno' class='empno' placeholder='Employee Number' required='required' autofocus="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td >
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" align="center">
                                <span class="fa fa-caret-down"></span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" align="center">
                                <div id="result"></div>
                            </td>
                        </tr>
                    </table>
                </form>
                </div>
            </div>
        </div> -->
    </div>
    
    <canvas id="qr-canvas" width="800" height="600"></canvas>
    <script type="text/javascript">load();</script>
</body>

</html>
