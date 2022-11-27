<?php 

// 名前
$myName = $_POST["myName"];
// 選択した回答
$choose = array("Q1" => $_POST["Q1"],"Q2" => $_POST["Q2"],"Q3" => $_POST["Q3"]);
// 正答
$answer = array("Q1" => $_POST["answer0"],"Q2" => $_POST["answer1"],"Q3" => $_POST["answer2"]);

// 正答チェック
function Get_Answer($value1,$value2){
    if($value1 == $value2){
        echo "正解！";
    }else{
        echo "残念・・・";
    }
}

?>

<!-- 画面表示部分 -->
<link rel="stylesheet" href="css/style.css">
<p><?php echo $myName ?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php Get_Answer($choose["Q1"],$answer["Q1"]); ?>
<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php Get_Answer($choose["Q2"],$answer["Q2"]); ?>
<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php Get_Answer($choose["Q3"],$answer["Q3"]); ?>