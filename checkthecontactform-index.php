<?php
$username=$_POST['username'];

echo $username;

$usermail=$_POST['usermail'];

echo $usermail;

$text=$_POST['text'];

echo $text;
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="teststyle.css">
<title>Document</title>
</head>
<body>
<div class="container">

<div class="block"></div>

<h2>お問い合わせ</h2>

<h2>お名前</h2>
<p><?php echo $_POST['username'];?></p>
<h2>email</h2>
<p><?php echo $_POST['usermail'];?></p>
<h2>お問合せ内容</h2>
<p><?php echo $_POST['text'];?></p>

</div>






</body>
</html>