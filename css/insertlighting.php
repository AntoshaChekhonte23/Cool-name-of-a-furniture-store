<?php
	$connect = mysqli_connect("127.0.0.1","root","","Blog");
	$text_zaprosa_vstavit = "INSERT INTO Lightingcategoria (img,text1,text2,block1,block2) VALUES ('".$_GET["img"]."','".$_GET["text1"]."','".$_GET["text2"]."','".$_GET["block1"]."','".$_GET["block2"]."')";
	$zapros_dlya_vvoda = mysqli_query($connect, $text_zaprosa_vstavit);
	header('Location: lighting.php');
?>