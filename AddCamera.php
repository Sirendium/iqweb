<!DOCTYPE html>
<html>
<head>
	<title>Add Camera</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Styles/add_camera.css">
	<link rel="stylesheet" type="text/css" href="Styles/add_camera1.css">
</head>
<body>
<div id="footer"> 
<img src="Images/menu2.png" width="50px" height="50px"><strong id ="text">SETTINGS</strong>
<img src="Images/logo_white.png" width="120px" height="50px" id="logo">
</div><br>
<div id="panel"><strong id="Glav1">Sources</strong>
<?php 
$fp = fopen('Server/ONVIF/Requst/source.txt', 'r');
echo "<br><br>";
if ($fp)
{
while (!feof($fp))
{
$mytext = fgets($fp, 999);
echo "<strong id="."glav>".$mytext."</strong>";
}
echo "<br>";
}
else echo "Ошибка при открытии файла";      
fclose($fp);
?>
</div>
<div id="camera_info"><strong>IP ADRESS</strong><input  id ="text_f"type="text" name=""><br>
<strong>USER</strong><input  id ="text_f"type="text" name=""><br>
<strong>PASSWORD</strong><input  id ="text_f"type="text" name=""><br>
<strong>PORT</strong><input  id ="text_f" type="text" name=""><br><br>
<a href="#" class="button1">ADD CAMERA</a>
</div>
</body>
</html>