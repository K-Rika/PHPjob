<?php 

require_once('db_connect.php');

if(!isset($_SESSION)){
    session_start();
}

$errorMessage = "";
$signUpMessage = "";

if (isset($_POST["signUp"])) {

    if (empty($_POST["name"])) {  
        $errorMessage = 'ユーザーIDが未入力です。';
    } else if (empty($_POST["password"])) {
        $errorMessage = 'パスワードが未入力です。';
    } 

    if (!empty($_POST["name"]) && !empty($_POST["password"])) {

        $name = $_POST["name"];
        $password = $_POST["password"];

        $dsn = sprintf('mysql: host=%s; dbname=%s; charset=utf8', PDO_DSN, DB_DATABASE);

        try {
            $pdo = new PDO($dsn, DB_USERNAME, DB_PASSWORD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

            $stmt = $pdo->prepare("INSERT INTO users(name, password) VALUES (?, ?)");

            $stmt->execute(array($name, password_hash($password, PASSWORD_DEFAULT))); 
            $userid = $pdo->lastinsertid();  // 登録した(DB側でauto_incrementした)IDを$useridに入れる

            $signUpMessage = '登録が完了しました。'; 
        } catch (PDOException $e) {
            $errorMessage = 'データベースエラー';
            // $e->getMessage() でエラー内容を参照可能（デバック時のみ表示）
            // echo $e->getMessage();
        }
    } 
}
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <h1>新規登録</h1>
    <div><?php if(isset($_POST['signUp']) && !empty($signUpMessage)){echo htmlspecialchars($signUpMessage, ENT_QUOTES); } ?></div>
    <div><?php if(isset($_POST['signUp']) && !empty($errorMessage)){echo htmlspecialchars($errorMessage, ENT_QUOTES); } ?></div>
    <form method="POST" action="">
        user:<br>
        <input type="text" name="name" id="name">
        <br>
        password:<br>
        <input type="password" name="password" id="password"><br>
        <input type="submit" value="submit" id="signUp" name="signUp">
    </form>
</body>
</html>