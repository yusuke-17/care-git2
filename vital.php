<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>介護日誌「Care」</title>
    <link rel="stylesheet" href="css/vital.css">
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
                    <a class="navbar-brand" href="carer.php">
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
                        <li class="nav-item"><a class="nav-link px-4" href="carer.php">トップ</a></li>
                        <li class="nav-item"><a class="nav-link px-4" href="food.php">食事</a></li>
                        <li class="nav-item active"><a class="nav-link px-4" href="vital.php">バイタル</a></li>
                        <li class="nav-item"><a class="nav-link px-4" href="excretion.php">排泄</a></li>
                        <li class="nav-item"><a class="nav-link px-4" href="bath.php">風呂</a></li>
                    </ul>
                    <ul class="nav__sub navbar-nav navbar-right order-md-1 align-items-center d-block d-md-flex">
                        <li class="nav-item"><a class="nav-link px-4 px-md-0"><i class="fas fa-caret-right d-none d-md-inline"></i>介護職 領家裕介</a></li>
                        <li class="nav-item"><a class="nav-link btn btn-rounded px-5 color__btn mx-1 mx-md-0" href="">ログアウト</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        </header>
        <table class="carer_table">
          <thead>
          <tr class="carer-list">
            <th>名前</th>
            <th>体温</th>
            <th>血圧</th>
            <th>サーチ</th>
            <th>脈</th>
            <th>記入者</th>
            <th>更新</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td class="carer-name">山田太郎</td>
            <td>
              <p class="kt">
              KT:<input type="text" name="kt" size="5" maxlength="10" value="">
              </p>
            </td>
            <td>
              BP:
              <input type="text" name="high-blood" size="5" maxlength="10" value="">/
              <input type="text" name="low-blood" size="5" maxlength="10" value="">
            </td>
            <td>
              S:<input type="text" name="search" size="5" maxlength="10" value="">
            </td>
            <td>
              P:<input type="text" name="pulse" size="5" maxlength="10" value="">
            </td>
            <td><input type="text" name="writer" size="10" value=""></td>
            <td><a href="" class="care-button">更新</a></td>
          </tr>
          </tbody>
        </table>
  </body>
</html>
