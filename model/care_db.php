<?php
date_default_timezone_set('Asia/Tokyo');
class db{
  //プロパティ
  public $host;
  public $dbname;
  public $user;
  public $pass;
  public $connent;
  //コンストラクト
  function __construct($host,$dbname,$user,$pass){
    $this->host=$host;
    $this->dbname=$dbname;
    $this->user=$user;
    $this->pass=$pass;
  }
  //メソッド
  public function connectDB(){
    $this->connect = new PDO('mysql:host='.$this->mysql10077.xserver.jp.';dbname='.$this->xs390128_carer, $this->xs390128_carer, $this->carer1117);
    if (!$this->connect) {
      echo "DB不可";
      die();
    }
  }
}
