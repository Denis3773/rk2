
<html>
<head> <meta charset="utf-8"> </head>
<body>
<h1>Шувариков Денис 12var</h1>
<h2>Task1</h2>
<?php
$chislo=0;
echo"<table><tr> <td>Число</td> <td>Квадрат</td> <td>Куб</td> </tr>";
for ($chislo++)<101 do 
echo "<tr> <td>$chiclo</td> <td>$chiclo*$chislo</td> <td>$chiclo*$chislo*$chislo</td> </tr>";
echo "</table>";
?>
<h2>Task2</h2>
//V=abc; S=2ab+2ac+2ab;
<form action="index.php" method="post">
Высота: <input type="int" name="Height">
Ширина: <input type="int" name="wight">
Длина: <input type="int" name="lenght">
Нужные параметры:
<input type="checkbox" name="V"> Объём 
<input type="checkbox" name="S"> Площадь поверхности
</form>
<?php
if ($_POST(V)) {echo "Oбъём:",($_POST("Height"))*($_POST("wight"))*($_POST("lenhgt"));}
if ($_POST(S)) {echo "Площаь поверхности:", 2*($_POST("Height")*($_POST("wight")+$_POST("Height)*($_POST("lenght"))+($_POST("wight")*$_POST("lenght")))"
;?>
</body>
</html>
