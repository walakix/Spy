<!DOCTYPE html>
<html lang="hu">
<head>
    <title>Spy</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Kémoldal</h1>
    <?php
	echo "Kliens: "."<br>";
	echo "IP: ".$_SERVER['REMOTE_ADDR'].":".$_SERVER['REMOTE_PORT']."<br>";
	echo "OS: ".$_SERVER['HTTP_SEC_CH_UA_PLATFORM']."<br>";
	//echo $_SERVER['REMOTE_USER']."<br>";
	echo "Böngésző: ".$_SERVER['HTTP_USER_AGENT']."<br>";
	echo "Böngésző: ".$_SERVER['HTTP_SEC_CH_UA']."<br>";
	echo "<hr>";
	echo "Szerver: "."<br>";
	echo "Név: ".$_SERVER['SERVER_NAME']."<br>";
	echo "IP: ".$_SERVER['SERVER_ADDR'].":".$_SERVER['SERVER_PORT']."<br>";
	echo "Szoftver: ".$_SERVER['SERVER_SOFTWARE']."<br>";
	echo "<hr><br>";

    ?>
 
</body>
</html>
