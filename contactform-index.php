<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="contactform-style.css">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
<div class="block">
<h2>お問い合わせ</h2>
</div>

<!-- ↓メインを書くブロック -->
<div class="box">


<p>ご質問・お問い合わせは下記のフォームからお問い合わせ下さい。

※の付いている項目は必須項目になります。</p>

<form action="checkthecontactform-index.php" method="POST">

    <div class="box2">

    <!-- <p>お名前✴︎</p> -->
    <label for="w">お名前✴︎</label>


    </div>
    <input type="text" id="w" name="username">
    <div class="box3">

    <label for="usermail">Email✴︎</label>


    </div>

    <input type="text" id="mail" name="usermail">
    <div class="box4">

    <label for="お問い合わせ内容">お問い合わせ内容✴︎</label>

    </div>

    <!-- 全てTextにしてしまっていいのか？ -->
    <textarea name="text" id="text" cols="30" rows="10"></textarea>
    <!-- <a href="confirm.html">送信</a> -->

    <button type="submit" value="送信">メール送信</button>
</form>


</div>
    <!-- <div class="container">

        <h1>お問い合わせ</h1>

    </div>
    <form action="confirm.php" method="POST">
      <p>
      名前：<input type="text" name="name" size="40">
      </p>
      <p>
      性別：<input type="radio" name="sex" value="male">男
      <input type="radio" name="sex" value="female">女
      </p>
      <p>
        <label for="mail">E-mail:</label>
        <input type="email" id="mail" name="user_mail">
      </p>
      <p>
      ご意見、ご感想：<br>
      <textarea name="kanso" rows="4" cols="40"></textarea>
      </p>
      <p>
      <input type="submit" value="送信"><input type="reset" value="リセット">
      </p>
      </form>
 -->

</body>
</html>