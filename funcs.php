<?php

//XSS対策
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES);
}

//DB接続関数。内容をReturn。DB nameを毎回修正要
function db_conn(){
    try {
        $db_name = "gs_db";    //データベース名
        $db_id   = "root";      //アカウント名
        $db_pw   = "root";      //パスワード：XAMPPはパスワード無しに修正してください。
        $db_host = "localhost"; //DBホスト
        $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
    return $pdo; //一行追記 
    } catch (PDOException $e) {
      exit('DBConnectError:'.$e->getMessage());
      }

}

//SQLエラー関数
function sql_error($stmt){
    $error = $stmt->errorInfo();
    exit("SQLError:" . print_r($error, true));
}

//リダイレクト関数
function redirect($file_name){
    header("Location: ".$file_name);//「 .」は次に処理が続くの意味 
    exit();
}

?>