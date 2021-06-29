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
    <div class="add_list">

      <div>
        <h1>BAR OIBO MENU</h1>
        

        <p>メニュー登録</p>
        <form action="" method="post">
          <p>カテゴリー：<input type="number" name="m_cat" id=""></p>
          <p>メニュー名：<input type="text" name="m_name" id=""></p>
          <p>値段：<input type="number" name="m_price" id="">円</p>
          <input  id="add_menu" type="submit" value="登録する">
          
        </form>
         <button id="add_menu"><a href="menu.php">メニュー一覧ページへ</a></button>

         <div id="add_result"></div>
      </div>

      
      <div id="content">
      </div>
    </div>

   

  </main>
	<script src="script.js"></script>
  
</body>
</html>