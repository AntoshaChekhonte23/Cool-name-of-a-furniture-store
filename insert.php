<?php
	$connect = mysqli_connect("127.0.0.1","root","","Blog");
	$text_zaprosa_vstavit = "INSERT INTO newcategoria (adres,block,block2,img,text,bloc3) VALUES ('".$_GET["title"]."','".$_GET["block"]."','".$_GET["block2"]."','".$_GET["img"]."','".$_GET["text"]."','".$_GET["bloc3"]."')";
	$zapros_dlya_vvoda = mysqli_query($connect, $text_zaprosa_vstavit);
	header('Location: index.php');
?>