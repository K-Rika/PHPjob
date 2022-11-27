<?php
// 名前
$myName = $_POST["myName"];
// Q1回答群
$answer1 = [80,22,20,21];
// Q2回答群
$answer2 = ["PHP","Python","Java","HTML"];
// Q3回答群
$answer3 = ["join","select","insert","update"];
// Q1～3回答
$answer = [80,"HTML","select"];
?>

<!-- 画面表示部分 -->
<link rel="stylesheet" href="css/style.css">
<form action="answer.php" method="post">
    <p>お疲れ様です<?php echo $myName ?>さん</p>
    <input type="hidden" name="myName" value= "<?php echo $myName ?>" >

    <h2>①ネットワークのポート番号は何番？</h2>
    <?php foreach($answer1 as $index => $value){ ?>
        <input type = "radio" name="Q1" value= <?php echo $value; ?> 
        <?php if($index == 0){ ?> checked <?php } ?> >
    <?php echo $value; } ?>
    
    <h2>②Webページを作成するための言語は？</h2>
    <?php foreach($answer2 as $index => $value){ ?>
        <input type = "radio" name="Q2" value= <?php echo $value; ?>
        <?php if($index == 0){ ?> checked <?php } ?> >
    <?php echo $value; } ?>

    <h2>③MySQLで情報を取得するためのコマンドは？</h2>
    <?php foreach($answer3 as $index => $value){ ?>
        <input type = "radio" name="Q3" value= <?php echo $value; ?>
        <?php if($index == 0){ ?> checked <?php } ?> >
    <?php echo $value; } ?>

    <!-- 回答 -->
    <?php foreach($answer as $index => $value){ ?>
        <input type="hidden" name="answer<?php echo $index; ?>" value= <?php echo $value; ?> >
    <?php } ?>
    
    <p><input type="submit" value="回答する"></p>
</form>