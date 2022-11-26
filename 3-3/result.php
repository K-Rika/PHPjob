<?php

// 入力した数字の配列
$number = str_split($_POST['number']);
// 入力日付
$date = date("Y/m/d",time());
// 運勢
$result = "";
// ランダムに抽出した数字
$key = array_rand($number);

// 数字確認用
// var_dump($number);
// echo '<br>';
// echo $key;

switch($number[$key]){
    case 0:
        $result = "凶";
        break;
    case 1:
    case 2:
    case 3:
        $result = "小吉";
        break;
    case 4:
    case 5:
    case 6:
        $result = "中吉";
        break;    
    case 7:
    case 8:
        $result = "吉";
        break;
    case 9:
        $result = "大吉";
        break;
}


?>
    <p><?php echo $date; ?>の運勢は</p>
    <p>選ばれた数字は<?php echo $number[$key]; ?></p>
    <p><?php echo $result; ?></p> 

