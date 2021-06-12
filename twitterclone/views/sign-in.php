<<<<<<< HEAD
<?php
// 設定関連を読み込む
include_once('../config.php');
// 便利な関数を読み込む
include_once('../util.php');

?>




<!DOCTYPE html>
<html lang="ja">
<head>

    <?php include_once('../views/common/head.php'); ?>
=======
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="discription" content="ホーム画面です">
    <link rel="icon" href="\TwittewrClone\views\img\logo-twitterblue.svg">
    <!--Bootstrap CSS  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="\TwitterClone\views\css\style.css" rel="stylesheet">
    
>>>>>>> 7331b10e6b7afa27b5bd475f2be189920e059cfe
    <title>ログイン画面/twitterクローン</title>
    <meta name="description" content="ログイン画面です">
</head>

<body class="signup text-center">
    <main class="form-signup">
        <form action="sign-in.php" metsod="post">
            <img src="/twitterClone/views/img/logo-white.svg" alt="" class="logo-white">
            <h1>Twitterクローンにログイン</h1>
            <input type="email" class="form-control" name="email" placeholder="メールアドレス" require autofocus>
            <input type="password" class="form-control" name="password" placeholder="パスワード" require>
            <button class="w-100 btn btn-lg" type="submit">ログインする</button>
            <p class="mt-3 mb-2"><a href="sign-up.php">会員登録する</a></p>
            <p class="mt-2 mb-3 text-muted">&copy; 2021</p>


        </form>
    </main>
<<<<<<< HEAD
    <?php include_once('../views/common/foot.php'); ?>
=======

>>>>>>> 7331b10e6b7afa27b5bd475f2be189920e059cfe
</body>

</html>