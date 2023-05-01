<?php
//商品の税込価格を計算しましょう
  //①税率を定数TAXで作成しましょう。消費税は10%とします。
  define("TAX", 1.1);

  //②商品の情報を連想配列に入れましょう。
  $products = ["鉛筆" => 100, "消しゴム" =>150, "物差し" =>500];
  //③税率を計算する関数を用意します。
  //引数には値段を受け取り、税込価格を返答します。

  function
  pencil_taxi($costp,$tax){
    $price=$costp*$tax;
    return $price;
  }
  pencil_taxi($products['鉛筆'],TAX);
  
  $result1=pencil_taxi($products['鉛筆'],TAX);


  function
  eraser_taxi($costp,$tax){
    $price=$costp*$tax;
    return $price;
  }
  eraser_taxi($products['消しゴム'],TAX);
  
  $result2=eraser_taxi($products['消しゴム'],TAX);

  function
  ruler_taxi($costp,$tax){
    $price=$costp*$tax;
    return $price;
  }
  ruler_taxi($products['物差し'],TAX);
  
  $result3=ruler_taxi($products['物差し'],TAX);
 
  $products_result = ["鉛筆" => $result1, "消しゴム" =>$result2, "物差し" =>$result3];
  
  //④繰り返し文を使って画面に指定の文字を表示しましょう！
  
foreach($products_result as $key=>$value){
echo $key."の税込み価格は".$value."円です！！"."<br>";
}


?>