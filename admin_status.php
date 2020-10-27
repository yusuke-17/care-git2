<?php
session_start();

//ログアウト処理
if (isset($_GET['logout'])) {
  $_SESSION = array();
}

//ログインを経由しているか確認
if (!isset($_SESSION['user'])) {
  header('Location:/Care/login.php');
  exit;
}


 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>介護日誌「Care」</title>
    <link rel="stylesheet" href="css/carer_inform.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-default navbar-expand-md navbar-light py-0 color__navi">
            <div class="container">
                    <a class="navbar-brand" href="admin.php">
                        <h1 class="font-weight-bold color__logo">
                        介護日誌「Care」
                        </h1>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
                            aria-controls="navbarContent" aria-expanded="false" aria-label="スマートフォン用ナビゲーション">
                            <span class="navbar-toggler-icon"></span>
                            <span class="toggler__txt">メニュー</span>
                        </button>
                <div class="navbar-collapse collapse flex-column align-items-end pb-3 pb-md-0" id="navbarContent">
                    <ul class="nav__main navbar-nav order-md-2 mt-3">
                      <li class="nav-item active "><a class="nav-link px-4" href="admin.php">入所者</a></li>
                      <li class="nav-item"><a class="nav-link px-4" href="admin_user.php">スタッフ</a></li>
                    </ul>
                    <ul class="nav__sub navbar-nav navbar-right order-md-1 align-items-center d-block d-md-flex">
                        <li class="nav-item"><a class="nav-link px-4 px-md-0"><i class="fas fa-caret-right d-none d-md-inline"></i>管理者　領家</a></li>
                        <li class="nav-item"><a class="nav-link btn btn-rounded px-5 color__btn mx-1 mx-md-0" href="?logout=1">ログアウト</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <h2 style="text-align: center; margin-top: 50px;">入所者の状態</h2>
    <div class="cp_iptxt" style="text-align:center;">
	     <label class="ef">
	        <input type="text" placeholder="記入者">
	     </label>
       <label class="ef">
          <input type="text" size="30" placeholder="内容">
       </label>
       <label class="ef">
          <input type="time" name="time">
       </label>
       <a href="" class="care-button" style="">登録</a>
    </div>
    <div style="text-align:center;">
      <input type="date" name="日付">
      <input type="button" name="serch" value="検索">
    </div>
    <table style="width: 800px; margin: 0 auto; margin-top: 50px;">
      <thead>
        <tr class="carer_status">
          <th>日付時間</th>
          <th>内容</th>
          <th>記入者</th>
          <th>編集・削除</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="carer-date">8月19日 16時</td>
          <td>昼寝</td>
          <td>領家裕介</td>
          <td>
            <input type="button" name="edit" value="編集">
            <input type="button" name="delete" value="削除">
          </td>
        </tr>
      </tbody>
    </table>
  </body>
</html>
