<?php
//商品の税込価格を計算しましょう
  //①税率を定数TAXで作成しましょう。消費税は10%とします。
  define("TAX", 1.1);

  //②商品の情報を連想配列に入れましょう。
  define("pencil", 100);
  define("eraser", 150);
  define("ruler", 500);
 

  //③税率を計算する関数を用意します。
  //引数には値段を受け取り、税込価格を返答します。

//鉛筆計算結果
  function
  pencil_taxi($costp,$tax){
    $price=$costp*$tax;
    return $price;
  }
  pencil_taxi(pencil,TAX);
  
  $result1=pencil_taxi(pencil,TAX);

  //消しゴム計算結果
  function
  eraser__taxi($costp,$tax){
    $price=$costp*$tax;
    return $price;
  }
  eraser__taxi(eraser,TAX);
  
  $result2=eraser__taxi(eraser,TAX);

  //物差し計算結果
  function
  ruler__taxi($costp,$tax){
    $price=$costp*$tax;
    return $price;
  }
  ruler__taxi(ruler,TAX);
  
  $result3=ruler__taxi(ruler,TAX);
  

  $products = ["鉛筆" => $result1, "消しゴム" =>$result2 , "物差し" =>$result3];


  //④繰り返し文を使って画面に指定の文字を表示しましょう！


foreach($products as $key=>$value){
echo $key."の税込み価格は".$value."円です！！"."<br>";
}

//pencil→鉛筆の原価 //eraser→消しゴムの原価 //ruler→物差しの原価
//price→税込み価格 //costp→原価 //tax→税率 //taxi→〜の税込み
//$result1→一つ目の計算結果 //$result2→二つ目の計算結果 //$result3→三つ目の計算結果

//
?>