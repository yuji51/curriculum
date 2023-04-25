
<?php
//POST送信で送られてきた名前を受け取って変数を作成
$my_name = $_POST['my_name'];
?>


<?php
//①画像を参考に問題文の選択肢の配列を作成してください。
//② ①で作成した、配列から正解の選択肢の変数を作成してください
$tes1=[80,22,20,21];
$tes2=["PHP","Pyton","JAVA","HTML"];
$tes3=["join","select","insert","update"];
?>

  <link rel="stylesheet" href="style.css">
<form action="answer.php" method="post">
<input type="hidden" name="my_name2" value=<?php echo $my_name;?>>
<body>

<p>お疲れ様です<?php echo $my_name; ?>さん</p>
<!--フォームの作成 通信はPOST通信で-->
<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php 
foreach($tes1 as $value){?>
    <input type="radio" name="tes1_answer"value=<?php echo $value;?> >
    <?php echo $value;
}
?>

<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php 
foreach($tes2 as $value){?>
    <input type="radio"name="tes2_answer" value=<?php echo $value;?>>
    <?php echo $value;
}
?>
<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php 
foreach($tes3 as $value){?>
    <input type="radio"name="tes3_answer" value=<?php echo $value;?>>
    <?php echo $value;
}
?>
<br>
<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
<input type="submit" value="回答" />
</body>
</form>

