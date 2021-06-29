<?php
  require_once("config.php");
  $obj =new Bar();
  

;?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BAR MENU</title>
  <link href="style.css" rel="stylesheet">
  <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>
<body>
  <main>
    <div>
      <h1>BAR OIBO MENU</h1>

      <p>ご覧になりたいメニューカテゴリーをお選びください</p>
      <form action="" method="get">
        <select name="m_cat" id="">
          <option value="0">全て</option>
          <option value="1">ドリンク</option>
          <option value="2">前菜</option>
          <option value="3">メイン</option>
          <option value="4">パスタ</option>
          <option value="5">デザート</option>
        </select>
        <input type="submit" value="メニューを表示する">

      </form>

      <ul>
        <?php
          $m_cat = $_GET["m_cat"];
          $ress= $obj->getCat($m_cat);
        ;?>
        <?php foreach($ress as $res): ?>
        <li><?php echo $res["m_name"]; ?>
          ： <?php echo $res["m_price"];?>円</li>
        <?php endforeach; ?>
      </ul>

    </div>
    <button><a href="addmenu.php">メニュー登録ページへ</a></button>

  </main>
	<script src="script.js"></script>
  
</body>
</html>