<?php 
$cnt = 1;
$message1 = "Fizz!";
$message2 = "Buzz!";
$message3 = "FizzBuzz!!";

while($cnt<101){

    if($cnt%3==0 && $cnt%5==0){
        echo $message3;
    }else{
        if($cnt%3==0){
            echo $message1;
        }
        else if($cnt%5==0){
            echo $message2;
        }
        else{
            echo $cnt;
        }
    }

    echo '<br>';
    $cnt ++;
}
?>