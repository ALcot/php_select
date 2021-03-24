<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
  <link href="css/style.css?v=2" rel="stylesheet">
</head>
<body>



    <div class="title">
    <img src="img/zukan.png"alt="どうぶつずかん　タイトル">
    </div>



<form method="post" action="insert.php">
  <div class="box">
   <fieldset>
    <legend>どうぶつをきろくする</legend>
     <label>どうぶつのなまえ<br/><input type="text" name="name"></label><br>
     <label>どうぶつのしゅるい<br/><input type="text" name="category"></label><br>
     <label>どんなどうぶつ？<br/><textArea name="naiyou" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="送信"><br/><br/>
     <input type="reset" value="リセット">
    </fieldset>
  </div>
</form>

<div class="ok">
<a class="button" href="select.php">どうぶつをかくにんする</a>
</div>

</body>
</html>
