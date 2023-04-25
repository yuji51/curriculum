<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$tes1_answer= $_POST["tes1_answer"];
$tes2_answer= $_POST["tes2_answer"];
$tes3_answer= $_POST["tes3_answer"];
$my_name = $_POST['my_name2'];
//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
?>


<link rel="stylesheet" href="style.css">

<body>
<p>
    <!--POST通信で送られてきた名前を表示-->
    <?php  echo $my_name;?>さんの結果は・・・？</p>
<p>①の答え<br>
<?php if($tes1_answer==80){
echo '正解！！';
}else{
echo '残念！！';
}?></p>

<!--作成した関数を呼び出して結果を表示-->

<p>②の答え<br>
<?php if($tes2_answer=='HTML'){
echo '正解！！';
}else{
echo '残念！！';
}?></p>
<!--作成した関数を呼び出して結果を表示-->

<p>③の答え<br>
<?php if($tes3_answer=='select'){
echo '正解！！';
}else{
echo '残念！！';
}?></p>
<!--作成した関数を呼び出して結果を表示-->


    </form>
</body>