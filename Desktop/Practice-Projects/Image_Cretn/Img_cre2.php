<?php
$mycanvas=imagecreate($_GET['c1'],$_GET['c2']);
$clr=imagecolorallocate($mycanvas,255,255,255);
$clr1=imagecolorallocate($mycanvas,$_GET['red'],$_GET['green'],$_GET['blue']);
imagefilledellipse($mycanvas,$_GET['x1'],$_GET['x2'],$_GET['x3'],$_GET['x4'],$clr1);
header("content-type:image/png");
imagepng($mycanvas);
?>