<html>
<head>

<meta http-equiv="content-Type"content="text/html;charset=UTF-8">
</head>
<body>
<center><font size="6">High&Lowゲーム</font></center>
<hr>
<?php

//トランプ画像を配列に加える
$cards=array("Jk.png","01.png","02.png","03.png","04.png","05.png","06.png","07.png","08.png","09.png","10.png","11.png","12.png","13.png");
$leftcard=mt_rand(0,13);
?>

<center><img src="../cards/<?php echo $cards[$leftcard];?>">
<img src="../cards/bg.png"></center><br>

<form action="highAndLowS05.php"method="POST">

<center>
High<input type="radio"name="select"value="High">
Low<input type="radio"name="select"value="Low">
</center>

<center>
<input type="submit"value="決定">
</center>

<input type="hidden"name="leftcard"value="<?php echo $leftcard;?>">

</form>
</body>
</html>

画面遷移のコード
<?php

$postData1=$_POST["leftcard"];
$postData2=$_POST["select"];

?>

<html>
<head>
<meta http-equiv="content-Type"content="text/html;charset=UTF-8">

</head>
<body>
<?php

echo "{$postData1}<br>";

echo "High/Low選択:{$postData2}";

$cards=array("Jk.png","01.png","02.png","03.png","04.png","05.png","06.png","07.png","08.png","09.png","10.png","11.png","12.png","13.png");
$rightcard=mt_rand(0,13);
?>

<img src="../cards/<?php echo $leftcard[$postData1];?>">

<img src="../cards/<?php echo $cards[$rightcard];?>">

</body>
</html>
