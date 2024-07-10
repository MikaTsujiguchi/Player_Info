<?php
//１．PHP
//select.phpのPHPコードをマルっとコピーしてきます。
//※SQLとデータ取得の箇所を修正します。
//【重要】
//insert.phpを修正（関数化）してからselect.phpを開く！！

$id = $_GET["id"];

include("funcs.php");
$pdo = db_conn();

//２．データ登録SQL作成
$sql = "SELECT * FROM gs_an_table WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

//３．データ表示
$values = "";
if($status==false) {
  sql_error($stmt);
}

//全データ取得
$v =  $stmt->fetch(); //PDO::FETCH_ASSOC[カラム名のみで取得できるモード]
// $json = json_encode($values,JSON_UNESCAPED_UNICODE);





?>
<!--
２．HTML
以下にindex.phpのHTMLをまるっと貼り付ける！
理由：入力項目は「登録/更新」はほぼ同じになるからです。
※form要素 input type="hidden" name="id" を１項目追加（非表示項目）
※form要素 action="update.php"に変更
※input要素 value="ここに変数埋め込み"
-->

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>UPDATE</title>
  <link href="css/style.css" rel="stylesheet">
</head>
<body>

<!-- Head[Start] -->

<!-- Head[End] -->

<!-- Main[Start] -->
<form method="POST" action="update.php">
  <div class="jumbotron">
  <a class="navbar-brand" href="select.php">Go Back To List</a>
    <p>UPDATE</p>
     <label>Name：<input type="text" name="name" value="<?=$v["name"]?>"></label><br>
     <label>Email：<input type="text" name="email" value="<?=$v["email"]?>"></label><br>
     <label>Age：<input type="text" name="age" value="<?=$v["age"]?>"></label><br>
     <p>Comment</p>
     <label><textArea name="naiyou" rows="4" cols="40"><?=$v["naiyou"]?></textArea></label><br>
     <input type="hidden" name="id" value="<?=$v["id"]?>">
     <input type="submit" value="送信">

  </div>
</form>
<!-- Main[End] -->


</body>
</html>


