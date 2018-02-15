<?php




// DBに接続
  require('dbconnect.php');

//var_dump($_GET);
if(isset($_GET) && !empty($_GET["userID"]) && !empty($_GET["userName"]) && !empty($_GET["userEmail"]))
{
   $nick_name = $_GET['userName'];
   $email = $_GET['userEmail'];
   $password = $_GET['userID'];
    
     try {
         $sql = "SELECT COUNT(*) as `cnt` FROM `whereis_members` WHERE `email`=?";
         
         //$sql = "SELECT COUNT(*) as `cnt` FROM `whereis_members` WHERE `email`=?";
         
         //sql文実行
 $data = array($_GET["userEmail"]);
         
 $stmt = $dbh->prepare($sql);
 $stmt->execute($data);

 //件数とる
 $count = $stmt->fetch(PDO::FETCH_ASSOC);
         
         
         if ($count['cnt'] > 0) {
  //重複エラー
           header('Location: json_map.html');
           exit();
 }else{
         
         
  // DBに会員情報を登録するSQL文を作成
  // now() MYSQLが用意している関数。現在日時を取得できる
        $sql = "INSERT INTO `whereis_members` (`nick_name`, `email`, `password`, `created`, `modified`) VALUES (?,?,?,now(),now()) ";

  // SQL文実行
  // sha1 暗号化を行う関数
        $data = array($nick_name,$email,sha1($password));
        $stmt = $dbh->prepare($sql);
        $stmt->execute($data);

  // $_SESSIONの情報を削除
  // // unset 指定した変数を削除するという意味。SESSIONじゃなくても使える
  //       unset($_POST["join"]);

  // ログインページへ遷移
       header('Location: json_map.html');
        exit();
         }

      } catch (Exception $e) {
        // tryで囲まれた処理でエラーが発生したときにやりたい処理を記述
        
        echo 'SQL実行エラー:' . $e->getMessage();
        exit();

      }
    
    
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>firebase with mysql</title>
</head>
<body>
    
</body>
</html>