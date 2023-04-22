<?php

  //②フォームからのデータを受け取ります
$like_name = $_POST["like_name"];
$like_number = $_POST["like_number"];

  //③受け取った数字に1~6までのランダムな数字を掛け合わせて
  //変数に入れてください
$random=rand(1,6);
$random_number=$random*$like_number;

  //⑤今日の日付と、名前、番号、おみくじ結果を表示しましょう
  $today = date("Y-m-d H:i:s");
print_r($today);
?>

<p>名前は<?php echo $like_name; ?> です。</p>
<p>番号は<?php echo $random_number; ?> です。</p>
<p>結果は<?php if($random_number <= 10){
     echo "凶";
    }elseif($random_number>= 11 && $random_number <= 15){
      echo"小吉";
    }elseif($random_number>= 16 && $random_number <= 20){
        echo"中吉";
    }elseif($random_number>= 21 && $random_number <= 25){
        echo"吉";
    }elseif($random_number>= 26 && $random_number <= 36){
        echo"大吉";
    }else{
        echo"残念"; 
    }?> です。</p>