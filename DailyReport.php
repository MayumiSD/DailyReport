<!DOCTYPE html>
<html lang="jp" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="日報">
    <title>日報入力システム</title>
    <link rel="stylesheet" href="./nippostylesheet.css">
   </head>

  <body>
    <h1>日報入力システム</h1>
    <form action="DailyReport.php" method="POST">
      <dl>
        <dt>日付:</dt>
        <dd><input type="text" class="formTextComponents" name="date" value=""></dd>
        <dt>名前:</dt>
        <dd><input type="text" class="formTextComponents" name="name" value=""></dd>
        <dt>作業内容:</dt>
        <dd><textarea class="formTextComponents" rows="3" name="task" value=""></textarea></dd>
        <dt>連絡事項:</dt>
        <dd><textarea class="formTextComponents" rows="3" name="memo" value=""></textarea></dd>
        <dt></dt>
        <dd><input type="submit" class="formSubmitButton" name="submitButton" value="作成ボタン"></dd>
      </dl>
      
      <?php

      if(empty($_POST['date'])){
         $dateErr="日付\n";
      }
      else {
        $date=$_POST['date'];
      }

      if(empty($_POST['name'])){
          $nameErr="名前\n";
         }
      else{
        $name=$_POST['name'];
      }

      if(empty($_POST['task'])){
        $taskErr="作業内容\n"; 
        }
      else{
        $task=$_POST['task'];
      }

      if(isset($_POST['memo'])){
        $memo=$_POST['memo'];
      }

      if(empty($_POST['date']) || empty($_POST['name']) || empty($_POST['task'])){
        echo $dateErr.$nameErr.$taskErr."を入力ください";
      }  
      else{
        $str="$date\n.$name\n.$task\n.$memo\n"; 
        $str= nl2br($str);
        echo $str;
      }

      ?>
    </form>
  </body>
</html>
