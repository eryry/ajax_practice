<?php

require_once("config.php");
$obj =new Bar();

try{
  // 'menus' テーブルのデータをカテゴリー順で取得する
  $sql = 'select * from menus ORDER BY m_cat ASC';
  $stmt = $obj->pdo->query($sql);

  // 取得したデータを配列に格納
  while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    $menus[] = array(
      'm_cat'=> $row["m_cat"],
      'm_name' => $row["m_name"],
      'm_price' => $row["m_price"]
      );
  }

  // JSON形式で出力する
  header('Content-Type: application/json');
  echo json_encode( $menus );
  exit;
  
}catch (PDOException $e){
  // 例外処理
  die('Error:' . $e->getMessage());
}