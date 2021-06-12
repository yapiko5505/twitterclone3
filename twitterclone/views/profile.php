<<<<<<< HEAD
<?php
// 設定関連を読み込む
include_once('../config.php');
// 便利な関数を読み込む
include_once('../util.php');

// ツイート一覧作成
$view_tweets = [
    [
        'user_id' => 1,
        'user_name' =>'taro',
        'user_nickname' =>'太郎',
        'user_image_name' => '\sample-person.jpg',
        'tweet_body' => '今プログラミングをしています。',
        'tweet_image_name' => null,
        'tweet_created_at' => '2021-03-15 14:00:00',
        'Like_id' => null,
        'Like_count' => 0,
    ],

];

?>

=======
>>>>>>> 7331b10e6b7afa27b5bd475f2be189920e059cfe

<!DOCTYPE html>
<html lang="ja">
<head>
<<<<<<< HEAD
    
    <?php include_once('../views/common/head.php'); ?>
=======
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="\TwitterClone\views\img\logo-twitterblue.svg">
    <!--Bootstrap CSS  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="\TwitterClone\views\css\style.css" rel="stylesheet">
    <!-- js -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous" difer></script>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous" defer></script> -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous" defer></script>
    <!-- いいね! js -->
    <script src="/TwitterClone/views/js/like.js"></script>

>>>>>>> 7331b10e6b7afa27b5bd475f2be189920e059cfe
    <title>プロフィール画面/twitterクローン</title>
    <meta name="discription" content="プロフィール画面です">

</head>
<body class="home profile text-center">
    <div class="container">
<<<<<<< HEAD
    
        <?php include_once('../views/common/side.php'); ?>   
=======
        <div class="side">
            <div class="side-inner">
                <ul class="nav flex-column">
                    <li class="nav-item"><a href="home.php" class="nav-link"><img src="\TwitterClone\views\img\logo-twitterblue.svg" alt="" class="icon"></a></li>
                    <li class="nav-item"><a href="home.php" class="nav-link"><img src="\TwitterClone\views\img\icon-home.svg" alt=""></a></li>
                    <li class="nav-item"><a href="search.php" class="nav-link"><img src="\TwitterClone\views\img\icon-search.svg" alt=""></a></li>
                    <li class="nav-item"><a href="notification.php" class="nav-link"><img src="\TwitterClone\views\img\icon-notification.svg" alt=""></a></li>
                    <li class="nav-item"><a href="profile.php" class="nav-link"><img src="\TwitterClone\views\img\icon-profile.svg" alt=""></a></li>
                    <li class="nav-item"><a href="post.php" class="nav-link"><img src="\TwitterClone\views\img\icon-post-tweet-twitterblue.svg" alt="" class="post-tweet"></a></li>
                    <li class="nav-item my-icon"><img src="\TwitterClone\views\img_uploaded\user\sample-person.jpg" class="js-popover" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="right"
                    data-bs-content="<a href='profile.php'>プロフィール</a><br><a href='sign-out.php'>ログアウト</a>" data-bs-html="true"></li>
                </ul>
            </div>
        </div>
>>>>>>> 7331b10e6b7afa27b5bd475f2be189920e059cfe
        <div class="main">
            <div class="main-header">
                <h1>太郎</h1>
                
            </div>
            <div class="profile-area">
                <div class="top">
                    <div class="user"><img src="\TwitterClone\views\img_uploaded\user\sample-person.jpg" alt=""></div>

                        <?php if (isset($_GET['user_id'])) : ?>
                            <!-- 他人のプロフィール -->
                            <?php if (isset($_GET['case'])) : ?>
                                <button class="btn btn-sm">フォローを外す</button>
                            <?php else : ?>   
                                <button class="btn btn-reverse">フォローする</button>
                            <?php endif; ?>
                        <?php else: ?>
                            <!-- 自分のプロフィール -->
                            <button class="btn btn-reverse btn-sm js-modal-button" type="submit" data-bs-toggle="modal" data-bs-target="#js-modal">プロフィール編集</button>

                            <div class="modal fade" id="js-modal" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="profile.php" method="post" enctype="multipart/form-data">
                                            <div class="modal-header">
                                                <h5 class="modal-title">プロフィールを編集</h5>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="user">
                                                    <img src="\TwitterClone\views\img_uploaded\user\sample-person.jpg" alt="">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="mb-1">プロフィール写真</label>
                                                    <input type="file" class="form-control form-control-sm" name="image">
                                                </div>

                                                <input type="text" class="mb-4 from-control" name="nickname" maxlength="50" value="太郎" placeholder="ニックネーム" required>
                                                <input type="text" class="mb-4 from-control" name="name" maxlength="50" value="taro" placeholder="ユーザー名" required>
                                                <input type="email" class="mb-4 from-control" name="email" maxlength="254" value="taro@techis.jp" placeholder="メールアドレス" required>
                                                <input type="password" class="mb-4 from-control" name="password" minlength="4" maxlength="128" value="" placeholder="パスワードを変更する場合はご入力ください">
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-reverse" data-bs-dismiss="modal">キャンセル</button>
                                                <button class="btn" type="submit">保存する</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                        <?php endif; ?> 
                            </div>
                    </div>

                    <div class="name">太郎</div>
                    <div class="text-muted">@taro</div>

                    <div class="follow-follower">
                        <div class="follow-count">1</div>
                        <div class="follow-text">フォロー中</div>
                        <div class="follow-count">1</div>
                        <div class="follow-text">フォロワー</div>
                    </div>
            </div>
            <div class="ditch"></div>

<<<<<<< HEAD
            <?php if (empty($view_tweets)): ?>
                <p class="p-3">ツイートがまだありません</p>
            <?php else: ?>
                <div class="tweet-list">
                    <?php foreach ($view_tweets as $view_tweet): ?>
                    <?php include('../views/common/tweet.php'); ?>
                    <?php endforeach; ?>
                </div>
            <?php endif;?>
            
        </div>
    </div>
    <?php include_once('../views/common/foot.php'); ?>
=======
            <!-- TODO:後日実装
            ツイート一覧 
            -->
            
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            $('.js-popover').popover ({
                container: 'body'
            })
        }, false);
    </script>
>>>>>>> 7331b10e6b7afa27b5bd475f2be189920e059cfe
</body>

</html>

































































