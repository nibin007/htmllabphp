<html>
<head>
<title>CRICKET PLAYERS</title>
</head>
<body>
<table border="1"align="center">
<tr>
<th>Player Names</th>
</tr>
<?php
 $players=array("saka","Martinelli","YUVRAJ","BretLee","BUMRAH");
 $len=count($players);
for($x=0;$x<$len;$x++)
{
  echo "<tr><td>".$players[$x]."</td></tr>";
}
?>
</table>
</body>
</html>