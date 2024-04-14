<?php
//XSS対応（ echoする場所で使用！それ以外はNG ）
function h($str){
    return htmlspecialchars($str, ENT_QUOTES);
}

//DB接続関数：db_conn() 
function db_conn(){
    try {
      // $db_name = "gs_db3"; //データベース名
      // $db_id   = "root";       //アカウント名
      // $db_pw   = "";           //パスワード：XAMPPはパスワード無し or MAMPはパスワード”root”に修正してください。
      // $db_host = "localhost";  //DBホスト
      $db_name = "gsacademy04_bridgeheart"; //データベース名
      $db_id   = "gsacademy04";       //アカウント名
      $db_pw   = "Ikyuuuri962";           //パスワード：XAMPPはパスワード無し or MAMPはパスワード”root”に修正してください。
      $db_host = "mysql647.db.sakura.ne.jp";  //DBホスト
      return new PDO('mysql:dbname='.$db_name.';charset=utf8;host='.$db_host, $db_id, $db_pw);
    } catch (PDOException $e) {
      exit('DB_CONNECT_ERROR:'.$e->getMessage());//exitはバチっとここで止めてしまう
    }
  }
  
  //SQLエラー関数：sql_error($stmt)
  function sql_error($stmt){ 
    $error = $stmt->errorInfo(); 
    exit("SQL_ERROR:".$error[2]);
  }
  
  //リダイレクト関数: redirect($file_name)
  function redirect($file_name){
    header("Location: ".$file_name);
    exit();
  }
  
  ?>
