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
    <form action="createnippo.php" method="POST">
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
      $date=$_POST['date'];
      $name=$_POST['name'];
      $task=$_POST['task'];
      if(isset($_POST['date']) && isset($_POST['name']) && isset($_POST['task'])){
        echo $date.$name.$task; 
      }
      ?>
    </form>
  </body>
</html>
