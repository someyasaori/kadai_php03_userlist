<?php

//POSTデータを取得
$name = $_POST["name"];
$lid = $_POST["lid"];
$lpw = $_POST["lpw"];
$kanri_flg = $_POST["kanri_flg"];
$life_flg = $_POST["life_flg"];

//DB接続
try {
    $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','root');
  } catch (PDOException $e) {
    exit('DBConnectError:'.$e->getMessage());
  }

//データ登録（SQL文）
$stmt = $pdo->prepare(
    "INSERT INTO gs_user_table(id,name,lid,lpw,kanri_flg,life_flg)
    VALUES(NULL, :name, :lid, :lpw, :kanri_flg, :life_flg)"
);

//バインド変数
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':lid', $lid, PDO::PARAM_STR);
$stmt->bindValue(':lpw', $lpw, PDO::PARAM_STR);
$stmt->bindValue(':kanri_flg', $kanri_flg, PDO::PARAM_INT);
$stmt->bindValue(':life_flg', $life_flg, PDO::PARAM_INT);

//登録実行
$status = $stmt->execute();

//登録後エラー有無チェック、なければindex.phpへリダイレクト
if($status==false){
    $error = $stmt->errorInfo();
}else{header('Location: index.php');

}



?>