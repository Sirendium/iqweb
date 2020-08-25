<!DOCTYPE html>
<html>
<head>
	<title>Live View</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Styles/live1.css">
	<script src="AC_RunActiveContent.js" language="javascript"></script>	
    <!-- Framework CSS -->
	<link rel="stylesheet" href="Styles/screen.css" type="text/css" media="screen, projection">
	<link rel="stylesheet" href="Styles/wowza.css" type="text/css" />
		<link rel="stylesheet" href="Styles/bacground-gray.css" type="text/css" />
</head>
<body>
<div id="Top">
<img src="Images/menu1.png" width="50px" height="50px"><strong id="Text">LIVE VIEW</strong>
<img id="grid_1" src="Images/grid1.png" width="50px" height="50px">
<img id="grid_2" src="Images/grid2.png" width="50px" height="50px">
<img id="grid_3" src="Images/grid3.png" width="50px" height="50px">
<img id="grid_4" src="Images/grid4.png" width="50px" height="50px">
</div>
<div id="Top_2">
<img src="Images/alarms.png "width="50px" height="50px"><strong id ="Text">ALARMS</strong>
<img  id="logo_t" src="Images/logo_white.png" width="130px" height="30px">
</div>
<br><br><br><br>
<div id="Box">
	<div class="span-16">
			<!--video width="636" height="357" controls>
            	<source src="http://localhost:1935/vod/mp4:Sample.mp4/playlist.m3u8" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
            </video-->  
            <script language="javascript">
                if (AC_FL_RunContent == 0) {
                    alert("This page requires AC_RunActiveContent.js.");
                } else {
                    AC_FL_RunContent(
                                     'codebase', 'http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0',
                                     'width', '636',
                                     'height', '450',
                                     'src', 'live',
                                     'quality', 'high',
                                     'pluginspage', 'http://www.macromedia.com/go/getflashplayer',
                                     'align', 'middle',
                                     'play', 'true',
                                     'loop', 'true',
                                     'scale', 'showall',
                                     'wmode', 'window',
                                     'devicefont', 'false',
                                     'id', 'live',
                                     'bgcolor', '#000000',
                                     'name', 'live',
                                     'menu', 'true',
                                     'allowFullScreen', 'true',
                                     'allowScriptAccess','sameDomain',
                                     'movie', 'live',
                                     'salign', ''
                                     ); //end AC code
                }
                </script>
            <noscript>
                <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" width="636" height="450" id="live" align="middle">
                    <param name="allowScriptAccess" value="sameDomain" />
                    <param name="allowFullScreen" value="true" />
                    <param name="movie" value="live.swf" /><param name="quality" value="high" /><param name="bgcolor" value="#000000" />	<embed src="live.swf" quality="high" bgcolor="#000000" width="636" height="450" name="live" align="middle" allowScriptAccess="sameDomain" allowFullScreen="true" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
                </object>
            </noscript>
		</div>

</div>
<div id="Box_1">
<p id="box_size_height_1"></p>
</div><br><br>
<div id="bottom_s">
<img src="Images/image.png" width="50px" height="50px">
<img src="Images/status.png" width="50px" height="50px">
<img src="Images/Logs.png" width="50px" height="50px">
</div>


</body>
</html>