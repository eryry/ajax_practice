<?php

class Bar{
  public $pdp;

  public function __construct(){

    $host   = "localhost";
    $dbname = "menus";
    $dbuser = "root";
    $dbpass = "";
    
    $dsn = "mysql:host={$host};dbname={$dbname};charset=utf8";
    $this->pdo = new PDO($dsn,$dbuser,$dbpass);
  }
  
  public function getCat($m_cat) {
    $sql = "SELECT * FROM menus WHERE m_cat=:m_cat";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(":m_cat",$m_cat, PDO::PARAM_INT);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
    // $res = $pdo->query($sql);
    // var_dump($res);
  } 

  public function addMenu($m_cat,$m_name,$m_price){
    $sql = "INSERT INTO menus(m_cat,m_name,m_price) VALUE(:m_cat,:m_name,:m_price)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(":m_cat",$m_cat,PDO::PARAM_INT);
    $stmt->bindValue(":m_name",$m_name,PDO::PARAM_STR);
    $stmt->bindValue(":m_price",$m_price,PDO::PARAM_INT);
    $stmt->execute();

  }
}