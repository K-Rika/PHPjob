<?php
require_once('pdo.php');
require('getData.php');

// セッション開始
if(!isset($_SESSION)){
    session_start();
}

// データ取得
$getData = new getData();
$users = $getData->getUserData();
$posts = $getData->getPostData();

//カテゴリー判断
function category($num){
    $result="";
    if($num==1){
        $result = '食事';
    }else if($num==2){
        $result = '旅行';
    }else if($num==3){
        $result = 'その他';
    }
    return $result;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>4章チェックテスト</title>
</head>
<body>
    <div class ="header">
        <img src="img/logo.png" class="pic">
        <div class="loginUser">ようこそ <?php echo $users["last_name"].$users["first_name"];?> さん</div>
        <div class="loginTime">最終ログイン日：<?php echo $users["last_login"];?></div>
    </div>
    <div class ="main">
        <table>
            <tr><th>記事ID</th><th>タイトル</th><th>カテゴリ</th><th>本文</th><th>投稿日</th></tr>
            <?php while($post = $posts->fetch()){
                echo '<tr>';
                echo '<td>'.$post['id'].'</td>';
                echo '<td>'.$post['title'].'</td>';
                echo '<td>'.category($post['category_no']).'</td>';
                echo '<td>'.$post['comment'].'</td>';
                echo '<td>'.$post['created'].'</td>';
                echo '</tr>';
            }?>  
        </table>
    </div>
    <div class ="footer">
        Y&I group.inc
    </div>
</body>
</html>
