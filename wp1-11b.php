<?php
define("MAX", 50);
define("MIN", 10);
$i = rand(MIN,MAX);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

for ($ii=1; $ii <= $i; $ii+= 1) {
echo '<img src="obrazky/mimon.jpg" width="60" height="100">';
}
?>
</body>
</html>