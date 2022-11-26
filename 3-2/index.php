<?php

// フルーツ
$fruits = ["apple" => "りんご","orange" => "みかん" , "peach" => "もも"];
// 単価
$price = ["apple" => 150,"orange"=>150,"peach"=>300];
// 個数
// $count = ["apple" => 2,"orange"=>1,"peach"=>10]; //連想配列の場合
$count = [2,1,10];
// カウント
$cnt =0;

// 計算
function cal($price,$count){

    return $price*$count;
}

// 出力
foreach($fruits as $key => $value){

    print $value."は".cal($price[$key],$count[$cnt])."円です。<br>";
    $cnt++;
}

//連想配列の場合
// foreach($fruits as $key => $value){
//     print $value."は".cal($price[$key],$count[$key])."円です。<br>"; 
// }

?>
