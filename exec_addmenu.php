<?php
  require_once("config.php");
  $obj =new Bar();

  function h($str) {
    return htmlspecialchars($str,ENT_QUOTES);
  }
  
  $m_cat  = $_POST["m_cat"];
  $m_name = h($_POST["m_name"]);
  $m_price= $_POST["m_price"];
  $obj->addMenu($m_cat,$m_name,$m_price);

  header("Location:addmenu.php");