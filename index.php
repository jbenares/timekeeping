<?php date_default_timezone_set('Asia/Manila'); ?>
<html>
<head>
    <meta name="description" content="QR Code scanner" />
    <meta name="keywords" content="qrcode,qr code,scanner,barcode,javascript" />
    <meta name="robots" content="index, follow"/>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>CENPRI Timekeeping Web QR</title>
    <!-- <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <link type="text/css" href="css/bootstrap-grid.min.css" rel="stylesheet"> -->
    <!-- <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet"> -->
    <!-- <link href="css/font-awesome.min.css" rel="stylesheet"> -->
    <!-- <link href="css/fonts.css" rel="stylesheet"> -->

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
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap');
        body {
            font-family: 'Figtree', Arial, sans-serif;
        }
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
/*            box-shadow: inset 0px 0px 50px 20px #921ee7*/
        }
        .backbody-success{
            width:100%;
            background-image: url(images/background3.jpg); 
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100%;
            overflow: hidden;
/*            box-shadow: inset 0px 0px 50px 20px #15af60*/
        }
        .backbody-danger{
            width:100%;
            background-image: url(images/background5.jpg); 
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100%;
            overflow: hidden;
/*            box-shadow: inset 0px 0px 50px 20px #fe3333*/
        }
        .backbody-warning{
            width:100%;
            background-image: url(images/background6.jpg); 
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100%;
            overflow: hidden;
/*            box-shadow: inset 0px 0px 50px 20px #d8c001*/
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
            font-family: Figtree;
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
            font:18px Figtree,sans-serif;
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
            /*border: solid;
            border-width: 1px 1px 1px 1px;*/
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
            border: 0px solid #fff0;

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
            border: 0px solid #fff0!important;
            box-shadow: 0px 0px 0px 0px #fff0!important;
            background: #fff0!important;
            color: #fff!important;
            outline: none;
        }

        .empno:focus{
            border: 0px solid #fff0;
            box-shadow: 0px 0px 0px 0px #fff0;
            background: #fff0;
            color: #fff;
            outline: none;
        }
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
            font-family: 'Figtree', sans-serif;
        }
        .clock{
            font-size: 200px;
            font-weight: 500;
            color: #fff;
            line-height: 200px;
            letter-spacing: -5px;
            font-family: 'Figtree', sans-serif;
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
        <!-- <div class="row">
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
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div> -->
        <div class="mt-10 absolute z-10 top-0 mx-12">
            <h2 class="m-0 leading-none text-white text-3xl font-bold uppercase">Company</h2>
            <p class="!text-base text-white ">KRONOS QR Code Scanner</p>
        </div>
        <div class="flex h-screen w-screen">
            <div class="m-auto">
                <div class="text-center">
                    <div id="clock" class="clock !text-[250px] !font-bold"> </div>   
                    <div id="date" class="date font-extrabold "> </div>
                </div>
                <div class="mt-5">
                    <form id="barcode-form" class="text-center mx-auto">
                        <input type='text' name='empno' id='empno' class='empno form-control !text-white placeholder:!text-white text-center bg-transparent !border-none ' placeholder='Scanning ... ' required='required' autofocus="" oninput="changeBack()">
                    </form>
                </div>
                <div class="flex justify-center">
                    <!-- <div class="  ">
                        <div class="flex justify-center space-x-2">
                            <span>Sample Lorem</span>
                            <span class="font-bold">10:10</span>
                        </div>
                    </div> -->
                    <div id="result" class="rounded-xl text-white w-[650px] mx-auto p-4 text-2xl !absolute !b-0"></div>
                </div>
            </div>
        </div>
    </div>
    
    <canvas id="qr-canvas" width="800" height="600"></canvas>
    <script type="text/javascript">load();</script>
</body>

</html>
