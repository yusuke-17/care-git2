<?php
session_start();
date_default_timezone_set('Asia/Tokyo');
require_once("./config/care_config.php");
require_once("./model/care_user.php");

//ログアウト処理
if (isset($_GET['logout'])) {
  $_SESSION = array();
}

//ログインを経由しているか確認
if (!isset($_SESSION['user'])) {
  header('Location:/Care/login.php');
  exit;
}

try {
  $user = new User($host,$dbname,$user,$pass);
  $user->connectDB();
  $id='';

  //スタッフの削除
  if (isset($_POST['delete'])) {
    $user->delete($_POST['delete']);
  }

  //スタッフの参照
    $result=$user->staffFindALL();

} catch (PDOException $e) {
  // PDOExceptionをキャッチする
    print "エラー!: " . $e->getMessage() . "<br/gt;";
    die();

}

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>介護日誌「Care」</title>
    <link rel="stylesheet" href="css/admin_user.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script>
    $(function(){
      $('.delete_btn').on('click',function(){
        if(!confirm('本当に削除しますか？')){
       /* キャンセルの時の処理 */
       return false;
        }else{
       /*OKの時の処理 */
        }
      });
    })
    </script>
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
                        <li class="nav-item"><a class="nav-link px-4" href="admin.php">入所者</a></li>
                        <li class="nav-item active "><a class="nav-link px-4" href="admin_user.php">スタッフ</a></li>
                    </ul>
                    <ul class="nav__sub navbar-nav navbar-right order-md-1 align-items-center d-block d-md-flex">
                        <li class="nav-item"><a class="nav-link px-4 px-md-0"><i class="fas fa-caret-right d-none d-md-inline"></i>管理者:<?php print $_SESSION['user']['name']; ?></a></li>
                        <li class="nav-item"><a class="nav-link btn btn-rounded px-5 color__btn mx-1 mx-md-0" href="?logout=1">ログアウト</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <a href="admin_usernew.php" class="btn-square-pop" style="margin: 20px;">新規スタッフ登録</a>
        </header>
        <table class="carer_table">
          <thead>
          <tr class="carer-list">
            <th>名前</th>
            <th>職</th>
            <th>性別</th>
            <th>編集</th>
            <th>削除</th>
          </tr>
          </thead>
          <?php foreach ($result as $value) { ?>
          <tbody>
          <tr>
            <td class="carer-name"><?php print $value['name']; ?></td>
            <td>
              <?php if(($value['role'])==="1"){?>
                スタッフ
              <?php }if(($value['role'])==="0"){?>
                管理者
              <?php }?>
            </td>
            <td>
              <?php if(($value['gender'])==="0"){?>
                男
              <?php }if(($value['gender'])==="1"){?>
                女
              <?php }?>
            </td>
            <form name="form" action="admin_useredit.php" method="POST">
            <td>
                <input type="submit" class="care-button"  value="編集">
                <input type="hidden" name="edit" value="<?php print $value['id']; ?>">
            </td>
          </form>
            <form name="form" action="" method="POST">
            <?php if ($_SESSION['user']['role']==0) {?>
            <td>
                <input type="submit" class="delete_btn" value="削除">
                <input type="hidden" name="delete" value="<?php print $value['id']; ?>">
            </td>
            <?php }?>
          </form>
          </tr>
         </tbody>
         <?php } ?>
        </table>
        <div style="text-align: center;">
        <small>© 2020 Ryoke Yusuke</small>
        </div>
  </body>
</html>
