<?php
//1.  DB接続します
try {
  //ID MAMP ='root'
  //Password:MAMP='root',XAMPP=''
  $pdo = new PDO('mysql:dbname=gs_kadai_db;charset=utf8;host=localhost','root','root');
} catch (PDOException $e) {
  exit('DBConnectError:'.$e->getMessage());
}

//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table");
$status = $stmt->execute();

//３．データ表示
$view="";
if ($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
  //Selectデータの数だけ自動でループしてくれる
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php

  // 講義のやつ
  // while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
  //   $view .="<p>";
  //   $view .= $result['indate'].','. $result['name'].','.$result['url'].','.$result['text'];
  //   $view .="</p>";
  // }

// JSONにチャレンジ

    while( $result[]= $stmt->fetch(PDO::FETCH_ASSOC));
    
      $json = json_encode($result);

}
?>

<script>
const data = JSON.parse('<?=$json?>'); 
console.log(data); //配列値の確認
</script>
 


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>本のブックマーク一覧</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php">＞データ登録に戻る＜</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <div>
    <table border="1"  id="tablee" width="80%">
    <tr>
            <th>回答日時</th>
            <th>書籍名</th>
            <th>URL</th> 
            <th>コメント</th>

        </tr>
        <tr ></tr>
        </table>
        </div>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>

<script>
for (let i = 0; i < data.length-1; i++) {
  $('#tablee').append('<tr><td>' + data[i].indate + '</td><td>' + data[i].name + 
  '</td><td>' + data[i].url + '</td><td>' + data[i].text + '</td></tr>');
  console.log(data[i].indate)
 }
</script>
</div>
<!-- Main[End] -->

</body>
</html>
